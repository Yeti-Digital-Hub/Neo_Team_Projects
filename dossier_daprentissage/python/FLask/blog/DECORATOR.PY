
def decorator(varriable):
    def f(role):
        if role == "admin" :
            varriable(role)
        else:
            print("vous ne pouvez rien fair")
    return f



@decorator
def trans(role):
        print("trans  ")

trans('admgin')

# @decorator
# def suprimer(role):
#         print("suprimer ")


# @decorator
# def modifier(role):
#         print("suprimer ")



# @decorator
# def tele(role):
#         print("tele ")


# tele('admin')
# modifier('client')
# suprimer('on')



# def decorator(delay):
#     def add(temp):
#         def wrapper():
#             time.sleep(delay)
#             temp(delay)
#         return wrapper()
#     return add
##-----------------------------------------------
# def add_time(func):
#     def wrapper(delay=1):
#         time.sleep(delay)
#         func(delay=1)
#     return wrapper





# @add_time
# def addtime(delay=1):
#     print("addtim for me ")


# @add_time
# def delete_time(delay=1):
#     print("delete_time for me ")


# @add_time
# def other_time(delay=1):
#     print("other_time for me ")



# addtime(4)
# delete_time(5)
# other_time(6)


# # def verifier_user(function):
# #     def wrapper(user, *args, **kwargs):
# #         if user =="admin":
# #             function(user, *args, **kwargs)
# #         else:
# #             print("vous n'avez pas le droit de de suprimer ce fichier")


# # @ verifier_user
# # def supprimer_fichier(user):
# #     print(f"Fichier suprime par {user}")

# # supprimer_fichier("joss")

# # supprimer_fichier("admin")