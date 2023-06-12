<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
  <HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  </HEAD>
<BODY>
<?php
  session_start();
$user = $_SESSION["user"];
$class = htmlentities ($_POST['class'], ENT_QUOTES, "UTF-8");
$subject = htmlentities ($_POST['subject'], ENT_QUOTES, "UTF-8");
  $topic = htmlentities ($_POST['topic'], ENT_QUOTES, "UTF-8");
    $date = htmlentities ($_POST['date'], ENT_QUOTES, "UTF-8");
 $dbuser = "kosierap_ick";
    $dbpassword = "Ick321!";
    $dbname = "kosierap_ick";
    $link = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);


if(!$link) { echo"Error: ". mysqli_connect_errno()." ".mysqli_connect_error(); }
mysqli_query($link, "SET NAMES 'utf8'");
  
     $sql = "INSERT INTO terms (name, class_id,subject_id, date) VALUES ('$topic', '$class', '$subject', '$date');"; //Komenda MySQL do dodawania uzytkownika
    if (mysqli_query($link, $sql)) {
     header ('Location: add_test.php');
} else {
   echo "Error: " . $sql . "<br>" . mysqli_error($link); //Wyswietl blad z MySQL
}
 
 
?> </BODY> </html>