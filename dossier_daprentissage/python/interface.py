from tkinter import *

import webbrowser

def open_joss():
    webbrowser.open_new("https://youtu.be/N4M4W7JPOL4?t=1011")

#creer une n'ouvelle fentrr

fenetre = Tk()


fenetre.title("joss")
fenetre.geometry("1080x720")
fenetre.minsize(420, 720)
fenetre.iconbitmap("logo.ico")
fenetre.config(background="#41b777")

frame = Frame(fenetre, bg="#cf9e34", bd=2 , relief=SUNKEN)


label_title = Label(frame, text="bonjour c'est moi", font=("courrier",20), bg='#41b77f', fg='white')# ajouter du text
label_title.pack()

label_2 = Label(frame, text="bonjour c'est moi", font=("courrier",20), bg='#41b77f', fg='white')
label_2.pack()
#ajouter un boutton       
bt_bouton = Button(frame, text='appuyer', font=('courrier', 25), bg="#ffffff", fg='green', command=open_joss)
bt_bouton.pack(padx=254, fill=X)
frame.pack(expand=YES)



fenetre.mainloop()


