import smtplib  # Module pour gérer la connexion SMTP et l'envoi de mails
from email.message import EmailMessage  # Classe pour créer un mail complet (texte + pièces jointes)
import mimetypes  # Permet de deviner le type MIME d'un fichier selon son extension
from pathlib import Path  # Gestion facile des chemins de fichiers

# Demande à l'utilisateur l'adresse email de l'expéditeur
email = input("Sender Email: ")

# Demande à l'utilisateur l'adresse email du destinataire
receiver_email = input("Receiver Email: ")

# Demande le sujet de l'email
subject = input("Subject: ")

# Demande le corps du message
message = input("Message: ")

# Création d'un objet EmailMessage qui va contenir tout le contenu du mail
msg = EmailMessage()

# Définition de l'expéditeur
msg["From"] = email

# Définition du destinataire
msg["To"] = receiver_email

# Définition du sujet
msg["Subject"] = subject

# Ajout du contenu texte dans le corps du mail
msg.set_content(message)

# Initialisation d'une liste pour stocker les chemins des fichiers à joindre
attachments = []

# Boucle pour demander à l'utilisateur les fichiers à joindre
while True:
    filepath = input("Chemin du fichier à joindre (Entrée pour terminer) : ").strip()
    # Si l'utilisateur appuie juste sur Entrée, on sort de la boucle
    if not filepath:
        break
    # Sinon, on ajoute le chemin saisi à la liste des pièces jointes
    attachments.append(filepath)

# Parcours de la liste des fichiers à joindre
for filepath in attachments:
    path = Path(filepath)  # Création d'un objet Path pour manipuler le chemin facilement

    # Vérification que le fichier existe bien, sinon on ignore et on prévient l'utilisateur
    if not path.is_file():
        print(f"⚠️ Fichier introuvable : {filepath} - Ignoré")
        continue

    # Deviner le type MIME du fichier (ex: image/png, application/pdf)
    mime_type, _ = mimetypes.guess_type(filepath)
    # Si le type MIME n'est pas reconnu, on utilise un type générique
    if mime_type is None:
        mime_type = "application/octet-stream"

    # On sépare le type MIME en deux parties (type principal et sous-type)
    maintype, subtype = mime_type.split("/", 1)

    # Ouverture du fichier en mode binaire ('rb') pour pouvoir le lire et l'attacher
    with open(filepath, "rb") as f:
        file_data = f.read()  # Lecture complète du contenu du fichier
        filename = path.name   # Extraction du nom du fichier (sans le chemin complet)

        # Ajout de la pièce jointe au message email
        # maintype et subtype indiquent le format MIME du fichier
        # filename donne le nom du fichier tel qu'il sera vu dans l'email
        msg.add_attachment(file_data, maintype=maintype, subtype=subtype, filename=filename)

    # Confirmation visuelle que la pièce jointe a bien été ajoutée
    print(f"✔️ Pièce jointe ajoutée : {filename}")

# Connexion au serveur SMTP de Gmail sur le port 587 (pour TLS)
server = smtplib.SMTP("smtp.gmail.com", 587)

# Passage en mode sécurisé TLS (chiffrement de la connexion)
server.starttls()

# Authentification sur le serveur SMTP avec l'email et le mot de passe d'application
server.login(email, "lisihqualczmerfd")  # **Remplace ici par ton mot de passe d'application sécurisé**

# Envoi du message complet (avec corps + pièces jointes)
server.send_message(msg)

# Confirmation d'envoi dans la console
print("The Email has been sent to " + receiver_email)

# Fermeture propre de la connexion SMTP
server.quit()
