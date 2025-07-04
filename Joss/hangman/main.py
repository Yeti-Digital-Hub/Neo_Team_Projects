import fonction as ft 

list_index = [ "fruit", "voitre", "chaussure", "nom","nouriture"]

list_word = [
    ["Pomme", "Banane", "Orange", "Fraise", "Kiwi","Ananas", "Mangue", "Raisin", "Cerise", "Pêche","Poire", "Citron", "Lime", "Melon", "Pastèque","Framboise", "Myrtille", "Mûre", "Grenade", "Papaye","Goyave", "Figue", "Abricot", "Prune", "Nectarine","Clementine", "Mandarine", "Pamplemousse", "Kaki", "Litchi","Fruit de la passion", "Carambole", "Rhubarbe", "Groseille", "Cassis","Datte", "Olive", "Tomate" ],
    ["Mustang", "Camaro", "Corvette", "911", "GT-R", "Clio", "Polo", "208", "Fiesta", "C3", "Civic", "Corolla", "Megane", "Astra", "Octavia", "Tucson", "Duster", "Kadjar", "Captur", "3008", "Model 3", "Zoe", "Leaf", "i3", "e-208", "DS", "2CV", "Type", "Beetle", "500", "Phantom", "Ghost", "Continental", "Cullinan", "Flying Spur", "Kangoo", "Berlingo", "Partner", "Transit", "Jumper"], 
    ["Airforce","StanSmith","ChuckTaylor","Ultraboost","Pegasus","Kayano","Ghost","Clifton","Birkenstock","Timberland","DocMartens","GucciAce","Balenciaga","Cloudbust","Veja","Allbirds","Crocs","Teva","Salomon","Reebok"], 
    ["arbre", "rivière", "montagne", "étoile", "nuage", "vent", "pluie", "soleil", "lune", "forêt","fleur", "herbe", "rocher", "océan", "tempête", "éclair", "glace", "neige", "feuille", "sable","chien", "chat", "lion", "oiseau", "poisson", "serpent", "abeille", "éléphant", "tigre", "dauphin","cheval", "loup", "ours", "papillon", "fourmi", "araignée", "écureuil", "grenouille", "hibou", "renard","chaise", "table", "livre", "lampe", "téléphone", "ordinateur", "clé", "sac", "horloge", "couteau","vélo", "voiture", "bouteille", "fenêtre", "porte", "miroir", "stylo", "cahier", "tasse", "cuillère","pomme", "pain", "fromage", "lait", "eau", "viande", "légume", "fruit", "sucre", "sel","café", "thé", "riz", "pâtes", "œuf", "poisson", "chocolat", "gâteau", "salade", "soupe","main", "pied", "tête", "œil", "bouche", "nez", "oreille", "bras", "jambe", "doigt","cœur", "poumon", "peau", "sang", "os", "muscle", "cheveu", "dent", "ongle", "langue","joie", "peur", "colère", "tristesse", "amour", "haine", "surprise", "dégoût", "honte", "fierté","calme", "stress", "espoir", "désespoir", "confiance", "doute", "envie", "jalousie", "pardon", "rage","marcher", "courir", "sauter", "nager", "manger", "boire", "dormir", "parler", "écrire", "lire","chanter", "danser", "penser", "rire", "pleurer", "acheter", "vendre", "donner", "prendre", "jeter","grand", "petit", "rapide", "lent", "chaud", "froid", "lumineux", "sombre", "doux", "dur","lourd", "léger", "beau", "laid", "jeune", "vieux", "nouveau", "ancien", "fort", "faible","intelligent", "stupide", "heureux", "malheureux", "calme", "nerveux", "propre", "sale", "sec", "humide","médecin", "professeur", "cuisinier", "musicien", "peintre", "agriculteur", "ingénieur", "policier", "journaliste", "plombier","coiffeur", "boulanger", "infirmier", "architecte", "avocat", "comptable", "vendeur", "chauffeur", "scientifique", "écrivain","maison", "école", "hôpital", "parc", "magasin", "restaurant", "théâtre", "musée", "aéroport", "gare","plage", "ville", "village", "campagne", "usine", "bureau", "église", "hôtel", "banque", "stade"],
    ["Ndolè","Eru","Koki","PouletDG","Bobolo","Miondo","Dodo","Soja","Mbongo","Achu","Okok","Puffpuff","Accra","Foléré","Palmwine","Kwem","Macabo","Kondrè","Nkui","Kokicorn","Mikatik","Kossam","Sha","33Export","Saucejaune","Saucegombo","Baton","Mets","Nkumu","MbongoTchobi"],
    ] 

ft.affichage(0)
n=0
while n != 8:
    ft.affichage(n)
    tempon = ft.indice(list_index)
    print(tempon)
    id = list_index.index(tempon)
    print(ft.word(id,list_word))

