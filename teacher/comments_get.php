
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
    $rezultat = mysqli_query($polaczenie, "SELECT student.first_name, student.last_name, comments.comment, comments.date from comments
    join teacher on comments.teacher_id = teacher.teacher_id
    join student on comments.student_id = student.student_id
    where teacher.teacher_id=".$_SESSION["user_id"]." order by comments.date");
    echo "<table cellpadding=5 border=1 class='table table-striped'>";
    echo "<thead><tr><th>Data</th><th>Student</th><th>Uwaga</th></tr></thead>\n";
    echo"<tbody>";
    while ($wiersz = mysqli_fetch_array($rezultat)) {
      
      
      echo "<tr><td>$wiersz[3]</td><td>$wiersz[0] $wiersz[1]</td><td><b>$wiersz[2]</b></td></tr>\n";
    }
    echo "</tbody></table>";
    mysqli_close($polaczenie);
?>
      </body>
</html>