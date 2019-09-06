<?php
 $txt= "data.txt";
 if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['title']) && isset($_POST['message'])) {
$fh = fopen($txt, 'a'); 
    $txt=$_POST['name'].' - '.$_POST['email'].' - '.$_POST['title'].' - '.$_POST['message']; 
   fwrite($fh,$txt); // Write information to the file
   fclose($fh); // Close the file
 }
?>