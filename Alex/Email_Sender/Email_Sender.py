# import des modules nécessaires ; smtplib pour l'envoi d'emails, email.message pour la gestion des messages, mimetypes pour les types de fichiers, pathlib pour la gestion des chemins de fichiers
import smtplib
from email.message import EmailMessage
import mimetypes
from pathlib import Path

# Demande à l'utilisateur les informations nécessaires pour envoyer un email
email = input("Sender Email: ")
receiver_email = input("Receiver Email: ")
subject = input("Subject: ")
message = input("Message: ")

msg = EmailMessage()
msg["From"] = email
msg["To"] = receiver_email
msg["Subject"] = subject
msg.set_content(message)
# Gestion des pièces jointes ( si l'utilisateur ne veut pas en ajouter, il suffit d'appuyer sur Entrée )
attachments = []
while True:
    filepath = input("Chemin du fichier à joindre (Entrée pour terminer) : ").strip()
    if not filepath:
        break
    attachments.append(filepath)

for filepath in attachments:
    path = Path(filepath)
    if not path.is_file():
        print(f"⚠️ Fichier introuvable : {filepath} - Ignoré")
        continue

    mime_type, _ = mimetypes.guess_type(filepath)
    if mime_type is None:
        mime_type = "application/octet-stream"
    maintype, subtype = mime_type.split("/", 1)

    with open(filepath, "rb") as f:
        file_data = f.read()
        filename = path.name
        msg.add_attachment(file_data, maintype=maintype, subtype=subtype, filename=filename)
    print(f"✔️ Pièce jointe ajoutée : {filename}")
# Envoi de l'email via le serveur SMTP de Gmail
server = smtplib.SMTP("smtp.gmail.com", 587) # Connexion au serveur SMTP de Gmail
server.starttls()
server.login(email, "lisihqualczmerfd")  # Remplace par ton mot de passe d'application sécurisé ( du moins il est conseillé de le faire , ca sera plus sécurisé )
server.send_message(msg)
print("The Email has been sent to " + receiver_email)
server.quit()
