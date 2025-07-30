
nombre = float(input("entrer le reel a convertir"))
chaine = str(nombre)
partie_entiere = chaine.split('.')[0]
partie_decimale = chaine.split('.')[1]
print("Partie entière :", partie_entiere)   # "452" (chaîne)
print("Partie décimale :", partie_decimale) # "1253" (chaîne)
