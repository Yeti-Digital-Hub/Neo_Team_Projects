import tkinter as tk
import json
import fonction as ft

fenetre = tk.Tk()
fenetre.geometry('300x300')
fenetre.title('acceuil')
fenetre.resizable(height=False,width=False)

modifier=tk.Label(fenetre,text='cilquer ici pour modifier un inventaire')
modifier.place(x=40, y=50)
modifier['bg']


creer=tk.Label(fenetre,text='cilquer ici pour creer des inventaires inventaire')
creer.place(x=40, y=150)
creer['bg']

def creer_inventaire():
    fenetre = tk.Tk()
    fenetre.geometry('600x250')
    fenetre.title('creer_inventaire')
    fenetre.resizable(height=False,width=False)
    fenetre['bg']= 'gray'

    inven=tk.Label(fenetre,text='inventaire')
    inven.place(x=40,y=20)
    inventaire= tk.Entry(fenetre)
    inventaire.place(x=20,y=80)

    inven=tk.Label(fenetre,text='marque')
    inven.place(x=200,y=20)
    marque= tk.Entry(fenetre)
    marque.place(x=165,y=80)

    inven=tk.Label(fenetre,text='quantite')
    inven.place(x=350,y=20)
    quantite= tk.Entry(fenetre)
    quantite.place(x=309,y=80)

    inven=tk.Label(fenetre,text='prix unitaire')
    inven.place(x=475,y=20)
    prix=tk.Entry(fenetre)
    prix.place(x=450,y=80)

    question=tk.Label(fenetre,text='jffffffffFjffffffffffffjjJJJfffffffffffffffffjjjjjjjjjjjjjjj')
    question.place(x=40,y=120)
    question['bg']='gray'

    reponse=tk.Entry(fenetre)
    reponse.place(x=400,y=120)


    def inventaire():
        
        

    enregistrer=tk.Button(fenetre,text='enregistrer',command=inventaire)
    enregistrer.place(x=400,y=180)
    enregistrer['bg']='green'
    






buton= tk.Button(fenetre,text='creer',command=creer_inventaire)
buton.place(x=125,y=190)






fenetre.mainloop()
