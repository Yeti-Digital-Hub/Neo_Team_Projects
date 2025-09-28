# 🎬 YouTube Video Downloader (Terminal)

---

## 🚀 Objectif

Ce projet permet de télécharger des vidéos YouTube depuis le terminal.
L’utilisateur peut choisir le format à télécharger, opter pour la meilleure qualité vidéo+audio, ou ne télécharger que l’audio (MP3).

---

## 🛠️ Technologies utilisées

* **Python 3**
* **yt-dlp** (gestion des téléchargements YouTube)
* Modules standards : `os`
* Multiplateforme : fonctionne sous Linux, Windows et Pydroid

---

## ⚙️ Utilisation

1. **Ouvre un terminal** dans le dossier du projet.

2. **Active le venv** (si utilisé) :

   ```bash
   source venv/bin/activate    # Linux / Pydroid
   # ou
   venv\Scripts\activate     # Windows
   ```

3. **Installe les dépendances** si ce n’est pas déjà fait :

   ```bash
   pip install -r requirements.txt
   ```

4. **Lance le script** :

   ```bash
   python YT_Downloader.py
   ```

5. **Saisis l’URL YouTube** demandée.

6. **Choisis le mode de téléchargement** :

   * `[A]` Choisir un format manuellement
   * `[B]` Meilleure qualité vidéo+audio
   * `[C]` Audio seulement (MP3, nécessite ffmpeg pour extraire l’audio)

7. Si tu choisis `[A]`, une liste des formats progressifs (vidéo+audio combinés) sera affichée, avec leurs ID, extension, résolution et taille.
   Tu n’as plus qu’à entrer l’ID du format souhaité.

---

## 📦 Fonctionnalités

* Téléchargement vidéo + audio combinés ou audio seul
* Affichage des formats disponibles avec ID, résolution et taille
* Choix manuel ou automatique du format
* Multiplateforme (Linux, Windows, Pydroid)
* Création automatique du dossier `downloads` si inexistant

---

## 🔐 Notes

* Pour le mode audio (MP3), **ffmpeg** est nécessaire pour convertir les vidéos.
* Si ffmpeg n’est pas disponible, le script prendra le meilleur format combiné déjà existant.

---

## 👤 Auteur

* **Alex**
* 📅 Début du projet : 28 septembre 2025
* 🧑‍🏫 Suivi par : [Mentor_GuruMiT]

---

## 📝 Exemple d’utilisation

```
👉 Entre l'URL YouTube : https://youtu.be/WiDoqef9cGI

Options de téléchargement :
[A] Choisir un format manuellement
[B] Meilleure qualité (vidéo+audio)
[C] Audio seulement (MP3)

Choisis A, B ou C : A

--- Formats disponibles ---
  ID   | EXT  | RESOLUTION | FILESIZE
-------------------------------------
  137  | mp4  | 1080p      | 25 MB
  136  | mp4  | 720p       | 12 MB
  135  | mp4  | 480p       | 6 MB
  140  | m4a  | audio only | 2 MB

Entre l'ID du format à télécharger : 136
Téléchargement en cours...
✔️ Vidéo téléchargée dans downloads/
```

---
