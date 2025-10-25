<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../vendor/autoload.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? strip_tags(trim($_POST['name'])) : '';
    $email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
    $subject = isset($_POST['subject']) ? strip_tags(trim($_POST['subject'])) : '';
    $message = isset($_POST['message']) ? strip_tags(trim($_POST['message'])) : '';
    $phone = isset($_POST['phone']) ? strip_tags(trim($_POST['phone'])) : '';

    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        die('Please fill in all required fields.');
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Please provide a valid email address.');
    }

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = getenv('SMTP_HOST') ?: 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = getenv('SMTP_USERNAME') ?: 'jimmy.connect@gmail.com';
        $mail->Password = getenv('SMTP_PASSWORD');
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = getenv('SMTP_PORT') ?: 587;

        $mail->setFrom($mail->Username, 'Portfolio Contact Form');
        $mail->addAddress('jimmy.connect@gmail.com', 'Jimmy Mathew');
        $mail->addReplyTo($email, $name);

        $mail->isHTML(true);
        $mail->Subject = 'Portfolio Contact: ' . $subject;
        
        $emailBody = "
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                .header { background-color: #065cc2; color: white; padding: 20px; text-align: center; }
                .content { background-color: #f9f9f9; padding: 20px; margin-top: 20px; }
                .field { margin-bottom: 15px; }
                .label { font-weight: bold; color: #065cc2; }
                .footer { margin-top: 20px; padding-top: 20px; border-top: 1px solid #ddd; font-size: 12px; color: #666; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h2>New Contact Form Submission</h2>
                </div>
                <div class='content'>
                    <div class='field'>
                        <span class='label'>From:</span> {$name}
                    </div>
                    <div class='field'>
                        <span class='label'>Email:</span> {$email}
                    </div>";
        
        if (!empty($phone)) {
            $emailBody .= "
                    <div class='field'>
                        <span class='label'>Phone:</span> {$phone}
                    </div>";
        }
        
        $emailBody .= "
                    <div class='field'>
                        <span class='label'>Subject:</span> {$subject}
                    </div>
                    <div class='field'>
                        <span class='label'>Message:</span>
                        <p>" . nl2br(htmlspecialchars($message)) . "</p>
                    </div>
                </div>
                <div class='footer'>
                    This message was sent from your portfolio website contact form.
                </div>
            </div>
        </body>
        </html>";
        
        $mail->Body = $emailBody;
        $mail->AltBody = "From: {$name}\nEmail: {$email}\n" . (!empty($phone) ? "Phone: {$phone}\n" : "") . "Subject: {$subject}\n\nMessage:\n{$message}";

        $mail->send();
        echo 'OK';
    } catch (Exception $e) {
        error_log("Mail Error: " . $mail->ErrorInfo);
        die('Failed to send message. Please try again later.');
    }
} else {
    die('Invalid request method.');
}
?>
