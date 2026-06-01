from flask import Flask, render_template


app = Flask(__name__)

@app.route('/')
def home():
    return render_template('pages/home.html')

@app.route('/contact')
def contact():
    return render_template('pages/contact.html')

@app.route('/about')
def about():
    return render_template('pages/about.html')

@app.route('/blog')
def post():
    return render_template('post/index.html', post=posts)

@app.errorhandler(404)
def page_not_found(error):
    return render_template('pages/errors/404.html'), 404

if __name__ == '__main__':
    app.run(debug=True, port=5000)