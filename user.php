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
  <br>
  <a href="indeks.php">Home</a>
  <?php
   if(isSet($_SESSION["zalogowany"])){
    if($_SESSION["zalogowany"]===1){
     echo "Zalogowano: " . $_SESSION["zalogowanyImie"];
    }else{
     header("Location: indeks.php");
    }
   }else{
    header("Location: indeks.php");
   }
  ?>
   
   <?php
    if(isSet($_POST["wgraj"])){
     $currentDir=getcwd();
     $uploadDirectory="\zdjeciaUzytkownikow\A";
     $fileName = $_FILES['myfile']['name'];
     $fileSize = $_FILES['myfile']['size'];
     $fileTmpName = $_FILES['myfile']['tmp_name'];
     $fileType = $_FILES['myfile']['type'];
     $uploadPath = $currentDir . $uploadDirectory . $fileName;
     if(move_uploaded_file($fileTmpName, $uploadPath)){
       echo "<img src='zdjeciaUzytkownikow\afoto.jpg' alt='My foto'>";
     }
    }
   ?>
   <form action="user.php" method="post" enctype='multipart/form-data'>
   <fieldset>
   <legend>Wgrywanie zdjęcia:</legend>
   <input name="myfile" type="file">
   <input type="submit" name="wgraj" value="wgraj">
   </fieldset>
   </form>
   <br>
   <form action="indeks.php" method="post">
   <fieldset>
   <legend>Wylogowywanie:</legend>
   <input type="submit" name="wyloguj" value="wyloguj">
   </fieldset>
   </form>
   <?php
    if(isSet($_POST["wyloguj"])){
     header("Location: indeks.php");
    }
   ?>
 </body>
</html>
