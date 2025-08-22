import json 


def elem(nouvel_elm,nom_inventaire,data):
    element = {
    "marque":"oo",
    "quantite":0,
    "prix_unitaire":0
    }
    while nouvel_elm=='oui':
        element["marque"] = input("entrer la marque du nouvel element")
        element["prix_unitaire"]= input("entrer le prix d'un element")
        element["quantite"]= input("entrer la quantite que vous avez")
        data[nom_inventaire].append(element)
        nouvel_elm= input("avez vous un nouvel element a enregistre (oui oi non)")

def inventaire(data):
    nom_inventaire = input("entrer le nom de l'inventaire que vous voulez creer")

    with open("dat.json","r",encoding="utf-8") as  file :
        data= json.load(file)    

        for inventaire in data :
            if nom_inventaire == inventaire : # pour verifier s'il n y a pas un autre inventaire avec le meme nom
                nouvel_inventaire= "non"
                print("cet inventaire existe deja")
                break                           # arrete la boucle si il y avit deja un inventaire avec le meme nom

        data[nom_inventaire]= []
        data[nom_inventaire].append(nom_inventaire)
        nouvel_elm='oui'
        elem(nouvel_elm,nom_inventaire,data)
        with open("dat.json","w") as file :
            json.dump(data,file,indent=4)
        
