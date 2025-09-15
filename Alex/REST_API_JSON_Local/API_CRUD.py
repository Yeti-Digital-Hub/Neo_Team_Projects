# import des modules nécessaires ; Flask pour créer l'API REST, request pour récupérer les données envoyées par le client, jsonify pour renvoyer des réponses JSON
from flask import Flask, request, jsonify
# json pour lire et écrire dans le fichier JSON, Path pour gérer facilement le chemin du fichier
import json
from pathlib import Path


app = Flask(__name__)

# chemin vers le fichier JSON qui stocke les tâches
DATA_FILE = Path(__file__).parent / "tasks.json"

# --- Fonctions utilitaires pour gérer le JSON ---

# fonction pour charger toutes les tâches depuis le fichier JSON
def load_tasks():
    with open(DATA_FILE, "r", encoding="utf-8") as f:
        return json.load(f)

# fonction pour sauvegarder la liste des tâches dans le fichier JSON
def save_tasks(tasks):
    with open(DATA_FILE, "w", encoding="utf-8") as f:
        json.dump(tasks, f, indent=4, ensure_ascii=False)

# --- Routes de l'API ---

# route principale de test pour vérifier que l'API fonctionne
@app.route("/")
def hello():
    return "BIENVENUE DANS MON API REST AVEC FLASK !"


@app.route("/tasks", methods=["GET", "POST"])
def tasks_collection():
    # charger les tâches depuis le JSON
    tasks = load_tasks()

    # si la requête est un GET, renvoyer toutes les tâches au format JSON
    if request.method == "GET":
        return jsonify(tasks)
    
    # si la requête est un POST, créer une nouvelle tâche
    if request.method == "POST":
        data = request.get_json()  
        # générer un ID unique en prenant le max des IDs existants +1
        data['id'] = (max([t["id"] for t in tasks], default=0) + 1)
        tasks.append(data)  
        save_tasks(tasks)   
        return jsonify(data), 201  

# route pour récupérer, mettre à jour ou supprimer une tâche spécifique par son ID
@app.route("/tasks/<int:task_id>", methods=["GET", "PUT", "DELETE"])
def task_item(task_id):
    tasks = load_tasks()  
    
    task = next((t for t in tasks if t["id"] == task_id), None)
    # si la tâche n'existe pas, renvoyer une erreur 404
    if not task:
        return jsonify({"error": "Task not found"}), 404

    # GET : renvoyer la tâche trouvée
    if request.method == "GET":
        return jsonify(task)
    
    # PUT : mettre à jour la tâche avec les nouvelles données
    if request.method == "PUT":
        new_data = request.get_json()  
        task.update(new_data)          
        save_tasks(tasks)              
        return jsonify(task), 200      
    
    # DELETE : supprimer la tâche
    if request.method == "DELETE":
        # filtrer la liste pour supprimer la tâche avec l'ID correspondant
        tasks = [t for t in tasks if t["id"] != task_id]
        save_tasks(tasks)  
        return '', 204      # renvoyer code HTTP 204 No Content

# point d'entrée pour lancer l'application Flask
if __name__ == "__main__":
    app.run(debug=True)  # lancement en mode debug pour rechargement automatique et affichage des erreurs
