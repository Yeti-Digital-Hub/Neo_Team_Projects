import csv
import time as T
USERNAME = input("entrer votre nom :")

with open("base.csv","r", encoding="utf-8") as f: # pour ouvir lire le fichier base.csv 
    liste = list(csv.reader(f)) #pour pouvoir lire chaque ligne de notre fichier
    taille = len(liste)
    if (taille-1) == 0:   # pour verifier si le fichier  a deja rempli
        print("bien venu dans TERMINAL TACHT, vous ete le premier utilisateur ")
    else:
        if liste[taille-1][0] == USERNAME :       #verifie si l'utilisateur a eux un nouveua message

            print("\nvous n'avez aucun nouveau message : \n")
        else:
            print("\nVOUS AVEZ UN NOUVEAU MESSAGE : \n")
        m=float(liste[taille-1][1])
        date = T.localtime(m)
        date_year=T.strftime("%Y-%m-%d", date)
        date_hour = T.strftime( "%H:%M:%S", date)
        lire = int(input("entrer 1 pour lire le dernier message et 2 pour voir l'historique des messages :\n"))
        if  lire ==1 :
            print ( f"Message de {liste [taille-1][0]} le {date_year} a {date_hour} : {liste [taille-1][2]}") # afficher le dernier message 
        elif lire ==2 :
            with open("base.csv","r", encoding="utf-8") as f:
                donne_dic = csv.DictReader(f) #pour lire tous le fichier mais sous forme de dictionnaire 

                for ligne in donne_dic :  #permet de lire la base de donne ligne par ligne 
                    m=float(ligne["date"])
                    dat = T.localtime(m)
                    date_year=T.strftime("%Y-%m-%d", dat) 
                    date_hour = T.strftime( "%H:%M:%S", dat)
                    print(f"message de {ligne["nom"]} le {date_year} a {date_hour} : {ligne["message"]}.\n")


nouveau_message= input("voulez vous laisser un nouvaue message ?? (repondre par oui ou par non :) \n")

if nouveau_message == "oui"or nouveau_message== "OUI" :
    date = T.time()
    message = input("entrer votre message :")

    with open("base.csv","a",newline="", encoding="utf-8") as f:
        write = csv.writer(f)

        write.writerow([ USERNAME, date , message]) 
