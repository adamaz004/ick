<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
  <HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  </HEAD>
<BODY>
<?php
  session_start();
$user = $_SESSION["user_id"];
$student = htmlentities ($_POST['student'], ENT_QUOTES, "UTF-8");
    $message = htmlentities ($_POST['message'], ENT_QUOTES, "UTF-8");
 $dbuser = "kosierap_ick";
    $dbpassword = "Ick321!";
    $dbname = "kosierap_ick";
    $link = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);


if(!$link) { echo"Error: ". mysqli_connect_errno()." ".mysqli_connect_error(); }
mysqli_query($link, "SET NAMES 'utf8'");
  
     $sql = "INSERT INTO comments (student_id,teacher_id, comment) VALUES ('$student', '$user', '$message');"; //Komenda MySQL do dodawania uzytkownika
    if (mysqli_query($link, $sql)) {
     header ('Location: comments_add.php');
} else {
   echo "Error: " . $sql . "<br>" . mysqli_error($link); //Wyswietl blad z MySQL
}
 
 
?> </BODY> </html>