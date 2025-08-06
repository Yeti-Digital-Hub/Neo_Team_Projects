
import tkinter as tk
fenetre = tk.Tk()
fenetre.geometry('300x300')
fenetre.title('ACCEUIL')
fenetre['bg'] = 'gray'
fenetre.resizable(height=True , width=True)

label=tk.Label(fenetre, text=" IDENTIFIER VOUS ") 
label.place(x =100 , y= 50) 
label['bg']= 'sky blue'

def incription():
    

    if (nbr == 5):
        fenetre = tk.Tk()
        fenetre.geometry('300x300')
        fenetre.title('ACCEUIL')
        fenetre['bg'] = 'blue'
        fenetre.resizable(height=True , width=True)

        label=tk.Label(fenetre, text=" IDENTIFIER VOUS ") 
        label.place(x =100 , y= 90) 
        fenetre.mainloop


boutton_inscription = tk.Button(fenetre, text="inscrivez vous", bg='sky blue' , fg = 'black',command= bonjour)
boutton_inscription.place(x = 105 , y = 130)
boutton_connexion = tk.Button(fenetre, text="connedctez vous", bg='sky blue' , fg = 'black',command= bonjour )
boutton_connexion.place(x = 100 , y = 90)

fenetre.mainloop()


