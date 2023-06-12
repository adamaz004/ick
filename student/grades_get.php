
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
    $rezultat = mysqli_query($polaczenie, "SELECT distinct  subject.subject_id, subject.name FROM grade
    join subject on grade.subject_id = subject.subject_id
    join student on grade.student_id = student.student_id
    where student.student_id=".$_SESSION["user_id"]." order by subject.name asc");
    echo "<table cellpadding=5 border=1 class='table table-striped'>";
    echo "<thead><tr><th>Subject</th><th>Grade</th></tr></thead>\n";
    echo"<tbody>";
     
    while ($wiersz = mysqli_fetch_array($rezultat)) {
       echo "<tr><td>$wiersz[1]</td><td>";
      $rezultat2 = mysqli_query($polaczenie, "SELECT subject.name, grade.grade, grade.grade_id FROM grade
    join subject on grade.subject_id = subject.subject_id
    join student on grade.student_id = student.student_id
    where subject.subject_id=".$wiersz[0]." order by subject.name asc");
   
      while ($wiersz2 = mysqli_fetch_array($rezultat2)) {
        echo $wiersz2[1].", ";
        
        
      }
      echo "</td></tr>";
      
      
     
    }
    echo "</tbody></table>";
    mysqli_close($polaczenie);
?>
      </body>
</html>