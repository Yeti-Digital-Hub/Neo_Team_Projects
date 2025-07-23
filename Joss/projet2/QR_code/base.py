

def nbr_entier(nbr_decimal) :
    nbr_binaire = []
    
    i=0 
    quotien = nbr_decimal
    while quotien != 0 :
        reste = quotien % 2
        quotien = quotien // 2 
        nbr_binaire.insert(i,(reste)) 
        i=i+1
    #cette partie ci permet d'inverser et de completer la liste a 8 bits
    ajout =[0]* (8- (len(nbr_binaire)))
    nbr_converti = nbr_binaire + ajout
    (nbr_converti).reverse()
    return nbr_converti


nbr_decimal = int(input("entrer le nombre a convertir : "))

print(nbr_entier(nbr_decimal))
# on converti d'abord en chaine pour pouvoir utiliser facilen=ment dans les fonctions qui suivent

def chaine_binaire(liste) :
    chaine = "0b"
    for i in (liste) :
        chaine = chaine + str(i)
    
    return chaine
print(" maintenan c'est le nombre  relatif")

def nbr_relatif(nbr_decimal):
    nbr_binaire = nbr_entier(nbr_decimal)
    liste = nbr_entier(nbr_decimal)
    liste_binaire = int(chaine_binaire(liste))

    complement1 = (0b100000000 - 1 ) - liste_binaire
    complement2 = complement1 + 1
    return complement2


nbr_decim = int(input("wntrer un nombre relatif"))
print(nbr_relatif(-nbr_decim))

