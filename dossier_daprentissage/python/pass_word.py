from tkinter import *

#creer une fenetre 

fenetre = Tk()
fenetre.title("pass word")
fenetre.geometry('720x400')
fenetre.config(background='#4035a4')


#creer la frame principal
frame = Frame(fenetre, bg='#4035a4')

# creer une frame secondaire
frame2 = Frame(frame , bg='#4035a4')

#creation d'image 
width = 300
height = 300

image = PhotoImage(file="logo.png").zoom(20).subsample(35)
canva = Canvas(frame, width=width, height=height, bg='#4035a4', bd=0, highlightthickness=0)  #metre le canvas dans la frame 
canva.create_image(width/2, height/2, image=image)
canva.grid(row=0, column=1,  sticky=W)

titre =Label(frame2 , text="mot de pass" , font=("helvetica", 20), bg='#4035a4', fg="white")
titre.pack()

#creer un champ d'entrer
mot_de_pass=Entry(frame2 , text="" , font=("helvetica", 20), bg='#4035a4', fg="white")
mot_de_pass.pack()


#creer un champ d'entrer
generer_mot_de_pass=Button(frame2 , text="generer" , font=("helvetica", 20), bg='#4035a4', fg="white")
generer_mot_de_pass.pack(fill=X)


#afficher les frames 
frame.pack(expand=YES)
frame2.grid(row=0,column=2,sticky=W)

fenetre.mainloop()