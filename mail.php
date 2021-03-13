<?php
if (isset($_POST['submit'])) {
   
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $sub = $_POST['sub'];
    $message1 = $_POST['msg'];

    $to = "ravinayadav1412@gmail.com";
    $subject = "Enquiry Details";
    $headers = "MIME-Version: 1.0" . "\r\n";
    // $headers .= 'Bcc:mumbaiwebdesigner@gmail.com' . "\r\n"; 

    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers = "From: mutualcapital.co.uk" . "\r\n" .

    $message = '<!doctype html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<meta name="viewport"
					  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
				<meta http-equiv="X-UA-Compatible" content="ie=edge">
				<title>Document</title>
			</head>
			<body>
                <div class="container">
                <p>First Name: '."$firstname".'</p>
                </br>
                <p>Last Name: '."$lastname".'</p>
                </br>
                <p>Email: '."$email".'</p>
                </br>

                <p>Subject: '."$sub".'</p>
                </br>

                <p>Message: '."$message1".'</p>



				</div>
			</body>
			</html>';
    $result = @mail($to, $subject, $message, $headers);

    echo '<script>alert("Your email has been sent successfully , will contact you soon!")</script>';
    echo '<script>window.location.href="index.php";</script>';
}

