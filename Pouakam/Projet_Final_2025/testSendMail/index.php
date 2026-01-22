<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require_once '../vendor/autoload.php';

    $mail = new PHPMailer(true);

    //Configure an SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'backendvanelle@gmail.com';
    $mail->Password = 'rdyw xnee xoga kuvt';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Sender information
    $mail->setFrom('backendvanelle@gmail.com', 'Backend Vanelle');

    // Multiple recipient email addresses and names
    // Primary recipients
    $mail->addAddress('backendvanelle@gmail.com', 'RECIPIENT_NAME_1'); 

    $mail->isHTML(false);

    $mail->Subject = 'PHPMailer SMTP test';

    $mail->Subject = 'Validation envoie message automatique';
    $mail->Body    = '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Validation de Compte</title>
            <style>
                body {
                    background-color: #000;
                    color: #fff;
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 0;
                }

                .container {
                    background-color: rgba(0, 0, 0, 0.7);
                    margin: 0 auto;
                    padding: 40px;
                    max-width: 600px;
                    text-align: center;
                    border-radius: 10px;
                    border: 1px solid #333;
                }

                h1 {
                    font-size: 24px;
                    color: #fff;
                }

                p {
                    font-size: 18px;
                    color: #ccc;
                }

                .validation-code {
                    background-color: rgba(0, 0, 0, 0.9);
                    padding: 20px;
                    font-size: 32px;
                    color: #00bfff;
                    font-weight: bold;
                    letter-spacing: 5px;
                    margin: 20px 0;
                    border-radius: 5px;
                    border: 2px solid #00bfff;
                }
                a.more {
                    color: rgb(0, 191, 255);
                    text-decoration: none;
                }
                .footer {

                    margin-top: 30px;
                    font-size: 14px;
                    color: #888;
                }
                a.more:hover {
                    text-decoration: underline;
                }
            </style>
        </head>
        <body>

            <div class="container">
                <h1> Mail envoyé avec succès :</h1>
                <p> Abonnez-vous au : </p>
                <div class="validation-code">' . 123456 . '</div>
                <div class="footer">
                    Abonnez-vous à la chaîne du Code Redempteur
                </div>
            </div>

        </body>
        </html>';
    $mail->AltBody = 'Abonnez-vous au Code Redempteur';

    // Attempt to send the email
    if (!$mail->send()) {
        echo 'Email not sent. An error was encountered: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent.';
    }

    $mail->smtpClose();