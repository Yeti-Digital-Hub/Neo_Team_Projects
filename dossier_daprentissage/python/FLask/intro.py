from flask import Flask,render_template
app = Flask(__name__)

@app.route ('/')
def home():
    message={"bonjour je suis sssssssssssssssssss"}
    return message

if  __name__ == '__main__':
    app.run(host='0.0.0.0', port= 9999)