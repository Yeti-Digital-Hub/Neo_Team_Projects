px =int(input("entre la dimention a convertir" ))
unite= input("entrer l'unite vers la quel la dimention doit etre convert")

def convertir(px:int,unite:chr):

    if unite == "vw":  
            
        vw = (100*px)/412
        return vw
    elif unite== "vh":
        vh = (100*px)/914
        return vh


print(convertir(px,unite))  