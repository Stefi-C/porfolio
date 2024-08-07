<?php
$name =  $_POST['name'];
$email =  $_POST['email'];
$subject =  $_POST['subject'];
$message =  $_POST['message'];


$mailheader = "From:" .$name. "<" .$email. ">\r\n";

$recipient = "stefi_c.dev@icloud.com";

mail($recipient, $subject, $message, $mailheader)
or die ("Error!");
echo'
<!DOCTYPE html>
<html lang="en">
    <head>
    	<title>Developer</title>

    	<!-- meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- stylesheet -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/owl.theme.min.css">
        <link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/responsive/mobile.css">

		<!-- google font -->
        <link href="http://fonts.googleapis.com/css?family=Oswald:300,400" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Oxygen:400,300" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Rouge+Script" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Milonga" rel="stylesheet" type="text/css">

        <!-- fontawesome -->
        <script src="https://kit.fontawesome.com/36ca5abeae.js" crossorigin="anonymous"></script>
    </head>
<body>
    <div class="container form-response">
        <h1>Thank You for contacting me. I will get back to you as soon as possible!</h1>
        <p class="back">Go back to the <a href="index.html">home</a></p>
    </div>
</body>
</html>';
?>