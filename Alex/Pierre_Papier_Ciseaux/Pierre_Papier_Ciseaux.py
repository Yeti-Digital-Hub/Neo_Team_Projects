import random

games = 0
move = ["R", "P", "S"]
user_score = 0
pc_score = 0
nuls = 0

user_name = input("Enter your name: ").capitalize()

while True:
    print("\n******************** GAME STARTED ********************")
    user_move = input("\n(R)ock\n(P)aper\n(S)cissors\n(Q)uit\nYour choice: ").upper()

    if user_move not in move and user_move != "Q":
        print("Invalid input. Please try again.")
        continue
    elif user_move == "Q":
        print("\n____________________ YOU QUIT ____________________")
        break

    # Affichage du coup joueur
    moves_dict = {"R": "ROCK", "P": "PAPER", "S": "SCISSORS"}
    print(f"{user_name} plays {moves_dict[user_move]} vs ", end="")

    # Choix de l'ordinateur
    pc_move = random.choice(move)
    print(moves_dict[pc_move])

    # Résultat
    if user_move == pc_move:
        print("IT'S A DRAW!")
        nuls += 1
    elif (
        (user_move == "R" and pc_move == "S") or
        (user_move == "P" and pc_move == "R") or
        (user_move == "S" and pc_move == "P")
    ):
        print("YOU WIN! :)")
        user_score += 1
    else:
        print("YOU LOSE! :(")
        pc_score += 1

    games += 1

    # Scores
    print(f"\n--- Scoreboard ---")
    print(f"{user_name}: {user_score}")
    print(f"Computer: {pc_score}")
    print(f"Draws: {nuls}")
    print(f"Games played: {games}")
