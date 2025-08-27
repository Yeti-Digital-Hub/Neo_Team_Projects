import fonction
import json 


print("bienvenu dans votre inventaire ")

choix_1=input("entrer 1 pour creer une nouvel inventaire et 2 pour modifier un un inventaire deja creer au parr avant 3 Pourlire l'inventaire: ")

match choix_1:
    case "1":
        nouvel_inventaire = 'oui'
        while nouvel_inventaire =='oui' :
            fonction.inventaire()
            nouvel_inventaire = input("voulez vous creer un autres inventaire : ")
    case "2":
            modifier = 'oui'
            while modifier =="oui":
                nom_inventaire = input ("donner le nom de l'inventaire que vous voulez modifier: ")

                for inventaire in data :
                    if nom_inventaire == inventaire :
                        fonction.modifier(nom_inventaire)
                        break
                    else:
                        i=i+1
                if i== len(data):
                    print(f"Desole l'inventaire {nom_inventaire} n'eziste pas donc on ne peut pas le modifier")

                modifier = input("voulez vous encore modifier ::")
    case "3":
        fonction.lecture()



