import math 

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



# on converti d'abord en chaine pour pouvoir utiliser facilen=ment dans les fonctions qui suivent

def chaine_binaire(liste) :
    chaine = "0b"
    for i in (liste) :
        chaine = chaine + str(i)
    return chaine


#nb comme on a pri le nombre de bit egale a 8 les nombres a convertir doivent estre inferieur a 256 2^n
def nbr_relatif(nbr_decim):
    somme = 256 +nbr_decim #formule donner dans le docunment de monsieur Amougou
    liste_binaire = nbr_entier(somme)
    return liste_binaire

# cette partie permet de determiner la partie decimal et la parti entier des reels que l'utilisateur veut coder
nbr= float(input("enter le reel a convertir "))
int_part = int(nbr)
chaine = str(nbr)
arrondi = len(chaine.split( ".")[1])
decimal_part = nbr - int_part
decimal_part =  round(decimal_part,arrondi)

#cette fonction va servir a convertir les parties decima;s des nombre en binaire 
def decimal(DECIMAL_PART):
    mantisse = ""
    if (DECIMAL_PART == 0.0):
        mantisse = "0"
        return mantisse
    
    nbr= int()
    mantisse = str(nbr)
    produit = str(DECIMAL_PART * 2)

    decimal_part, int_part = math.modf( DECIMAL_PART * 2)
    arrondi= len (produit.split(".")[1])
    
    return mantisse + decimal(round(decimal_part, arrondi))


print( "",decimal(nbr))
def nbr_reel(nbr):
    integer_part= int (nbr)
