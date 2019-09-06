<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

<form action="#" method="POST">
  <h5 class="header-3">CONTACT</h5><br />
  <p class="text">Name: <input name="name" id="name" type="text" placeholder=" Your name here.." required></p><br />
  <p class="text">Email: <input name="email" id="email" type="email" placeholder=" example@gmail.com" required></p><br />
  <p class="text">Message Title: <input name="title" id="title" type="text" required></p><br />
  <p class="text">Message:<br /><input name="message" minlength="20" size="10" id="message" type="text" placeholder=" Enter your message here.." required=20></p><br />
  <p><input class="button" type="submit" value="SEND"></p>
</form>
  
<?php
 $txt= "data.txt";
 if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['title']) && isset($_POST['message'])) {
$fh = fopen($txt, 'a'); 
    $txt=$_POST['name'].' - '.$_POST['email'].' - '.$_POST['title'].' - '.$_POST['message']; 
   fwrite($fh,$txt); // Write information to the file
   fclose($fh); // Close the file
 }
?>

</body>
</html>


