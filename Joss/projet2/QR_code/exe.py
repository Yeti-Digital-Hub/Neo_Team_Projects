import math 

nbr = float(input("entrer le nombre decimal"))
int_part = int(nbr)
decimal_part = nbr - int_part
chaone = str(nbr)
arrondi = len(chaone.split( ".")[1])
print(arrondi)
print("la partie entier est : ", int_part)
print("la partie decimale est : ", round(decimal_part,arrondi ))

while  (round(decimal_part,arrondi ) != 0.0) :
    