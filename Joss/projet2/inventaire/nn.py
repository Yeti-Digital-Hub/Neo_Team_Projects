import json

nom_inventaire = input ("donner le nom de l'inventaire que vous voulez modifier: ")

marque = input ("entrer la marque que vous voulez changer ")
quantite_ajoute = input ("entrer la quantite a ajouter ")
nouv_prix = input("entrer le nouveauprix ")
quantite_suprime = input("entrer la quantite a ajoute")
with open("data.json","r",encoding="utf-8") as file :
    data =json.load(file)



def ajouter_qantite (nom_inventaire,marque,quantite_ajoute):
        for inventaire in data :
            if nom_inventaire == inventaire and marque ==data[inventaire][1]['marque']:
                data[inventaire][1]['quantite_ajoute']= data[inventaire][1]['quantite_ajoute'] + quantite_ajoute
                print("\n")
                break
            else:
                print("jdjjjjjj")

def suprimer_qantite (nom_inventaire,marque,quantite_suprime):
    with open("data.json","r",encoding="utf-8") as file :
        data =json.load(file)

        for inventaire in data :
            if nom_inventaire == inventaire and marque ==data[inventaire][1]['marque']:
                data[inventaire][1]['quantite_suprime']= data[inventaire][1]['quantite_suprime'] - quantite_suprime
                print("\n")
                break
            else:
                print("jdjjjjjj")

def nouvel_element(nom_inventaire):
    nom_element = input("entrer le nom de l'elementa ajouter")
    quantite = int(input(f"entrer la quantitede {nom_element} que vous avez"))
    nouv_prix = int(input(f"entrer le prix de {nom_element} que vous avez"))
    data[inventaire][1]['prix'] = nouv_prix
    data[inventaire][1]['quantite'] = nouv_prix




ajouter(nom_inventaire,marque,quantite_ajoute,nouv_prix)
