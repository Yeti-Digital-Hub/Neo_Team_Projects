import os
import time
import json
from datetime import datetime

CHAT_FILE = "chat.txt"
DATA_FILE = "data.json"

# ----- Gestion utilisateurs -----
def load_users():
    """Charge les utilisateurs depuis data.json"""
    if not os.path.exists(DATA_FILE):
        return {}
    try:
        with open(DATA_FILE, "r", encoding="utf-8") as f:
            content = f.read().strip()
            return json.loads(content) if content else {}
    except json.JSONDecodeError:
        return {}

def save_users(users):
    """Enregistre les utilisateurs dans data.json"""
    with open(DATA_FILE, "w", encoding="utf-8") as f:
        json.dump(users, f, indent=4)

def login_or_register():
    """Demande à l'utilisateur de se connecter ou de créer un compte"""
    users = load_users()
    choice = input("1. Connexion\n2. Inscription\n> ")

    if choice == "1":  # Connexion
        username = input("Pseudo > ")
        password = input("Mot de passe > ")
        if username in users and users[username] == password:
            print(f"Bienvenue {username} ✅")
            return username
        else:
            print("❌ Identifiants incorrects.")
            exit()

    elif choice == "2":  # Inscription
        username = input("Choisis un pseudo > ")
        if username in users:
            print("❌ Ce pseudo existe déjà.")
            exit()
        password = input("Choisis un mot de passe > ")
        users[username] = password
        save_users(users)
        print(f"Compte {username} créé avec succès ✅")
        return username
    else:
        print("❌ Choix invalide.")
        exit()

# ----- Gestion chat -----
def write_message(username, message):
    """Écrit un message avec horodatage"""
    with open(CHAT_FILE, "a", encoding="utf-8") as f:
        timestamp = datetime.now().strftime("%H:%M:%S")
        f.write(f"[{timestamp}] {username}: {message}\n")

def show_all_messages():
    """Affiche tout l'historique du chat"""
    if os.path.exists(CHAT_FILE):
        with open(CHAT_FILE, "r", encoding="utf-8") as f:
            print("\n=== Historique du chat ===")
            print(f.read())
            print("==========================\n")
    else:
        print("Aucun message pour l’instant.")

# ----- Main loop -----
def main():
    username = login_or_register()
    print("Tape '/all' pour voir tout l’historique, ou ton message directement.\n")

    # Création du fichier chat s'il n'existe pas
    open(CHAT_FILE, "a").close()
    last_size = os.path.getsize(CHAT_FILE)

    try:
        while True:
            msg = input("> ").strip()

            if not msg:
                continue

            if msg == "/all":
                show_all_messages()
                continue

            # Écriture du message
            write_message(username, msg)

            # Affichage des nouveaux messages
            size = os.path.getsize(CHAT_FILE)
            if size > last_size:
                with open(CHAT_FILE, "r", encoding="utf-8") as f:
                    f.seek(last_size)
                    new_content = f.read()
                    if new_content:
                        print(new_content, end="")
                last_size = size

    except KeyboardInterrupt:
        print("\nDéconnexion...")

if __name__ == "__main__":
    main()
