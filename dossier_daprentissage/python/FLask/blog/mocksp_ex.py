
class Posts:
    POSTS = [
        {'id':1, 'title':"Frist Post", 'content':'This is my Frist post'},
        {'id':2, 'title':"second Post", 'content':'This is my Second post'},
        {'id':3, 'title':"Third Post", 'content':'This is my Third post'},
    ]

    def __int__(self, nom ,prenom):
        self.nom = nom
        self.prenom= prenom

    def get_name(self):
        
        return self.name
    

    @classmethod
    def all(cls):
        """ Fetch aii posts """
        return  cls.POSTS

    @classmethod
    def find(cls,id):
        """fetch a single posts"""
        return cls.POSTS[int(id)-1]
    

personne1 = Posts("joos","junior")

print(personne1.get_name())