
import json
import os

TASKS_FILE = "tasks.json"

# --- Utilitaires ---
def load_tasks():
    """Charge les tâches depuis tasks.json"""
    if not os.path.exists(TASKS_FILE):
        return []
    try:
        with open(TASKS_FILE, "r", encoding="utf-8") as f:
            content = f.read().strip()
            return json.loads(content) if content else []
    except json.JSONDecodeError:
        return []

def save_tasks(tasks):
    """Enregistre les tâches dans tasks.json"""
    with open(TASKS_FILE, "w", encoding="utf-8") as f:
        json.dump(tasks, f, indent=4, ensure_ascii=False)

def show_tasks(tasks):
    """Affiche la liste des tâches"""
    if not tasks:
        print("📭 Aucune tâche pour l’instant.")
        return
    print("\n=== Liste des tâches ===")
    for t in tasks:
        status = "✅" if t["terminée"] else "❌"
        print(f'{t["id"]}. {t["titre"]} [{status}]')
    print("=======================\n")

# --- Actions CRUD ---
def add_task(tasks):
    titre = input("Titre de la tâche > ").strip()
    if not titre:
        print("❌ Titre vide.")
        return
    task_id = max([t["id"] for t in tasks], default=0) + 1
    tasks.append({"id": task_id, "titre": titre, "terminée": False})
    save_tasks(tasks)
    print(f"✅ Tâche ajoutée : {titre}")

def delete_task(tasks):
    show_tasks(tasks)
    try:
        task_id = int(input("ID de la tâche à supprimer > "))
        task = next((t for t in tasks if t["id"] == task_id), None)
        if task:
            tasks.remove(task)
            save_tasks(tasks)
            print(f"🗑️ Tâche supprimée : {task['titre']}")
        else:
            print("❌ Tâche non trouvée.")
    except ValueError:
        print("❌ ID invalide.")

def update_task(tasks):
    show_tasks(tasks)
    try:
        task_id = int(input("ID de la tâche à mettre à jour > "))
        task = next((t for t in tasks if t["id"] == task_id), None)
        if task:
            nouveau_titre = input(f"Nouveau titre (ancien: {task['titre']}) > ").strip()
            if nouveau_titre:
                task["titre"] = nouveau_titre
                save_tasks(tasks)
                print(f"✏️ Tâche mise à jour : {nouveau_titre}")
            else:
                print("❌ Titre vide, rien changé.")
        else:
            print("❌ Tâche non trouvée.")
    except ValueError:
        print("❌ ID invalide.")

def mark_done(tasks):
    show_tasks(tasks)
    try:
        task_id = int(input("ID de la tâche à marquer comme terminée > "))
        task = next((t for t in tasks if t["id"] == task_id), None)
        if task:
            task["terminée"] = True
            save_tasks(tasks)
            print(f"✅ Tâche terminée : {task['titre']}")
        else:
            print("❌ Tâche non trouvée.")
    except ValueError:
        print("❌ ID invalide.")

# --- Main loop ---
def main():
    tasks = load_tasks()
    while True:
        print("\n--- To-Do List ---")
        print("1. Ajouter une tâche")
        print("2. Supprimer une tâche")
        print("3. Mettre à jour une tâche")
        print("4. Marquer comme terminée")
        print("5. Afficher toutes les tâches")
        print("0. Quitter")
        choice = input("> ").strip()
        if choice == "1":
            add_task(tasks)
        elif choice == "2":
            delete_task(tasks)
        elif choice == "3":
            update_task(tasks)
        elif choice == "4":
            mark_done(tasks)
        elif choice == "5":
            show_tasks(tasks)
        elif choice == "0":
            print("👋 Au revoir !")
            break
        else:
            print("❌ Choix invalide.")

if __name__ == "__main__":
    main()
