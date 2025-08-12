import getpass
import json
import hashlib as hl

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



def connexion(nom,prenom,mot_de_pass):

    with open("data.json","r",encoding="utf-8") as file:
        data = json.load(file)

    for i in data :
        print(i[0])


ee ="cjj"
ff="ddk"
oo= "dddc"
connexion(ee,ff,oo)



