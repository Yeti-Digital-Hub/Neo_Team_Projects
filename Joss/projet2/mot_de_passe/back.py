import getpass
import json


compte = {
    "nom":"aucun",
    "prenom":"aucun",
    "mot_de_pass":"aucun"
}

with open ("compte.json", "w") as file:
    json.dump(compte,file, indent=4)

nom_utilisateur=input("entrer votre nom")
prenom_utilisateur=input("entrer votre prenom")
mot_de_pass=input("entrer le mot de pass")

compte["nom"]=nom_utilisateur
compte["prenom"]=prenom_utilisateur
compte["mot_de_pass"]= mot_de_pass

with open ("file.json","r",encoding= "uts-8") as file:
    data = json.load(f)


with open("fichier.json", "r", encoding="utf-8") as f:
    data = json.load(f)