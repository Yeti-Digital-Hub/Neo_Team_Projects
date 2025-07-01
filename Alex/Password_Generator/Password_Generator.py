import string
import random

def generate_password(min_length, numbers=True, special_caracters=True):
    letters = string.ascii_letters  # Toutes les lettres majuscules et minuscules
    digits = string.digits          # Tous les chiffres de 0 à 9
    special = string.punctuation    # Tous les caractères spéciaux (ex : !@#$...)

    characters = letters            # On commence avec les lettres uniquement
    if numbers:
        characters += digits        # On ajoute les chiffres si demandé
    if special_caracters:
        characters += special       # On ajoute les caractères spéciaux si demandé

    pwd = ""                       # Initialisation du mot de passe vide
    meet_criteria = False          # Booléen pour vérifier si on a respecté les critères
    has_number = False             # Booléen pour savoir si on a au moins un chiffre
    has_special = False            # Booléen pour savoir si on a au moins un caractère spécial

    # Tant que le mot de passe ne respecte pas les critères ou sa longueur est insuffisante,
    # on continue à ajouter des caractères
    while not meet_criteria or len(pwd) < min_length:
        new_char = random.choice(characters)  # Choix aléatoire d'un caractère dans la liste possible
        pwd += new_char                       # Ajout du caractère au mot de passe

        # Mise à jour des booléens selon le type du caractère ajouté
        if new_char in digits:
            has_number = True
        elif new_char in special:
            has_special = True

        # On suppose d'abord que les critères sont remplis
        meet_criteria = True

        # Si les chiffres sont requis, on vérifie que le mot de passe en contient au moins un
        if numbers:
            meet_criteria = has_number

        # Si les caractères spéciaux sont requis, on vérifie aussi leur présence
        if special_caracters:
            meet_criteria = meet_criteria and has_special

    return pwd

# Demande à l'utilisateur la longueur minimale désirée
min_length = int(input("Enter the minimum length: "))

# Demande si on veut inclure des chiffres
has_number = input("Do you want to have numbers (y/n)? ").lower() == 'y'

# Demande si on veut inclure des caractères spéciaux
has_special = input("Do you want to have special characters  (y/n)? ").lower() == 'y'

# Génération du mot de passe selon les paramètres choisis
pwd = generate_password(min_length, has_number, has_special)

# Affichage du mot de passe généré
print("The password is:", pwd)
