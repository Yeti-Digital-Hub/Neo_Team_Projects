import getpass
import json
import hashlib as hl
import tkinter as tk

def enregistrer(nom,prenom,mot_de_pass):

    data = []

    with open ("data.json","r",encoding= "utf-8") as file:
        data = json.load(file)

    compte={
        "nom":"ll",
        "prenom":"kk",
        "mot de pass":"ll"
    }
    compte["nom"]=nom
    compte["prenom"]=prenom
    mot =(hl.sha256(mot_de_pass.encode()).hexdigest())
    compte["mot de pass"]=mot

    data = data + [compte]

    with open ("data.json","w") as file:
        json.dump(data,file, indent=4)



nom= print("entrer le nom ")
prenom = print("entrer  le prenom")
mot_de_passe = print("entrer le mot de passe ")

enregistrer(nom,prenom,mot_de_passe)