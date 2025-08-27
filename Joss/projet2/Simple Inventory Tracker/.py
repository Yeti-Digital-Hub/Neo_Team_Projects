import json
def lecture():
    with open("data.json","r",encoding="utf-8") as file :
        data =json.load(file)

    for inventaire in data:
        for elem in data[inventaire]:
            print(f" marque : {elem["marque"]}           |          quantite : {elem["quantite"]}           |         prix unitaire: {elem["prix_unitaire"]}")
            print("\n")


lecture()