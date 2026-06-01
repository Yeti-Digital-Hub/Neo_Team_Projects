from flask import Flask, render_template
from mocksp import Posts 
from datetime import datetime

app = Flask(__name__)

@app.context_processor
def inject_now():
    return {'now': datetime.now()}

@app.context_processor
def utiliti_pricessor():
    def pluralize(count, singular, plural=None):
        if not isinstance(count, int):
            raise ValueError('{} must be an integer'.format(count))
        
        if plural is None:
            plural= singular +  's'

        if count ==1 :
            string = singular
        else: 
            string= plural
        return ( f'{count} {string} ')
    return dict(pluralize=pluralize)


@app.route('/')
def home():
    return render_template('page/home.html')

@app.route('/About')
def about():
    return render_template('page/about.html')

@app.route('/contact')
def contact():
    return render_template('page/contact.html')


@app.route('/blog')
def posts_index():
    posts= Posts.all()
    return render_template('post/index.html', posts = posts )

@app.route('/blog/post/show/<int:id>')
def posts_show(id):
    post=Posts.find(id)
    return render_template('post/show.html',post = post )


@app.errorhandler(404)
def page_not_found(error):
    return render_template('error/404.html'),404


if __name__ == '__main__':
    app.run(debug=True,port=3000)
