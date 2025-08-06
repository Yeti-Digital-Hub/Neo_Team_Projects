import tkinter as tk
from tkinter import *
fenetre = tk.Tk()
fenetre.geometry('400x555')
fenetre.title('fenetre_pour_le_mot_de_pas')
fenetre['bg'] = 'yellow'
fenetre.resizable(height=True,width=True)

def function():
    label['text'] = ma_variable.get()

ma_variable = StringVar()
label = Label(fenetre, text = "texte modifieble")
label.pack()
entree = Entry(fenetre, fg='blue',bg='red',textvariable= ma_variable)
entree.pack()
bouton = tk.Button( fenetre, text=" a'inscrire ", fg= 'blue',bg='yellow',command= function)
bouton.place(x='350' , y='400')
fenetre.mainloop()