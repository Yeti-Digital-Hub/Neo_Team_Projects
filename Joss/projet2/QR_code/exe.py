nbr=  float(input("entrer"))
chaine = str(nbr)
print("nombre de chiffre est ",  len(chaine.split('.')[1]))

decimal_part = float(input("entrer un nombre"))
chaine = str(decimal_part)
liste_decimal=[]
i = 2
for i in  range(len(chaine) - 2):
    print("\n", i)
    liste_decimal.insert((i+2),( chaine[i]))
print(liste_decimal)