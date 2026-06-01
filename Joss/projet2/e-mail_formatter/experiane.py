import smtplib 
import os 
from email.message import EmailMessage

email = "otsongmajunior@gmail.com"

email_password = os.environ.get('password')
contacts = ['otsongmajunior@gmail.com', 'otsongmajunior@gmail.com ']

message = EmailMessage()

message['subject'] = 'nous aurons un dinner aujourdhui '
message['from'] = email
message['To'] = contacts
message.set_content('que dittu dwdmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmd')

with smtplib.SMTP_SSL('smtp.gmail.com',465) as smtp:    

    smtp.login(email, email_password)

    smtp.send_message(message)