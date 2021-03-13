<?php
if (isset($_POST['submit'])) {
   
    $Email = $_POST['email'];
    $to = "info@mutualcapital.co.uk";
    $subject = "Enquiry Details";
    $headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "From: mutualcapital.co.uk" . "\r\n" .
"Reply-To: info@mutualcapital.co.uk" . "\r\n" .
"X-Mailer: PHP/" . phpversion();


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
               
                <p>Email: '."$Email".' ,  wants to connect with you for further details</p>
                </br>

				</div>
			</body>
			</html>';
    $result = @mail($to, $subject, $message, $headers);

    echo '<script>alert("Your email has been sent successfully , will contact you soon!")</script>';
    echo '<script>window.location.href="index.php";</script>';
}

