import yt_dlp
import time
from tqdm import tqdm
import sys

class ProgressBar:
    def __init__(self):
        self.pbar = None
        self.total = 0

    def progress_hook(self, d):
        if d['status'] == 'downloading':
            if not self.pbar:
                self.total = d.get('total_bytes') or d.get('total_bytes_estimate') or 0
                self.pbar = tqdm(total=self.total, unit='B', unit_scale=True, desc='Téléchargement')

            downloaded = d.get('downloaded_bytes', 0)
            self.pbar.update(downloaded - self.pbar.n)

        elif d['status'] == 'finished':
            if self.pbar:
                self.pbar.close()
                self.pbar = None
            print("\n✅ Téléchargement terminé, traitement en cours...")

def download_video(url):
    ydl_opts = {
        'format': 'bestvideo+bestaudio/best',
        'outtmpl': '%(title)s.%(ext)s',
    }

    pbar = ProgressBar()
    ydl_opts['progress_hooks'] = [pbar.progress_hook]

    try:
        print("🔎 Vérification de l'URL...")
        start = time.time()
        with yt_dlp.YoutubeDL(ydl_opts) as ydl:
            info = ydl.extract_info(url, download=True)
        end = time.time()

        print(f"\n🎬 Titre : {info.get('title', 'N/A')}")
        print(f"⏱ Durée : {info.get('duration', 0)} secondes")
        print(f"📁 Fichier sauvegardé : {ydl.prepare_filename(info)}")
        print(f"⏳ Temps total : {round(end - start, 2)} secondes")

    except yt_dlp.utils.DownloadError as e:
        print(f"❌ Erreur de téléchargement : {e}")
    except KeyboardInterrupt:
        print("\n❌ Téléchargement interrompu par l'utilisateur.")
    except Exception as e:
        print(f"❌ Erreur inattendue : {e}")

if __name__ == "__main__":
    try:
        url = input("🔗 Entrez l'adresse du lien YouTube : ").strip()
        if not url.startswith("http"):
            print("❌ URL invalide.")
            sys.exit(1)
        download_video(url)
    except KeyboardInterrupt:
        print("\n❌ Interruption manuelle. Bye !")
