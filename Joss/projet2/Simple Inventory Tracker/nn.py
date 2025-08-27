import json
with open("data.json","r",encoding="utf-8") as file :
    data =json.load(file)

nom_inventaire = input ("donner le nom de l'inventaire que vous voulez modifier: ")


def ajouter_qantite (nom_inventaire):
        marque = input ("entrer la marque que vous voulez changer ")
        quantite_ajoute = int(input(f"entrer la quantite de {marque}que vous voulez ajouter dans {nom_inventaire}"))

        i=0
        for elem in (data[nom_inventaire]):  
            if elem["marque"] == marque:
                elem['quantite']= elem['quantite']+quantite_ajoute
                print("\n")
                print(elem['quantite'])
                break
            else:
                i=i+1
        if i == int(len (data[nom_inventaire])):
            print(f"la marque {marque}, que voulez modifier n'existe pas dans {nom_inventaire} ")
        print()



def suprimer_qantite (nom_inventaire):
    marque = input ("entrer la marque que vous voulez changer ")
    quantite_suprime = int(input(f"entrer la quantite de {marque}que vous voulez suprimer dans "))

    for elem in (data[nom_inventaire]):  
        if elem["marque"] == marque:
            elem['quantite']= elem['quantite'] - quantite_suprime
            print("\n")
                    
        else:
            i=i+1
        if i == int(len (data[nom_inventaire])):
            print(f"la marque {marque}, que voulez modifier n'existe pas dans l'inventaire {nom_inventaire} ")
        print(data)


def nouvel_element(nom_inventaire):
    elem={
        "nom":"l",
        "quantite":0,
        "prix":0}
    
    elem['nom']= input("entrer le nom de l'elementa ajouter")
    elem['quantite']= int(input(f"entrer la quantitede {elem['nom']} que vous avez"))
    elem['prix']= int(input(f"entrer le prix de {elem['nom']} que vous avez"))
    data['nom_inventaire'].append(elem)


def changer_prix(nom_inventaire ):
    i=0
    marque = input("entrer la marque que vous voulez modifier ")
    nom_element = input("entrer le nom de l'elementa ajouter")
    nouv_prix = int(input(f"entrer le prix de {nom_element} que vous avez"))
    for elem in (data[nom_inventaire]):  
        if elem["marque"] == marque:
            elem['prix']= nouv_prix
            print("\n")
                
        else:
            i=i+1
    if i == int(len (data[nom_inventaire])):
        print(f"la marque {marque}, que voulez modifier n'existe pas dans l'inventaire {nom_inventaire} ")
    print(data)




ajouter_qantite(nom_inventaire)
print(data)