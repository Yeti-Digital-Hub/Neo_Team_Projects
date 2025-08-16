import qrcode 
import tkinter as tk

img= qrcode.make('imag.png')
img.save('qrcode.png')

import tkinter as tk 


fenetre= tk.Tk()
fenetre.resizable(height='false' , width='false')
fenetre.title('lien')
fenetre['bg']='black' 
fenetre.geometry('300x150')

message= tk.Label(fenetre,text=" entre l'URL de ce que vous voulez coder",fg='red',font=('arial',9))
message['bg']='black'
message.place(x=50,y=50)

URL= tk.StringVar()
URL= tk.Entry(fenetre,fg='red')
URL.place(x=75,y=75)

def qrcodex():
    fenetre = tk.Tk()
    fenetre.geometry ('1800x1800')
    fenetre.title('connecte')
    fenetre.resizable(height= True , width=True)
    image = tk.PhotoImage( file="image.png")
    img = image.subsample(2,2)
    label = tk.Label(fenetre, image=image)
    label.pack()
    fenetre.mainloop()



envoie = tk.Button(fenetre, text='valider',command= qrcodex)
envoie['bg']='red'
envoie.place(x=75, y=90)

fenetre.mainloop()

