from model import Player,Warrior,Supermache
from model import Batiment,bonjour
from arm import Amr

# def choice_arm ():
#         list_arm = [ {"Nom":"couteau","damage":6}, {"Nom":"fusil","damage":44}, {"Nom":"machette","damage":15}]
#         select_arm = input("choisir une arm entre : couteau ;fusil ; machette ")
#         for i in list_arm:
#             if i["Nom"] == select_arm :
#                 amr_1 = Amr(i["Nom"],i["damage"])
#         print (f" {amr_1.get_name()} ------------------------------------------------------------")


player1 = Player("OTT",20,5)
# player2= Player("joss", 14,4)

# player1.attacka_player(player2)
print(F" {player1.get_pseudo()} il te reste {player1.get_health()} point de vie et {player1.get_attack_value()} attack")
# print(F" {player2.get_pseudo()} il te reste {player2.get_health()} point de vie et {player2.get_attack_value()} attack")


# warrior = Warrior("DarkWarrior", 30,4)

# warrior.damage(55)

#print(f" vie :{warrior.get_health()} ----------  armur : {warrior.get_armor_point()} ////////////////////////////") 

# # if issubclass(Warrior,Player):
#     print(" ouoi ouo pio ")


bat = Batiment("ott",50,"red")


# b = bonjour("ott ", "joss")
