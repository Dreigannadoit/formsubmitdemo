<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "dreiabmab@gmail.com";

mail($recipient, $subject, $message, $mailheader)
or die("Couldn't send");

echo'
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact form using php</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Wix+Madefor+Display:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <div class="container">
    <h1>Message sent</h1>
    <p class="back">Go back to the <a href="./form.html">Main Page</a></p>
    

  </div>
</body>
</html>
'

?>