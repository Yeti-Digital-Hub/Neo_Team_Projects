<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require_once ('../vendor/autoload.php');
    
    /**
     * send mail to user with the reset link
     *
     * @param  string $email email enter by user
     * @param  array $user user information
     * @param  string $resetLink link to reset password
     * @return bool true if mail sent successfully, false otherwise
     */
    function send_mail($email, $user, $resetLink) {
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
        $mail->setFrom('backendvanelle@gmail.com', 'Menu Link');

        // Multiple recipient email addresses and names
        // Primary recipients
        $mail->addAddress($email, 'RECIPIENT_NAME_1');
        $mail->CharSet = 'UTF-8';

        $mail->isHTML(true);
        $mail->Subject = 'Réinitialisation de votre mot de passe';
                    
        // read the template
        $emailTemplate = file_get_contents('../app/models/email_content_template.php');

        // replace the placeholders
        $emailContent = str_replace('[Nom de l’utilisateur]', $user['name'], $emailTemplate);
        $emailContent = str_replace('[Nom de l’application]', 'Menu Link', $emailContent);
        $emailContent = str_replace('[LIEN_DE_REINITIALISATION]', $resetLink, $emailContent);

        // Assigner au mail
        $mail->Body = $emailContent;
        return $mail->send();
    }

    
    /**
     * filter enter of user
     *
     * @param  string $data enter of user
     * @return string $data enter of user filter
     */
    function filter_data($data) {
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        $data = trim($data);

        return $data;
    }