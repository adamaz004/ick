<?php 
//Spradzanie sesji
declare(strict_types=1);
session_start();
if (!isset($_SESSION['loggedin'])) //Jezeli nie ma sesji
{
  	header('Location: index.php'); //Powrot do panelu logowania
	exit(); 
}
  ?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
	<meta name="description" content="Twój Opis">
	<meta name="author" content="Twoje dane">
	<meta name="keywords" content="Twoje słowa kluczowe">
	<title>E-dziennik</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
	<style type="text/css" class="init"></style>
	<link rel="stylesheet" type="text/css" href="stylHeader.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
	<script type="text/javascript" src="twoj_js.js"></script> 
    
    <style>

        .container-buttons {
            width: 570px;
            height: inherit;
            border: 3px solid black;
            border-radius: 7px;
            padding: 20px;
            background-color: #dddddd;
        }
        .divbutton {
            width: 240px;
            height: 110px;
            border: 5px solid black;
            border-radius: 7px;
            margin: 10px;
        }
        .divbutton:active {
            transform: scale(0.92);
        }
        .divbuttonhelper {
            width: 100%;
            height: 100%;
            background-color: white;
            cursor: pointer;
        }
        .divbuttonhelper:hover {
            transition: 0.1s;
            transform: scale(1.16);
            border-radius: 7px;
        }
        .divbuttonhelper a {
            width: 100%;
            height: 100%;
            display: block;
            text-decoration: none;
            color: black;
            line-height: normal;
        }
        .divbuttonhelper:hover {
            background-color: #dedace;
            transition: 0.1s;
            -webkit-filter:invert(100%);
            filter:progid:DXImageTransform.Microsoft.BasicImage(invert='1');
        }
        .divimg {
            width: 100px;
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            float: left;
        }
        .divimg img {
            width: 80px;
            height: 80px;
        }
        .divtext {
            width: 130px;
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            float: left;
            padding-right: 10px;
        }
        .divtexttext {
            text-align: center;
            font-size: 14px;
            font-family: sans-serif;
        }
        .divtexttextheader {
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 4px;
            font-family: sans-serif;
        }
        a > img {
            -webkit-filter:invert(100%);
            filter:progid:DXImageTransform.Microsoft.BasicImage(invert='1');
        }
    </style>
    
</head>

