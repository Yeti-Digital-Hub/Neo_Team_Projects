
import os
import json
import hashlib
import getpass
import time
from datetime import datetime

DATA_FILE = "users.json"
CHAT_FILE = "chat_2.txt"

# --- Utilitaires utilisateurs ---
def load_users():
    if not os.path.exists(DATA_FILE):
        return {}
    try:
        with open(DATA_FILE, "r", encoding="utf-8") as f:
            content = f.read().strip()
            return json.loads(content) if content else {}
    except json.JSONDecodeError:
        return {}

def save_users(users):
    with open(DATA_FILE, "w", encoding="utf-8") as f:
        json.dump(users, f, indent=4)

def hash_password(password):
    return hashlib.sha256(password.encode()).hexdigest()

def register():
    users = load_users()
    username = input("Choisis un pseudo > ").strip()
    if not username:
        print("Pseudo invalide.")
        return None
    if username in users:
        print("❌ Ce pseudo existe déjà.")
        return None
    password = getpass.getpass("Choisis un mot de passe > ")
    if not password:
        print("Mot de passe invalide.")
        return None
    users[username] = hash_password(password)
    save_users(users)
    print(f"Compte {username} créé avec succès.")
    return username

def login():
    users = load_users()
    username = input("Pseudo > ").strip()
    password = getpass.getpass("Mot de passe > ")
    if username in users and users[username] == hash_password(password):
        print(f"Bienvenue {username} !")
        return username
    else:
        print("Identifiants incorrects.")
        return None

# --- Utilitaires chat ---
def ensure_chat_file():
    open(CHAT_FILE, "a", encoding="utf-8").close()

def write_message(username, message):
    timestamp = datetime.now().strftime("%H:%M:%S")
    with open(CHAT_FILE, "a", encoding="utf-8") as f:
        f.write(f"[{timestamp}] {username}: {message}\n")

def show_all_messages():
    if os.path.exists(CHAT_FILE):
        with open(CHAT_FILE, "r", encoding="utf-8") as f:
            print("\n=== Historique du chat ===")
            print(f.read(), end="")
            print("\n==========================\n")
    else:
        print("Aucun message pour l’instant.")

# --- Main boucle chat après authentification ---
def chat_loop(username):
    print("Tape '/all' pour voir tout l’historique, ou écris ton message et appuie sur Entrée.")
    ensure_chat_file()
    last_size = os.path.getsize(CHAT_FILE)

    try:
        while True:
            # Lire et afficher nouveaux messages ajoutés par d'autres
            size = os.path.getsize(CHAT_FILE)
            if size > last_size:
                with open(CHAT_FILE, "r", encoding="utf-8") as f:
                    f.seek(last_size)
                    new = f.read()
                    if new:
                        print(new, end="")
                last_size = size

            # Détection d'entrée utilisateur (cross-platform)
            if os.name == "nt":
                # Windows: utiliser msvcrt.kbhit()
                from msvcrt import kbhit
                if kbhit():
                    # Il y a un caractère prêt — lire la ligne complète
                    msg = input("> ").strip()
                    if not msg:
                        continue
                    if msg == "/all":
                        show_all_messages()
                        continue
                    write_message(username, msg)
            else:
                # Unix-like: select pour stdin
                import select, sys
                if select.select([sys.stdin], [], [], 0.5)[0]:
                    msg = input("> ").strip()
                    if not msg:
                        continue
                    if msg == "/all":
                        show_all_messages()
                        continue
                    write_message(username, msg)

            # petite pause pour ne pas surcharger le CPU
            time.sleep(0.1)

    except KeyboardInterrupt:
        print("\nDéconnexion...")

# --- Entrée principale ---
def main():
    print("1. Connexion\n2. Inscription")
    choice = input("> ").strip()
    current_user = None

    if choice == "1":
        current_user = login()
    elif choice == "2":
        current_user = register()
    else:
        print("❌ Choix invalide.")
        return

    if current_user:
        chat_loop(current_user)

if __name__ == "__main__":
    main()
