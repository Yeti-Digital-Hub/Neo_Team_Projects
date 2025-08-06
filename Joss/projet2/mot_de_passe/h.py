import tkinter as tk

fenetre = tk.Tk()
fenetre.geometry('300x300')
fenetre.title('inscription')
fenetre['bg']='gray'
fenetre.resizable(height=True , width= True)
nom_utilisateur = tk.StringVar()
entree = tk.Entry(fenetre, textvariable= "nom_utilisateur")
entree.place(x=100, y= 100) 
fenetre.mainloop()



print(nom_utilisateur.get())