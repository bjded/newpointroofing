<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST["submit"])) {
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    require_once "env.php";

    $data = array(
        'secret' => $turnstile_secret_key,
        'response' => $_POST['cf-turnstile-response']
    );
    $verify = curl_init();
    curl_setopt($verify, CURLOPT_URL, "https://challenges.cloudflare.com/turnstile/v0/siteverify");
    curl_setopt($verify, CURLOPT_POST, true);
    curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($verify);
    $response_data = json_decode($response);

    if ($response_data->success) {
        // Sanitized Data
        $name = htmlspecialchars($_POST['full-name'], ENT_QUOTES, 'UTF-8');
        $email = filter_var($_POST['email-address'], FILTER_SANITIZE_EMAIL);
        $phone = htmlspecialchars($_POST['phone-number'], ENT_QUOTES, 'UTF-8');
        $address = htmlspecialchars($_POST['address'], ENT_QUOTES, 'UTF-8');
        $service = htmlspecialchars($_POST['choose-service'], ENT_QUOTES, 'UTF-8');
        $your_message = htmlspecialchars($_POST['your-message'], ENT_QUOTES, 'UTF-8');

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = 'newpointroofing.net'; // Replace with your SMTP host
            $mail->SMTPAuth   = false; // Set this to true if you require authentication
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Use 'ssl' for SSL, 'tls' for TLS
            $mail->Port       = 587; // 587 for TLS, 465 for SSL (check with your server)

            $mail->setFrom('no-reply@newpointroofing.net', 'New Point Roofing'); // From
            $mail->addAddress('bjdedushaj@yahoo.com'); // To

            $mail->isHTML(true);
            $mail->Subject = "New Point Roofing Contact Form";
            $mail->Body    = "
                <html>
                    <body>
                        <h1>{$service} Request</h1>
                        <p style='font-size: 18px;'><span style='font-weight: 600;'>Name: </span>{$name}</p>
                        <p style='font-size: 18px;'><span style='font-weight: 600;'>Email: </span>{$email}</p>
                        <p style='font-size: 18px;'><span style='font-weight: 600;'>Phone: </span>{$phone}</p>
                        <p style='font-size: 18px;'><span style='font-weight: 600;'>Address: </span>{$address}</p>
                        <p style='font-size: 18px;'><span style='font-weight: 600;'>Service: </span>{$service}</p>
                        <p style='font-size: 18px;'><span style='font-weight: 600;'>Message: </span>{$your_message}</p>
                    </body>
                </html>
            ";

            $mail->send();

            // Redirect on success.
            header('Location: ../thank-you');
            exit();
        } catch (Exception $e) {
            error_log($e->getMessage()); // Log error to the server's error log
            header('Location: ../?error=fsf');
            exit();
        }
    } else {
        header('Location: ../?error=tvf');
        exit();
    }
} else {
    header("Location: ../?error=nfs");
    exit();
}
