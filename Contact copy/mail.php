<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "ayanfe.s.art@outlook.com";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo'

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/08c3112e5d.js" crossorigin="anonymous"></script>
</head>
<body>

        <nav>
                <div class="logo"><h2>Contact</h2></div>
                <div class="openMenu"><i class="fa fa-bars fa-3x" ></i></div>
                <ul class="mainMenu">
                <li><a href="#home" class="active">Contact</a></li>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li class="hasDD"><a href="#">Projects ></a>
                            <ul>
                                <li class="hasDD"><a href="https://ayanfe-bot.github.io/Final/">My Coily Story</a></li>
                            </ul>
                         </li>
                        <li><a href="#">  Gallery</a><li>
                        <div class="closeMenu"><i class="fa fa-times fa-4x"></i></div>
                </ul>           
            </nav>

     <div class="container">
        <div class="Thanks">
        <h1>Thank you for contacting me. I will get back to you as soon as possible!</h1>
         <p class="back">Go back to the <a href="./index.html">homepage</a>.</p>
        </div>

        
     </div>

';


?>