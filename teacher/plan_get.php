
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

    echo "<table cellpadding=5 border=1 class='table table-striped'>";
    echo "<thead><tr><th>Godzina</th><th>Poniedziałek</th><th>Wtorek</th><th>Środa</th><th>Czwartek</th><th>Piątek</th></tr></thead>\n";
    echo"<tbody>";
    echo "<tr><td>8:00 - 9:00</td>";
    //Poniedziałek 8
        $rezultat = mysqli_query($polaczenie, "
    SELECT subject.name, monday.class FROM subject
join teacher on subject.teacher_id = teacher.teacher_id
join monday on subject.subject_id = monday.subject_id
where monday.hour_from = '08:00:00' and
teacher.teacher_id = ".$_SESSION["user_id"]);
    while ($wiersz = mysqli_fetch_array($rezultat)) {
		$p81 = $wiersz[0];
        $p82 = $wiersz[1];
    }if($p81 != null)  echo "<td>$p81 - $p82</td>";
     else echo "<td> - </td>";
        //Wtorek 8
        $rezultat = mysqli_query($polaczenie, "
    SELECT subject.name, tuesday.class FROM subject
join teacher on subject.teacher_id = teacher.teacher_id
join tuesday on subject.subject_id = tuesday.subject_id
where tuesday.hour_from = '08:00:00' and
teacher.teacher_id=".$_SESSION["user_id"]);
    while ($wiersz = mysqli_fetch_array($rezultat)) {
		$w81 = $wiersz[0];
        $w82 = $wiersz[1];
    }if($w81 != null)  echo "<td>$w81 - $w82</td>";
     else echo "<td> - </td>";
        //Środa 8
 $rezultat = mysqli_query($polaczenie, "
    SELECT subject.name, wednesday.class FROM subject
join teacher on subject.teacher_id = teacher.teacher_id
join wednesday on subject.subject_id = wednesday.subject_id
where wednesday.hour_from = '08:00:00' and
teacher.teacher_id=".$_SESSION["user_id"]);
    while ($wiersz = mysqli_fetch_array($rezultat)) {
		$s81 = $wiersz[0];
        $s82 = $wiersz[1];
 
    }if($s81 != null)  echo "<td>$s81 - $s82</td>";
     else echo "<td> - </td>";
        //Czwartek 8
        $rezultat = mysqli_query($polaczenie, "
    SELECT subject.name, thursday.class FROM subject
join teacher on subject.teacher_id = teacher.teacher_id
join thursday on subject.subject_id = thursday.subject_id
where thursday.hour_from = '08:00:00' and
teacher.teacher_id=".$_SESSION["user_id"]);
    while ($wiersz = mysqli_fetch_array($rezultat)) {
		$c81 = $wiersz[0];
        $c82 = $wiersz[1];
    }if($c81 != null)  echo "<td>$c81 - $c82</td>";
     else echo "<td> - </td>";
        //Piątek 8
        $rezultat = mysqli_query($polaczenie, "
    SELECT subject.name, friday.class FROM subject
join teacher on subject.teacher_id = teacher.teacher_id
join friday on subject.subject_id = friday.subject_id
where friday.hour_from = '08:00:00' and
teacher.teacher_id=".$_SESSION["user_id"]);
    while ($wiersz = mysqli_fetch_array($rezultat)) {
		$pt81 = $wiersz[0];
        $pt82 = $wiersz[1];
    }if($pt81 != null)  echo "<td> $pt81 - $pt82</td>";
     else echo "<td>  - </td>";
       echo "</tr>";
    
    
    //9
     echo "<tr><td>9:00 - 10:00</td>";
    //Poniedziałek 9
        $rezultat = mysqli_query($polaczenie, "
     SELECT subject.name, monday.class FROM subject
join teacher on subject.teacher_id = teacher.teacher_id
join monday on subject.subject_id = monday.subject_id
where monday.hour_from = '09:00:00' and
teacher.teacher_id = ".$_SESSION["user_id"]);
    while ($wiersz = mysqli_fetch_array($rezultat)) {
		$p91 = $wiersz[0];
        $p92 = $wiersz[1];
  
    }if($p91 != null)  echo "<td>$p91 - $p92</td>";
     else echo "<td> - </td>";
        //Wtorek 9
        $rezultat = mysqli_query($polaczenie, "
    SELECT subject.name, tuesday.class FROM subject
join teacher on subject.teacher_id = teacher.teacher_id
join tuesday on subject.subject_id = tuesday.subject_id
where tuesday.hour_from = '09:00:00' and
teacher.teacher_id=".$_SESSION["user_id"]);
    while ($wiersz = mysqli_fetch_array($rezultat)) {
		$w91 = $wiersz[0];
        $w92 = $wiersz[1];
    }if($w91 != null)  echo "<td>$w91 - $w92</td>";
     else echo "<td> - </td>";
        //Środa 9
        $rezultat = mysqli_query($polaczenie, "
     SELECT subject.name, wednesday.class FROM subject
join teacher on subject.teacher_id = teacher.teacher_id
join wednesday on subject.subject_id = wednesday.subject_id
where wednesday.hour_from = '09:00:00' and
teacher.teacher_id=".$_SESSION["user_id"]);
    while ($wiersz = mysqli_fetch_array($rezultat)) {
		$s91 = $wiersz[0];
        $s92 = $wiersz[1];
 
    }if($s91 != null)  echo "<td>$s91 - $s92</td>";
     else echo "<td> - </td>";
        //Czwartek 9
        $rezultat = mysqli_query($polaczenie, "
     SELECT subject.name, thursday.class FROM subject
join teacher on subject.teacher_id = teacher.teacher_id
join thursday on subject.subject_id = thursday.subject_id
where thursday.hour_from = '09:00:00' and
teacher.teacher_id=".$_SESSION["user_id"]);
    while ($wiersz = mysqli_fetch_array($rezultat)) {
		$c91 = $wiersz[0];
        $c91 = $wiersz[1];
 
    }if($c91 != null)  echo "<td> $c91 - $c92</td>";
     else echo "<td> - </td>";
        //Piątek 9
        $rezultat = mysqli_query($polaczenie, "
    SELECT subject.name, friday.class FROM subject
join teacher on subject.teacher_id = teacher.teacher_id
join friday on subject.subject_id = friday.subject_id
where friday.hour_from = '09:00:00' and
teacher.teacher_id=".$_SESSION["user_id"]);
    while ($wiersz = mysqli_fetch_array($rezultat)) {
		$pt91 = $wiersz[0];
        $pt92 = $wiersz[1];
     
    }if($pt91 != null)  echo "<td> $pt1 - $pt92</td>";
     else echo "<td> - </td>";
       echo "</tr>";
    
    //10
     echo "<tr><td>10:00 - 11:00</td>";
    //Poniedziałek 10
        $rezultat = mysqli_query($polaczenie, "
    SELECT subject.name, monday.class FROM subject
join teacher on subject.teacher_id = teacher.teacher_id
join monday on subject.subject_id = monday.subject_id
where monday.hour_from = '10:00:00' and
teacher.teacher_id =".$_SESSION["user_id"]);
    while ($wiersz = mysqli_fetch_array($rezultat)) {
		$p101 = $wiersz[0];
        $p102 = $wiersz[1];
  
    }if($p101 != null)  echo "<td>$p101 - $p102</td>";
     else echo "<td> - </td>";
        //Wtorek 10
        $rezultat = mysqli_query($polaczenie, "
 SELECT subject.name, tuesday.class FROM subject
join teacher on subject.teacher_id = teacher.teacher_id
join tuesday on subject.subject_id = tuesday.subject_id
where tuesday.hour_from = '10:00:00' and
teacher.teacher_id=".$_SESSION["user_id"]);
    while ($wiersz = mysqli_fetch_array($rezultat)) {
		$w101 = $wiersz[0];
        $w102 = $wiersz[1];
    }if($w101 != null)  echo "<td> $w101 - $w102</td>";
     else echo "<td> - </td>";
        //Środa 10
        $rezultat = mysqli_query($polaczenie, "
   SELECT subject.name, wednesday.class FROM subject
join teacher on subject.teacher_id = teacher.teacher_id
join wednesday on subject.subject_id = wednesday.subject_id
where wednesday.hour_from = '10:00:00' and
teacher.teacher_id=".$_SESSION["user_id"]);
    while ($wiersz = mysqli_fetch_array($rezultat)) {
		$s101 = $wiersz[0];
        $s102 = $wiersz[1];
 
    }if($s101 != null)  echo "<td>$s101 - $s102</td>";
     else echo "<td> - </td>";
        //Czwartek 10
        $rezultat = mysqli_query($polaczenie, "
    SELECT subject.name, thursday.class FROM subject
join teacher on subject.teacher_id = teacher.teacher_id
join thursday on subject.subject_id = thursday.subject_id
where thursday.hour_from = '10:00:00' and
teacher.teacher_id=".$_SESSION["user_id"]);
    while ($wiersz = mysqli_fetch_array($rezultat)) {
		$c101 = $wiersz[0];
        $c102 = $wiersz[1];
 
    }if($c101 != null)  echo "<td> $c101 - $c102</td>";
     else echo "<td> - </td>";
        //Piątek 10
        $rezultat = mysqli_query($polaczenie, "
     SELECT subject.name, friday.class FROM subject
join teacher on subject.teacher_id = teacher.teacher_id
join friday on subject.subject_id = friday.subject_id
where friday.hour_from = '10:00:00' and
teacher.teacher_id=".$_SESSION["user_id"]);
    while ($wiersz = mysqli_fetch_array($rezultat)) {
		$pt101 = $wiersz[0];
        $pt102 = $wiersz[1];
     
    }if($pt101 != null)  echo "<td> $pt101 - $pt102</td>";
     else echo "<td> - </td>";
       echo "</tr>";
          //11
     echo "<tr><td>11:00 - 12:00</td>";
    //Poniedziałek 11
        $rezultat = mysqli_query($polaczenie, "
    SELECT subject.name, monday.class FROM subject
join teacher on subject.teacher_id = teacher.teacher_id
join monday on subject.subject_id = monday.subject_id
where monday.hour_from = '11:00:00' and
teacher.teacher_id =".$_SESSION["user_id"]);
    while ($wiersz = mysqli_fetch_array($rezultat)) {
		$p111 = $wiersz[0];
        $p112 = $wiersz[1];
  
    }if($p111 != null)  echo "<td>$p111 - $p112</td>";
     else echo "<td> - </td>";
        //Wtorek 11
        $rezultat = mysqli_query($polaczenie, "
   SELECT subject.name, tuesday.class FROM subject
join teacher on subject.teacher_id = teacher.teacher_id
join tuesday on subject.subject_id = tuesday.subject_id
where tuesday.hour_from = '11:00:00' and
teacher.teacher_id=".$_SESSION["user_id"]);
    while ($wiersz = mysqli_fetch_array($rezultat)) {
		$w111 = $wiersz[0];
        $w112 = $wiersz[1];
    }if($w111 != null)  echo "<td> $w111 - $w112</td>";
     else echo "<td> - </td>";
        //Środa 11
        $rezultat = mysqli_query($polaczenie, "
    SELECT subject.name, wednesday.class FROM subject
join teacher on subject.teacher_id = teacher.teacher_id
join wednesday on subject.subject_id = wednesday.subject_id
where wednesday.hour_from = '11:00:00' and
teacher.teacher_id=".$_SESSION["user_id"]);
    while ($wiersz = mysqli_fetch_array($rezultat)) {
		$s111 = $wiersz[0];
        $s112 = $wiersz[1];
 
    }if($s111 != null)  echo "<td>$s111 - $s112</td>";
     else echo "<td> - </td>";
        //Czwartek 11
        $rezultat = mysqli_query($polaczenie, "
    SELECT subject.name, thursday.class FROM subject
join teacher on subject.teacher_id = teacher.teacher_id
join thursday on subject.subject_id = thursday.subject_id
where thursday.hour_from = '11:00:00' and
teacher.teacher_id=".$_SESSION["user_id"]);
    while ($wiersz = mysqli_fetch_array($rezultat)) {
		$c111 = $wiersz[0];
        $c112 = $wiersz[1];
 
    }if($c111 != null)  echo "<td>$c111 - $c112</td>";
     else echo "<td> - </td>";
        //Piątek 11
        $rezultat = mysqli_query($polaczenie, "
     SELECT subject.name, friday.class FROM subject
join teacher on subject.teacher_id = teacher.teacher_id
join friday on subject.subject_id = friday.subject_id
where friday.hour_from = '11:00:00' and
teacher.teacher_id=".$_SESSION["user_id"]);
    while ($wiersz = mysqli_fetch_array($rezultat)) {
		$pt111 = $wiersz[0];
        $pt112 = $wiersz[1];
     
    }if($pt111 != null)  echo "<td>$pt111 - $pt112</td>";
     else echo "<td> - </td>";
       echo "</tr>";
    
    //12
     echo "<tr><td>12:00 - 13:00</td>";
    //Poniedziałek 12
        $rezultat = mysqli_query($polaczenie, "
     SELECT subject.name, monday.class FROM subject
join teacher on subject.teacher_id = teacher.teacher_id
join monday on subject.subject_id = monday.subject_id
where monday.hour_from = '12:00:00' and
teacher.teacher_id =".$_SESSION["user_id"]);
    while ($wiersz = mysqli_fetch_array($rezultat)) {
		$p121 = $wiersz[0];
        $p122 = $wiersz[1];
  
    }if($p121 != null)  echo "<td>$p121 - $p122</td>";
     else echo "<td> - </td>";
        //Wtorek 12
        $rezultat = mysqli_query($polaczenie, "
     SELECT subject.name, tuesday.class FROM subject
join teacher on subject.teacher_id = teacher.teacher_id
join tuesday on subject.subject_id = tuesday.subject_id
where tuesday.hour_from = '12:00:00' and
teacher.teacher_id=".$_SESSION["user_id"]);
    while ($wiersz = mysqli_fetch_array($rezultat)) {
		$w121 = $wiersz[0];
        $w122 = $wiersz[1];
    }if($w121 != null)  echo "<td>$w121 - $w122</td>";
     else echo "<td> - </td>";
        //Środa 12
        $rezultat = mysqli_query($polaczenie, "
    SELECT subject.name, wednesday.class FROM subject
join teacher on subject.teacher_id = teacher.teacher_id
join wednesday on subject.subject_id = wednesday.subject_id
where wednesday.hour_from = '12:00:00' and
teacher.teacher_id=".$_SESSION["user_id"]);
    while ($wiersz = mysqli_fetch_array($rezultat)) {
		$s121 = $wiersz[0];
        $s122 = $wiersz[1];
 
    }if($s121 != null)  echo "<td>$s121 - $s122</td>";
     else echo "<td> - </td>";
        //Czwartek 12
        $rezultat = mysqli_query($polaczenie, "
    SELECT subject.name, thursday.class FROM subject
join teacher on subject.teacher_id = teacher.teacher_id
join thursday on subject.subject_id = thursday.subject_id
where thursday.hour_from = '12:00:00' and
teacher.teacher_id=".$_SESSION["user_id"]);
    while ($wiersz = mysqli_fetch_array($rezultat)) {
		$c121 = $wiersz[0];
        $c122 = $wiersz[1];
 
    }if($c121 != null)  echo "<td>$c121 - $c122</td>";
     else echo "<td> - </td>";
        //Piątek 12
        $rezultat = mysqli_query($polaczenie, "
    SELECT subject.name, friday.class FROM subject
join teacher on subject.teacher_id = teacher.teacher_id
join friday on subject.subject_id = friday.subject_id
where friday.hour_from = '12:00:00' and
teacher.teacher_id=".$_SESSION["user_id"]);
    while ($wiersz = mysqli_fetch_array($rezultat)) {
		$pt121 = $wiersz[0];
        $pt122 = $wiersz[1];
     
    }if($pt121 != null)  echo "<td>$pt121 - $pt122</td>";
     else echo "<td> - </td>";
       echo "</tr>";
    
    

    echo "</tbody></table>";
    mysqli_close($polaczenie);
?>
      </body>
</html>