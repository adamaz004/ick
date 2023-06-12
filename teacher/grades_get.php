
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
    $rezultat = mysqli_query($polaczenie, "SELECT subject.subject_id, subject.name, class.name FROM subject
    join teacher on subject.teacher_id = teacher.teacher_id
    join class on subject.class_id = class.class_id
    where teacher.teacher_id=".$_SESSION["user_id"]." order by subject.name asc");
   
     
    while ($wiersz = mysqli_fetch_array($rezultat)) {
       
      $rezultat2 = mysqli_query($polaczenie, "SELECT student.student_id, student.first_name, student.last_name FROM subject 
      join class on subject.class_id = class.class_id
      join student on student.class_id = class.class_id
      where subject.subject_id = ".$wiersz[0]." order by student.last_name asc");
      
      
      
    echo "<table cellpadding=5 border=1 class='table table-striped'>";
    echo "<thead><tr><th>$wiersz[1]</th><th>$wiersz[2]</th></tr></th></tr><tr><th>Student</th><th>Grade</th></tr></thead>\n";
    echo"<tbody>";
       while ($wiersz2 = mysqli_fetch_array($rezultat2)) {
         
         echo "<tr><td>$wiersz2[1] $wiersz2[2]</td><td>";
         
         $rezultat3 = mysqli_query($polaczenie, "SELECT grade.grade, grade.type FROM class
	  join subject on subject.class_id = class.class_id
      join grade on grade.subject_id = subject.subject_id
      where grade.student_id = ".$wiersz2[0]." and grade.subject_id= ".$wiersz[0]);
         
         while ($wiersz3 = mysqli_fetch_array($rezultat3)) {
           echo "$wiersz3[0],";
           
           
         }
         
          echo "</td></tr>";
         
         
       }
       
      }
   
      
      
     
    
    echo "</tbody></table>";
    mysqli_close($polaczenie);
?>
      </body>
</html>