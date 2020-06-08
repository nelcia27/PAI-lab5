<?php session_start(); 
 require("funkcje.php");
 if(isSet($_POST["Zaloguj"])){
  $login=test_input($_POST["login"]);
  $haslo=test_input($_POST["haslo"]);
  //echo "<p> Przesłany login: " . $login . "</p>";
  //echo "<p> Przesłane hasło: " . $haslo . "</p>";
  if($login===$osoba1->login){
   if($haslo===$osoba1->haslo){
    $_SESSION["zalogowanyImie"]=$osoba1->imieNazwisko;
    $_SESSION["zalogowany"]=1;
    header("Location: user.php");
   }
  }else if($login===$osoba2->login){
   if($haslo===$osoba2->haslo){
    $_SESSION["zalogowanyImie"]=$osoba2->imieNazwisko;
    $_SESSION["zalogowany"]=1;
    header("Location: user.php");
   }
  }else{
   header("Location: indeks.php");
  }
}
?>