import tkinter as tk

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
mot_de_passe=tk.Entry(fenetre)
mot_de_passe.place(x=100 ,y=200)


def inscription():
    with open("inscription.txt","a+") as fille :
        nom= nom_utilisateur.get()
        fille.write(nom)
        

boutton = tk.Button(fenetre, text= "connexion", command=inscription)
boutton['bg']='sky blue'
boutton.place(x = 120, y= 250 )

fenetre.mainloop()





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
    with open("inscription.txt","a+") as fille :
        nom= nom_utilisateur.get()
        fille.write(nom)
        
# boutton de connexion
boutton = tk.Button(fenetre, text= "connexion", command=connexion)
boutton['bg']='sky blue'
boutton.place(x = 120, y= 250 )

#bouton pour le mot de passe oublie
boutton = tk.Button(fentre, text="connexion", command=connexion)

fenetre.mainloop()



