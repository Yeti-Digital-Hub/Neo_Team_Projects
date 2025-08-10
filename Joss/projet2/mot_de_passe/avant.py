import getpass
import json

def enregistrer(nom,prenom,mot_de_pass):

    with open ("data.json","r",encoding= "utf-8") as file:
        data = json.load(file)

    compte={
        "nom":"ll",
        "prenom":"kk",
        "mot de pass":"ll"
    }
    compte["nom"]=nom
    compte["prenom"]=prenom
    compte["mot de pass"]=mot_de_pass

    data = data + [compte]

    with open ("data.json","w") as file:
        json.dump(data,file, indent=4)
