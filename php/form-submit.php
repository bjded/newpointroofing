<?php
if (isset($_POST["submit"])) {
    $data = array(
        'secret' => "0x4AAAAAAABTJPLgJdR3zaEQ87pHQt0MFTQ",
        'response' => $_POST['cf-turnstile-response']
    );
    $verify = curl_init();
    curl_setopt($verify, CURLOPT_URL, "https://challenges.cloudflare.com/turnstile/v0/siteverify");
    curl_setopt($verify, CURLOPT_POST, true);
    curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($verify);
    $response_data = json_decode($response);

    // Turnstile Verification
    if ($response_data->success) {
        // Data
        $name = $_POST['full-name'];
        $email = $_POST['email-address'];
        $phone = $_POST['phone-number'];
        $address = $_POST['address'];
        $service = $_POST['choose-service'];
        $message = $_POST['your-message'];

        // Format Email
        $to = "bjdedushaj@gmail.com";
        $subject = "New Point Roofing Contact Form";
        $message = "
                <html>
                    <body>
                        <h1>New Point Roofing</h1>
                        <p style='font-size: 18px;'><span style='font-weight: 600;'>Name: </span>" . $name . "</p>
                        <p style='font-size: 18px;'><span style='font-weight: 600;'>Email: </span>" . $email . "</p>
                        <p style='font-size: 18px;'><span style='font-weight: 600;'>Phone: </span>" . $phone . "</p>
                        <p style='font-size: 18px;'><span style='font-weight: 600;'>Address: </span>" . $address . "</p>
                        <p style='font-size: 18px;'><span style='font-weight: 600;'>Service: </span>" . $service . "</p>
                        <p style='font-size: 18px;'><span style='font-weight: 600;'>Message: </span>" . $message . "</p>
                        <br>
                        <p style='font-size: 16px;'>&copy; 2025 New Point Roofing, LLC</p>
                    </body>
                </html>
            ";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html; charset=UTF-8" . "\r\n";
        $headers .= 'From: "New Point Roofing" <no-reply@ded-soft.com>' . "\r\n";

        mail($to, $subject, $message, $headers);

        // Redirect on success.
        header('Location: ../?success');
        exit();
    } else {
        header('Location: ../?error=tvf');
        exit();
    }
} else {
    header("Location: ../?nfs");
    exit();
}
