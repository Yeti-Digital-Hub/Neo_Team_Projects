

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


nbr_decim = int(input("entrer le nombre negatif aconvrtir"))
#nb comme on a pri le nombre de bit egale a 8 les nombres a convertir doivent estre inferieur a 256 2^n
def nbr_relatif(nbr_decim):
    somme = 256 +nbr_decim #formule donner dans le docunment de monsieur Amougou
    liste_binaire = nbr_entier(somme)
    return liste_binaire

print(nbr_relatif(nbr_decim))


