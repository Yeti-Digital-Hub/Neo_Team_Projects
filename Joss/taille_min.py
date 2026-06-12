taille = float(input("entrer la taille de l'element "))
sens = input("sur quel sens ??")

def convertir(taille:float,sens:chr):
    if sens == "h":
        result = (550 * taille) /914
        return result
    else:
        result= (taille*350)/412

        return result
    

print(convertir(taille,sens)) 
