import flask


# la fonction qui permetn de creer un compte

def creer_compte(nom,prenom,mot_passe,filliere,niveau):
    with open("data_base.json", "r") as fil :
        data=json.load(fil)


    #CREER ET REMPLIR LE DICTIONNAIRE PYTHON 
    data=[] 
    data["nom"]=nom
    data["prenom"]=prenom
    data["mot_passe"]=mot_passe
    data["filliere"]= filliere
    data["niveau"]= niveau

    with open("data.json", "a") as f:
        json.dump(data,f)

    print(data)

nom = input("entre votre nom")
mot_passe= input("entrer votre mot de passe")
prenom = input("votre prenom")
filliere =input("entreun prenom")

niveau = input("votre niveau ")
creer_compte(nom,prenom,mot_passe,filliere,niveau)