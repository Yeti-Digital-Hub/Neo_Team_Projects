import smtplib  # Module pour gérer l'envoi de mails via SMTP

# Demande à l'utilisateur son adresse email (expéditeur)
email = input("Sender Email: ")

# Demande à l'utilisateur l'adresse email du destinataire
receiver_email = input("Receiver Email: ")

# Demande le sujet de l'email
subject = input("Subject: ")

# Demande le contenu du message
message = input("Message: ")

# Construction du texte complet du mail avec le sujet et le corps séparés par deux sauts de ligne
text = f"Subject: {subject}\n\n{message}"

# Création d'une connexion SMTP au serveur Gmail sur le port 587 (utilisé pour TLS)
server = smtplib.SMTP("smtp.gmail.com", 587)

# Passage en mode sécurisé TLS (chiffrement de la connexion)
server.starttls()

# Authentification avec l'adresse email et le mot de passe d'application (à remplacer par ton vrai mdp d'app)
server.login(email, "lisihqualczmerfd")

# Envoi de l'email : expéditeur, destinataire, contenu texte
server.sendmail(email, receiver_email, text)

# Confirmation dans la console
print("The Email has been sent to " + receiver_email)
