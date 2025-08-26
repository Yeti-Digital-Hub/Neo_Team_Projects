import json 


def elem(nouvel_elm,nom_inventaire,data):
    element = {
    "marque":"oo",
    "quantite":0,
    "prix_unitaire":0
    }
    while nouvel_elm=='oui':
        compt=0
        marque = input("entrer la marque du nouvel element ; ")
        for elem in data[nom_inventaire]:
            if marque == elem["marque"] : # pour verifier s'il n y a pas un autre marque avec le meme nom
                print(f"cette marque existe deja dans l'inventaire {nom_inventaire}")
                                                    # arrete la boucle si il y avit deja un marque avec le meme nom
            else: 
                compt=compt+1

        if compt == len(data[nom_inventaire]):
            element["marque"] = marque
            element["prix_unitaire"]= int(input(f"entrer le prix d'un(e) {marque} : "))
            element["quantite"]= int(input(f"entrer la quantite de {marque} que vous avez : "))
            data[nom_inventaire].append(element)
            
        nouvel_elm= input("avez vous un nouvel element a enregistre (oui oi non) : ")

def inventaire():
    nom_inventaire = input ("entrer le nom de l'inventaire que vous voulez creer : ")
    with open("data.json","r",encoding="utf-8") as  file :
        data= json.load(file)    
        compt=0
        for inventaire in data :
            if nom_inventaire == inventaire : # pour verifier s'il n y a pas un autre inventaire avec le meme nom
                print("cet inventaire existedeja desole")
                break
            else: 
                compt=1+compt

        if compt == len(data):
            data[nom_inventaire]= []
            nouvel_elm='oui'
            elem(nouvel_elm,nom_inventaire,data)
            with open("data.json","w") as file :
                json.dump(data,file,indent=4)


def ajouter_qantite (nom_inventaire,data):
        marque = input ("entrer la marque que vous voulez changer : ")
        quantite_ajoute = int(input(f"quel quantite vous de {marque} voulez ajouter : "))
        i=0
        for inventaire in data :
            if nom_inventaire == inventaire:
                for elem in (data[nom_inventaire]):  
                    if elem["marque"] == marque:
                        elem['quantite']= elem['quantite']+quantite_ajoute
                        print("\n")
                        break
                    else:
                        i=i+1
                break
        if i == int(len (data[nom_inventaire])):
            print(f"la marque {marque}, que voulez modifier n'existe pas dans l'inventaire {nom_inventaire} ")
        print(data)


def suprimer_qantite (nom_inventaire,data):

    marque = input ("entrer la marque que vous voulez changer : ")
    quantite_suprimer = int(input(f"quel quantite de {marque} voulez suprimer : "))
    i =0
    for elem in (data[nom_inventaire]):  
        if elem["marque"] == marque:
            elem['quantite']= elem['quantite'] - quantite_suprimer
            print("\n")
            break
        else:
            i=i+1
            break
    if i == int(len (data[nom_inventaire])):
        print(f"la marque {marque}, que voulez modifier n'existe pas dans l'inventaire {nom_inventaire}")
    print(data)


def nouvel_element(nom_inventaire,data):
    elem={
        "nom":"l",
        "quantite":0,
        "prix_unitaire":0}
    
    elem['nom']= input("entrer le nom de l'elementa ajouter : ")
    elem['quantite']= int(input(f"entrer la quantitede de {elem['nom']} que vous avez : "))
    elem['prix_unitaire']= int(input(f"entrer le prix de {elem['nom']} que vous avez : "))
    data[nom_inventaire].append(elem)


def changer_prix(nom_inventaire,data ):
    i=0
    marque = input("entrer la marque que vous voulez modifier : ")
    nom_element = input("entrer le nom de l'elementa ajouter : ")
    nouv_prix = int(input(f"entrer le prix de {nom_element} que vous avez : "))
    for inventaire in data :
        if nom_inventaire == inventaire:
            for elem in (data[nom_inventaire]):  
                if elem["marque"] == marque:
                    elem['prix_unitaire']= nouv_prix
                    print("\n")
                    break

                else:
                    i=i+1
            break
    if i == int(len (data[nom_inventaire])):
        print(f"la marque {marque}, que voulez modifier n'existe pas dans l'inventaire {nom_inventaire} ")

