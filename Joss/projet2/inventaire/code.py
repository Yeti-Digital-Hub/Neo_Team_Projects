import fonction
import json 


print("bienvenu dans votre inventaire ")

choix_1=input("entrer 1 pour creer une nouvel inventaire et 2 pour modifier un un inventaire deja creer au parr avant : ")

match choix_1:
    case "1":
        data={}
        nouvel_inventaire = 'oui'
        nom_inventaire = input ("entrer le nom de l'inventaire que vous voulez creer")
        while nouvel_inventaire =='oui' :
            fonction.inventaire(data)
            nouvel_inventaire = input("voulez vous creer un autres inventaire ")
    case "2":
            modifier = input("voulez vous encore modifier ::")
            while modifier =="oui":

                with open("data.json","r",encoding="utf-8") as file :
                    data =json.load(file)

                nom_inventaire = input ("donner le nom de l'inventaire que vous voulez modifier: ")
                print(" (A :pour ajouter un element (marque) a un inventaire qui existe deja ;\n (B: pour ajouter un element);\n(C:pour suprimer un element);\n(D: pour changer le prix d;un element )  )")
                choix_2 =input("que vous voules vous faire ??")
        
                match choix_2:
                    case "A":
                        fonction.nouvel_element (nom_inventaire,data)
                    case "B": 
                        fonction.ajouter_qantite(nom_inventaire,data)
                    case "C":
                        fonction.suprimer_qantite(nom_inventaire,data)
                    case "D": 
                        fonction.changer_prix(nom_inventaire,data)
                    
                with open("data.json","W") as file :
                    json.dump(data,file, indent=4)

