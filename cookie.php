<?php session_start(); 
require("funkcje.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset='UTF-8' />
</head>
<body>
<?php
 if(isSet($_GET["utworzCookie"])){
  setcookie("Cookie","CookieVal",time()+($_GET["czas"]),"/");
  echo "Minam, ciasteczko dodane!";
 }
?>
 <a href="indeks.php">Home</a> 
</body>
</html>
