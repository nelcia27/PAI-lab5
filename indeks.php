<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset='UTF-8' />
</head>
<body>
<?php
 require("funkcje.php");
 echo "<h1> Nasz system </h1>";
  if(isSet($_POST["wyloguj"])){
   $_SESSION["zalogowany"]=0;
 }
 if(isSet($_COOKIE["Cookie"])){
   echo "Wartośc cookie: " . $_COOKIE["Cookie"];
  }
 ?>
 <form action="logowanie.php" method="post">
 <fieldset>
 <legend>Logowanie:</legend>
 Login: <input type="text" name="login"><br>
 Hasło: <input type="password" name="haslo"><br>
 <input type="submit" name="Zaloguj" value="Zaloguj">
 </fieldset>
 </form>
 <br>
 <form action="cookie.php" method="get">
 <fieldset>
 <legend>Ciasteczka:</legend>
 Czas: <input type="number" name="czas"><br>
 <input type="submit" name="utworzCookie" value="utworzCookie">
 </fieldset>
 </form>
 <br>
 <a href="user.php">User</a>
</body>
</html>
