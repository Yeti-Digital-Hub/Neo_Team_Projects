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



def connexion(nom,prenom,mot_de_pass):

    with open("data.json","r",encoding="utf-8") as file:
        data = json.load(file)

    for i in data : #pour determiner si l'utilisateur a deja cree un compte
        if (i['nom']== nom)and (i['prenom']== prenom):
            code =(hl.sha256(mot_de_pass.encode()),hexdigest())
            if (i['mot_de_pass']==code):
                print("jjjjj")
            else:
                no= tk.Label(fenetre,text="kkkkkkkkkkk")
                no.place(x=100, y=250)



def fon(m):
    if m==4 :
        print(5)
