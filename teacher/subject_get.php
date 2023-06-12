
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
    $rezultat = mysqli_query($polaczenie, "SELECT * FROM subject JOIN subject_student on subject.subject_id = subject_student.subject_id join student on subject_student.student_id = student.student_id join subject_teacher on subject.subject_id= subject_teacher.subject_id join teacher on subject_teacher.teacher_id = teacher.teacher_id where student.student_id=".$_SESSION["user_id"]);
    echo "<table cellpadding=5 border=1 class='table table-striped'>";
    echo "<thead><tr><th>Subject</th><th>Teacher</th><th> - </th></tr></thead>\n";
    echo"<tbody>";
    while ($wiersz = mysqli_fetch_array($rezultat)) {
      $teacher = $wiersz[22]." ".$wiersz[23];
      $subject_name = $wiersz[1];
      $subject_id = $wiersz[3];
      echo "<tr><td>$subject_name</td><td>$teacher</td><td>
             <a href='https://www.kosiera.pl/ick/subject_info.php?=$subject_id' style='pointer-events: none'><img id='vimg' src='icons/hyperlink.png' style='max-height:20px'/></a>
      </td></tr>\n";
    }
    echo "</tbody></table>";
    mysqli_close($polaczenie);
?>
      </body>
</html>