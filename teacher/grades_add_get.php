
<html>
  <head>
  </head>
  <body>
    
<?php 
session_start();
     $_SESSION["user_id"];
$dbhost = "localhost";
    $dbuser = "kosierap_ick";
    $dbpassword = "Ick321!";
    $dbname = "kosierap_ick";
    $polaczenie = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
    $rezultat = mysqli_query($polaczenie, "SELECT distinct class.class_id,class.name FROM subject
    join class on subject.class_id = class.class_id
    where subject.teacher_id=".$_SESSION["user_id"]." order by class.name asc");
   
     echo "<h2>Wybierz klasę</h2>";
    while ($wiersz = mysqli_fetch_array($rezultat)) {
       
      echo "<button><a href='add_grades.php?class=".$wiersz[0]."'>$wiersz[1]</a></button>";
       
      }
   
      
      
     
    
    echo "</tbody></table>";
    mysqli_close($polaczenie);
?>
      </body>
</html>