<body>
	 <div id="wrapper">
   <div class="overlay"></div>
    
        <!-- Sidebar -->
    <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
     <ul class="nav sidebar-nav list-unstyled">
       <div class="sidebar-header">
       <div class="sidebar-brand">
         <a href="#"><?php echo $_SESSION["user"]?></a>
          
         </div></div>
       
         <li><a href="index2_teacher.php"><img style="max-height:20px; padding-right:10px" src="media/panel.png">PANEL</a></li>
        <li><a href="teacher/contact.php"><img style="max-height:20px; padding-right:10px" src="media/mail.png">Kontakt</a></li>
        <li><a href="teacher/plan.php"><img style="max-height:20px; padding-right:10px" src="media/calendar2.png">Plan zajęć</a></li>
        <li><a href="teacher/terms.php"><img style="max-height:20px; padding-right:10px" src="media/calendar.png">Terminy</a></li>
        <li><a href="teacher/add_test.php"><img style="max-height:20px; padding-right:10px" src="media/calendar.png">Dodaj sprawdzian</a></li>
        <li><a href="teacher/grades.php"><img style="max-height:20px; padding-right:10px" src="media/score.png">Oceny</a></li>
        <li><a href="teacher/add_grades.php"><img style="max-height:20px; padding-right:10px" src="media/score.png">Dodaj oceny</a></li>
        <li><a href="teacher/comments.php"><img style="max-height:20px; padding-right:10px" src="media/warning.png">Uwagi</a></li>
        <li><a href="teacher/comments_add.php"><img style="max-height:20px; padding-right:10px" src="media/warning.png">Dodaj uwagi</a></li>
      </ul>
  </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
       
                        
    <div class="container-buttons">
        <table>
            <tr>
                <td>
                    <div class="divbutton">
                        <div class="divbuttonhelper">
                            <a href="teacher/contact.php"><!--Miejsce na przekierowanie-->
                                <div class="divimg">
                                    <img src="media/mail.png"/>
                                </div>
                                <div class="divtext">
                                    <div class="divtexttext">
                                        <div class="divtexttextheader">
                                            Kontakt
                                        </div>
                                         Wysyłaj korespondencję
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </td>
                
                   <td>
                    <div class="divbutton">
                        <div class="divbuttonhelper">
                            <a href="teacher/plan.php"><!--Miejsce na przekierowanie-->
                                <div class="divimg">
                                    <img src="media/calendar2.png"/>
                                </div>
                                <div class="divtext">
                                    <div class="divtexttext">
                                        <div class="divtexttextheader">
                                            Plan zajęć
                                        </div>
                                        Sprawdź plan najbliższych zajęć
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="divbutton">
                        <div class="divbuttonhelper">
                            <a href="teacher/terms.php"><!--Miejsce na przekierowanie-->
                                <div class="divimg">
                                    <img src="media/exam.png"/>
                                </div>
                                <div class="divtext">
                                    <div class="divtexttext">
                                        <div class="divtexttextheader">
                                           Terminy
                                        </div>
                                        Sprawdź terminy najbliższych sprawdzianów
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="divbutton" >
                        <div class="divbuttonhelper">
                            <a href="teacher/add_test.php"><!--Miejsce na przekierowanie-->
                                <div class="divimg">
                                    <img src="media/bar-graph.png"/>
                                </div>
                                <div class="divtext">
                                    <div class="divtexttext" >
                                        <div class="divtexttextheader" >
                                            Dodaj sprawdzian
                                        </div>
                                        Dodaj nowy sprawdzian
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>            
                    <div class="divbutton">
                        <div class="divbuttonhelper">
                            <a href="teacher/grades.php"><!--Miejsce na przekierowanie-->
                                <div class="divimg">
                                    <img src="media/reading-book.png"/>
                                </div>
                                <div class="divtext">
                                    <div class="divtexttext">
                                        <div class="divtexttextheader">
                                            Oceny
                                        </div>
                                        Sprawdź oceny
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="divbutton">
                        <div class="divbuttonhelper">
                            <a href="teacher/add_grades.php"><!--Miejsce na przekierowanie-->
                                <div class="divimg">
                                    <img src="media/calendar2.png"/>
                                </div>
                                <div class="divtext">
                                    <div class="divtexttext">
                                        <div class="divtexttextheader">
                                            Dodaj oceny
                                        </div>
                                        Dodaj oceny
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>            
                    <div class="divbutton">
                        <div class="divbuttonhelper">
                            <a href="teacher/comments.php"><!--Miejsce na przekierowanie-->
                                <div class="divimg">
                                    <img src="media/warning.png"/>
                                </div>
                                <div class="divtext">
                                    <div class="divtexttext">
                                        <div class="divtexttextheader">
                                            Uwagi
                                        </div>
                                        Sprawdź uwagi pozytywne<br>i negatywne
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </td>
               <td>            
                    <div class="divbutton">
                        <div class="divbuttonhelper">
                            <a href="teacher/comments_add.php"><!--Miejsce na przekierowanie-->
                                <div class="divimg">
                                    <img src="media/warning.png"/>
                                </div>
                                <div class="divtext">
                                    <div class="divtexttext">
                                        <div class="divtexttextheader" style="font-size:19px;">
                                            Dodaj uwagę
                                        </div>
                                        Sprawdź uwagi pozytywne<br>i negatywne
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </td>
          </tr>
         
        </table>
        
    </div>
    
                        
                        
                      
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
         
    </div>
    <!-- /#wrapper -->
    
    
   
    
</body>
</html>