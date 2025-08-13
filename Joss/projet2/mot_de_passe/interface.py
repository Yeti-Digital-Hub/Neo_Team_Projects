import back as bk
import json
import tkinter as tk
import hashlib as hl

fenetre = tk.Tk()
fenetre.geometry('300x300')
fenetre.title('ACCEUIL')
fenetre['bg'] = 'gray'
fenetre.resizable(height=True , width=True)

label=tk.Label(fenetre, text=" IDENTIFIER VOUS ") 
label.place(x =100 , y= 50) 
label['bg']= 'sky blue'


def inscription():
    fenetre = tk.Tk()
    fenetre.geometry('300x300')
    fenetre.title('inscription')
    fenetre['bg']='gray'
    fenetre.resizable(height=True , width= True)
    # cette partie est pour le nom de l'utilisateur 
    nom_utilisateur = tk.StringVar()
    nom = tk.Label(fenetre,text= "Nom ", fg='black')
    nom['bg'] = 'gray'
    nom.place(x=60 ,y=75)
    nom_utilisateur = tk.Entry(fenetre)
    nom_utilisateur.place(x=110, y= 75) 

    #cette partie est pour les prenom
    prenom_utilisateur  = tk.StringVar()
    prenom = tk.Label(fenetre, text="Prenom", fg='black')
    prenom['bg'] = 'gray'
    prenom.place(x=60 , y=120)
    prenom_utilisateur = tk.Entry(fenetre)
    prenom_utilisateur.place(x=110 , y =120)

    #cette partie est pour le mot de passe 

    securite = tk.Label(fenetre, text="Mot de passe", fg='black')
    securite['bg'] = 'gray'
    securite.place( x=45 , y=150)
    mot_de_passe=tk.Entry(fenetre, show="*")
    mot_de_passe.pack()
    mot_de_passe.place(x=110 ,y=150)
    def inscrit():
        nom= nom_utilisateur.get()
        prenom = prenom_utilisateur.get()
        mot_de_pass=mot_de_passe.get()
        bk.enregistrer(nom,prenom,mot_de_pass)


    boutton = tk.Button(fenetre, text= "VALIDER", command=inscrit)
    boutton['bg']='sky blue'
    boutton.place(x = 120, y= 200 )
    fenetre.mainloop()


def connexion():
    fenetre = tk.Tk()
    fenetre.geometry('300x300')
    fenetre.title('connexion')
    fenetre['bg']='gray'
    fenetre.resizable(height=True , width= True)
    # cette partie est pour le nom de l'utilisateur 
    nom_utilisateur = tk.StringVar()
    nom = tk.Label(fenetre,text= "Nom ", fg='black')
    nom['bg'] = 'gray'
    nom.place(x=60 ,y=75)
    nom_utilisateur = tk.Entry(fenetre)
    nom_utilisateur.place(x=110, y= 75) 

    #cette partie est pour les prenom
    prenom_utilisateur  = tk.StringVar()
    prenom = tk.Label(fenetre, text="Prenom", fg='black')
    prenom['bg'] = 'gray'
    prenom.place(x=60 , y=120)
    prenom_utilisateur = tk.Entry(fenetre)
    prenom_utilisateur.place(x=110 , y =120)

    #cette partie est pour le mot de passe 

    securite = tk.Label(fenetre, text="Mot de passe", fg='black')
    securite['bg'] = 'gray'
    securite.place( x=45 , y=150)
    mot_de_passe=tk.Entry(fenetre, show="*")
    mot_de_passe.pack()
    mot_de_passe.place(x=110 ,y=150)



    label = tk.Label(fenetre, fg='black', text="")
    label.place(x=50 , y=250)
    label['bg']='gray'
    def connect():
        with open("data.json","r",encoding="utf-8") as file:
            data = json.load(file)
            i=0
        for compte in data : # ici c;est pour determiner si l'utilisateur avait deja un compte
            if nom_utilisateur.get() != (compte["nom"]) or prenom_utilisateur.get() != (compte["prenom"]) :
                i =i+1    #ici on veut savoir le nombre de personne dont le nom est different de celui entrer par l'utilisateur pour comparrer
            else:
            
                code = mot_de_passe.get()
                mots =(hl.sha256(code.encode()).hexdigest())
                if mots==((compte["mot de pass"])):
                    fenetre = tk.Tk()
                    fenetre.geometry ('1800x1800')
                    fenetre.title('connecte')
                    fenetre.resizable(height= true , width=true)
                    image = PhotoImage( file='image.png')
                    labele = tk.Label(fenetre, image=image)
                    fenetre.mainloop()
                else:
                    mot ="mot de pass incorect , reeseyer"
                    label['text']= mot

        if i== len(data):
                mot ="desole maos votre compte n'existe pas"
                label['text']= mot


        data[0]["nom"]
    # boutton de connexion
    boutton = tk.Button(fenetre, text= "connexion", command=connect)
    boutton['bg']='sky blue'
    boutton.place(x = 120, y= 200 )


    fenetre.mainloop()





boutton_inscription = tk.Button(fenetre, text="inscrivez vous", bg='sky blue' , fg = 'black',command= inscription)
boutton_inscription.place(x = 105 , y = 130)
boutton_connexion = tk.Button(fenetre, text="connedctez vous", bg='sky blue' , fg = 'black',command= connexion )
boutton_connexion.place(x = 100 , y = 90)

fenetre.mainloop()

