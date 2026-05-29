from balldontlie import BalldontlieAPI
import requests

url = "https://api.balldontlie.io/v1/teams"

parametre= {
    "data[]":"2024-11-13",
    "data[]" : "2024-11-14",
    "per_page": 50

}

reponse = requests.get(url,parametre)

print(reponse)