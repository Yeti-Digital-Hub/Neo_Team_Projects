import random as rd

def affichage(n):
    homme = ["""
                    ---------------------
                    |                   |                   
                    |                   
                    |                  
                    |                         
                    |                  
                    |
                    |
                ||||||||||||||

            """,
            """
                    ---------------------
                    |                   |                   
                    |                   O
                    |                  
                    |                         
                    |                  
                    |
                    |
                ||||||||||||||

            """,
            """
                    ---------------------
                    |                   |                   
                    |                   O
                    |                   |
                    |                         
                    |                  
                    |
                    |
                ||||||||||||||

            """,
            """
                    ---------------------
                    |                   |                   
                    |                   O
                    |                  /|
                    |                        
                    |                  
                    |
                    |
                ||||||||||||||

            """,
            """
                    ---------------------
                    |                   |                   
                    |                   O
                    |                  /|\\
                    |                           
                    |                  
                    |
                    |
                ||||||||||||||

            """,
            """
                    ---------------------
                    |                   |                   
                    |                   O
                    |                  /|\\
                    |                   |          
                    |                  
                    |
                    |
                ||||||||||||||

            """,
            """
                    ---------------------
                    |                   |                   
                    |                   O
                    |                  /|\\
                    |                   |          
                    |                  / 
                    |
                    |
                ||||||||||||||

            """,
            """
                    ---------------------
                    |                   |                   
                    |                   O
                    |                  /|\\
                    |                   |          
                    |                  / \\
                    |
                    |
                ||||||||||||||

            """,
            """
                    ---------------------
                    |                   |                   
                    |                                        
                    |                                     --------------------------------------
                    |                            O--------|  MERCI BEAUCOUP ED MAVOIR SAUVE    |
                    |                          //|\\      --------------------------------------
                    |                            |
                    |         _________________//  \\     
                ||||||||||||||

            """
            ]
    print(homme[n])
    return 0



# fonction qui genere aleatoirement les indices du mot a deviner                                                                                                              
def indice(list_index):
    id = rd.randint(0,4) 
    
    return list_index[id]


# fonction qui genere aleatoirement les mots a deviner                                                                                                              

def word(id,list_word):
    return rd.choice(list_word[id])



#pour remplir les trait intrompus par la lettre que l'utilisateur viens de trouver
space =['__']
def space_fill(space,word,letter):
    space= ['__']* len(word)
    for i in range(len(word)):
        if word[i] == letter :
            space[i] = letter
    print('  '.join(space))
    return 0

