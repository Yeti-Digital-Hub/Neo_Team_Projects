import avant as bk
import tkinter as tk

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
    nom.place(x=60 ,y=100)
    nom_utilisateur = tk.Entry(fenetre)
    nom_utilisateur.place(x=110, y= 100) 

    #cette partie est pour les prenom
    prenom_utilisateur  = tk.StringVar()
    prenom = tk.Label(fenetre, text="Prenom", fg='black')
    prenom['bg'] = 'gray'
    prenom.place(x=60 , y=150)
    prenom_utilisateur = tk.Entry(fenetre)
    prenom_utilisateur.place(x=110 , y =150)

    #cette partie est pour le mot de passe 

    securite = tk.Label(fenetre, text="Mot de passe", fg='black')
    securite['bg'] = 'gray'
    securite.place( x=60 , y=200)
    mot_de_passe=tk.Entry(fenetre, show="*")
    mot_de_passe.pack
    mot_de_passe.place(x=100 ,y=200)
    def inscript():
            nom= nom_utilisateur.get()
            prenom = prenom_utilisateur.get()
            mot_de_pass=mot_de_passe.get()
            bk.enregistrer(nom,prenom,mot_de_pass)

    boutton = tk.Button(fenetre, text= "VALIDER", command=inscript)
    boutton['bg']='sky blue'
    boutton.place(x = 120, y= 250 )
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
    nom.place(x=60 ,y=100)
    nom_utilisateur = tk.Entry(fenetre)
    nom_utilisateur.place(x=110, y= 100) 

    #cette partie est pour les prenom
    prenom_utilisateur  = tk.StringVar()
    prenom = tk.Label(fenetre, text="Prenom", fg='black')
    prenom['bg'] = 'gray'
    prenom.place(x=60 , y=150)
    prenom_utilisateur = tk.Entry(fenetre)
    prenom_utilisateur.place(x=110 , y =150)

    #cette partie est pour le mot de passe 

    securite = tk.Label(fenetre, text="Mot de passe", fg='black')
    securite['bg'] = 'gray'
    securite.place( x=60 , y=200)
    mot_de_passe=tk.Entry(fenetre)
    mot_de_passe.place(x=100 ,y=200)


    def connexion():
            print(nom_utilisateur.get())
            
    # boutton de connexion
    boutton = tk.Button(fenetre, text= "connexion", command=connexion)
    boutton['bg']='sky blue'
    boutton.place(x = 120, y= 250 )

    #bouton pour le mot de passe oublie
    boutton = tk.Button(fentre, text="CONNEXION", command=connexion)

    fenetre.mainloop()





boutton_inscription = tk.Button(fenetre, text="inscrivez vous", bg='sky blue' , fg = 'black',command= inscription)
boutton_inscription.place(x = 105 , y = 130)
boutton_connexion = tk.Button(fenetre, text="connedctez vous", bg='sky blue' , fg = 'black',command= connexion )
boutton_connexion.place(x = 100 , y = 90)

fenetre.mainloop()


