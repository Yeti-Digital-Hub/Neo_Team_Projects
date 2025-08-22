
import fonction
import json 

data={}

nouvel_inventaire = 'oui'
nom_inventaire = input ("entrer le nom de l'inventaire que vous voulez creer")

while nouvel_inventaire =='oui' :

    fonction.inventaire(data)
    nouvel_inventaire = input("voulez vous creer un autres inventaire ")


