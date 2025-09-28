import yt_dlp
import os

def list_formats(url):
    """Liste les formats progressifs (vidéo+audio combinés)"""
    ydl_opts = {}
    with yt_dlp.YoutubeDL(ydl_opts) as ydl:
        info = ydl.extract_info(url, download=False)
        formats = info.get('formats', [])
        print("\n--- Formats disponibles (vidéo+audio combinés) ---")
        for f in formats:
            if f.get('vcodec') != 'none' and f.get('acodec') != 'none':
                print(f"{f['format_id']:>5} | {f['ext']} | {f.get('resolution','N/A'):<10} | {f.get('filesize','N/A')} bytes")
        return info['title']

def download_video(url, choice, output_dir="downloads"):
    """Télécharge la vidéo selon le choix"""
    if not os.path.exists(output_dir):
        os.makedirs(output_dir)

    if choice.lower() == "b":
        # meilleur format progressif
        ydl_opts = {
            "format": "best[ext=mp4][vcodec!=none][acodec!=none]",
            "outtmpl": os.path.join(output_dir, "%(title)s.%(ext)s")
        }
    elif choice.lower() == "c":
        # audio seulement
        ydl_opts = {
            "format": "bestaudio/best",
            "outtmpl": os.path.join(output_dir, "%(title)s.%(ext)s"),
            "postprocessors": [{
                "key": "FFmpegExtractAudio",
                "preferredcodec": "mp3",
                "preferredquality": "192"
            }]
        }
    else:
        # format choisi manuellement
        ydl_opts = {
            "format": choice,
            "outtmpl": os.path.join(output_dir, "%(title)s.%(ext)s")
        }

    with yt_dlp.YoutubeDL(ydl_opts) as ydl:
        ydl.download([url])

if __name__ == "__main__":
    url = input("👉 Entre l'URL YouTube : ").strip()

    print("\nOptions de téléchargement :")
    print("[A] Choisir un format manuellement")
    print("[B] Meilleure qualité (vidéo+audio combinés, pas besoin de ffmpeg)")
    print("[C] Audio seulement (MP3, nécessite ffmpeg si tu veux mp3)")

    mode = input("\nChoisis A, B ou C : ").strip().lower()

    if mode == "a":
        title = list_formats(url)
        fmt = input("\nEntre l'ID du format à télécharger : ").strip()
        download_video(url, fmt)
    elif mode in ["b", "c"]:
        download_video(url, mode)
    else:
        print("⚠️ Choix invalide, abandon.")
