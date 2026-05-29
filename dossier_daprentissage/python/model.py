from arm import Amr


class Player:
    def __init__(self,pseudo,health,attack):
        self.pseudo = pseudo
        self.health = health
        self.attack = attack
        self.arm = None 
        
        print(f"Bienvenue au joueur {pseudo} \n points de vie est {health}")
    def get_pseudo(self):
        return self.pseudo

    def get_attack_value(self):
        return self.attack

    def get_health(self):

        return self.health

    def damage(self,damage):
        self.health -= damage
        if  self.health < 0 :
            self.health = "ce jouer est mort "


        print( f"Aie ... vous venez de subir {damage} degats")

    def attacka_player(self, target_player):
        list_arm = [ {"Nom":"couteau","damage":6}, {"Nom":"fusil","damage":44}, {"Nom":"machette","damage":15}]
        select_arm = input("choisir une arm entre : couteau ;fusil ; machette ")
        for arme in list_arm :
            if arme["Nom"] == select_arm:
                amr_1 = Amr(arme["Nom"], arme["damage"])
                break
        atac = int(input("entrer l'atac"))
        if atac > self.attack  + amr_1.get_damagw_amount():

            print(f"impossible car vous avez un nommbre d'attack inferieur \n  votre atac doit etre inferieu a {self.attack}" )
        target_player.damage(atac)
        print(F" le joueur {self.pseudo } a attacquer le joueur {target_player.pseudo}\n  \n ")
        self.attack= self.attack - ( atac - amr_1.get_damagw_amount())





class Warrior(Player):

    def __init__(self,pseudo,health,attack):
        super().__init__(pseudo,health,attack)
        self.armor = 3


    def blade(self):
        self.armor = 3
        print("vos point de vie ont ete recharger")


    def get_armor_point(self):
        return self.armor


    def damage(self,damage):
        if self.armor > 0 :
            self.armor -= 1
            damage= 0
            print("********************************")
        super().damage(damage)            
        print(f"{self.health}  ---------------")










class Batiment :
    def __init__(self,nom,nbr_etage,couleur):
        self.nom = nom 
        self.nbr_etage = nbr_etage
        self.couleur = couleur

        print("***********************************")
    # def get_color(self):
    #     return self.color
    
    # def get_nbr_etage(self):
    #     return self.nbr_etage
    
    # def get_name_batiment(self):
    #     return self.name_batiment
    
    # def get_materiaux(self):
    #     return self.materiaux
    
    # def get_position (self):
    #     return self.position 


class Supermache(Batiment):

    def __init__(self,name_batiment,nbr_etage, color, materiaux,position):
        super().__init__(name_batiment,nbr_etage, color, materiaux,position)
    #    self.nbr_rayon = nbr_rayon

    # def nbr_rayon(self):
    #     return self.nbr_rayon
    


class bonjour:
    def __init__(self,nom,pre):
        self.nom = nom
        self.pre = pre
        print("----------------------")

    def get_nom(self):
        return self.nom