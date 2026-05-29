from flask import abort
class Posts():
    POSTS = [
        {'id':1, 'title':"Frist Post", 'content':'This is my Frist post'},
        {'id':2, 'title':"second Post", 'content':'This is my Second post'},
        {'id':3, 'title':"Third Post", 'content':'This is my Third post'},
    ]
    @classmethod
    def all(cls):
        """ Fetch aii posts """
        return  cls.POSTS

    @classmethod
    def find(cls,id):
        """fetch a single posts"""
        try:
            return cls.POSTS[int(id)-1]
        except:
            abort(404)
