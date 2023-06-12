
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
    $rezultat = mysqli_query($polaczenie, "SELECT subject.name, teacher.first_name, teacher.last_name FROM subject join class on subject.class_id = class.class_id join student on student.class_id = class.class_id join teacher on subject.teacher_id = teacher.teacher_id where student.student_id=".$_SESSION["user_id"]);
    echo "<table cellpadding=5 border=1 class='table table-striped'>";
    echo "<thead><tr><th>Subject</th><th>Teacher</th></tr></thead>\n";
    echo"<tbody>";
    while ($wiersz = mysqli_fetch_array($rezultat)) {
      $teacher = $wiersz[1]." ".$wiersz[2];
      $subject_name = $wiersz[0];
      echo "<tr><td>$subject_name</td><td>$teacher</td></tr>\n";
    }
    echo "</tbody></table>";
    mysqli_close($polaczenie);
?>
      </body>
</html>