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
        a > img {
            -webkit-filter:invert(100%);
            filter:progid:DXImageTransform.Microsoft.BasicImage(invert='1');
        }
        .container-contact {
            width: 420px;
            height: 590px;
            border: 3px solid black;
            border-radius: 7px;
            border-collapse: collapse;
            background-color: #dddddd;
          float: left;
        }
        .div-header {
            width: 415px;
            height: 140px;
            display: flex;
            justify-content: center;
            align-items: center;
            display: block;
            border-collapse: collapse;
            padding-bottom: 16px;
            border-bottom: 3px solid black;
        }
        .container-header {
            height: 130px;
            width: 420px;
            font-size: 24px;
            font-family: sans-serif;
            font-weight: bold;
            text-align: center;
            justify-content: center;
            align-items: center;
            float: left;
            margin: auto;
            border-collapse: collapse;
        }
        .container-header-header {
            width: 420px;
            font-size: 40px;
            text-align: center;
            margin-top: 20px;
        }
        .container-data {
            width: 420px;
            height: 590px;
            display: block;
            border-collapse: collapse;
        }
        .div-contact-do {
            border-collapse: collapse;
            font-family: sans-serif;
            width: 100%;
            height: 24px;
            font-size: 14px;
            margin-top: 8px;
            padding-bottom: 10px;
            padding-left: 10px;
          align-content: right;
          align-items: right;
          text-align: right;
          padding-right: 12px;
        }
        .div-contact-do input {
            width: 250px;
            height: 24px;
            margin-left: 10px;
            font-size: 20px;
        }
        #message {
            position: absolute;
            margin: 5px;
            width: 404px;
            height: 362px;
            margin-top: 12px;
            text-align: left !important;
            vertical-align: top !important;
            overflow: hidden !important;
            resize: none !important;
            white-space: pre-wrap !important;
            overflow-wrap: break-word !important;
        }
        .button-send{
            padding-top: 16px;
            padding-bottom: 16px;
            width: 220px;
            border: none;
            cursor: pointer;
            transition: background-color 0.2s;
            border: 3px solid black;
            border-radius: 7px;
            color: #fff;
            font-family: sans-serif;
            font-size: 20px;
            margin-top: 420px;
            margin-left: 100px;
            font-weight: bold;
            background-color: #12b32d;
        }
        .button-send:hover {
            background-color: #27d644;
            transition: 0.1s;
            transform: scale(1.12);
        }
        .button-send:active {
            transform: scale(0.98);
        }
      
      .container-answers {
        width: 440px;
        height: 590px;
        max-height: 590px;
        overflow-y: scroll;
        background-color: #dddddd;
        border: 3px solid black;
        position: absolute;
        display: block;
        float: left;
        margin-left: 450px;
        border-radius: 7px;
            border-collapse: collapse;
        padding-bottom: 10px;
      }
      .answer {
        margin-top: 10px;
        margin-left: 10px;
        margin-right: 10px;
        width: 394px;
        height: 100px;
        border: 3px solid black;
        border-collapse: collapse;
        background-color: white;
      }
      .answer-data {
        width: 297px;
        height: 94px;
        border-right: 3px solid black;
        float: left;
      }
      .answer-data-from {
        width: 294px;
        height: 24px;
        border-bottom: 3px solid black;
        float: left;
        font-size: 14px;
        padding-left:2px;
      }
      .answer-data-time {
        width: 294px;
        height: 24px;
        border-bottom: 3px solid black;
        float: left;
        font-size: 14px;
        padding-left:2px;
      }
      .answer-data-topic {
        width: 294px;
        height: 46px;
        float: left;
        font-size: 14px;
        padding-left:2px;
      }
      .answer-buttons {
        width: 91px;
        height: 94px;
        float: left;
      }
      .answer-buttons-middler {
        width: 81px;
        height: 84px;
        margin: 5px;
        float: left;
      }
      .answer-buttons-middler-halfer {
        width: 81px;
        height: 42px;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      wyruznienie {
        font-weight: bold;
      }
      .button-zobacz{
            width: 70px;
        padding:6px;
            border: none;
            cursor: pointer;
            transition: background-color 0.2s;
            border: 3px solid black;
            border-radius: 7px;
            color: #fff;
            font-family: sans-serif;
            font-size: 12px;
            font-weight: bold;
            background-color: #2134cc;
        }
        .button-zobacz:hover {
            background-color: #384efc;
            transition: 0.1s;
            transform: scale(1.12);
        }
        .button-zobacz:active {
            transform: scale(0.98);
        }
      .button-usun{
            width: 70px;
        padding:6px;
            border: none;
            cursor: pointer;
            transition: background-color 0.2s;
            border: 3px solid black;
            border-radius: 7px;
            color: #fff;
            font-family: sans-serif;
            font-size: 12px;
            font-weight: bold;
            background-color: #bf0b0b;
        }
        .button-usun:hover {
            background-color: #ed2424;
            transition: 0.1s;
            transform: scale(1.12);
        }
        .button-usun:active {
            transform: scale(0.98);
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
       
       <li><a href="../index2.php"><img style="max-height:20px; padding-right:10px" src="media/panel.png">PANEL</a></li>
        <li><a href="profile.php"><img style="max-height:20px; padding-right:10px" src="media/user2.png">Profil</a></li>
        <li><a href="terms.php"><img style="max-height:20px; padding-right:10px" src="media/calendar.png">Terminy</a></li>
        <li><a href="grades.php"><img style="max-height:20px; padding-right:10px" src="media/score.png">Oceny</a></li>
        <li><a href="subject.php"><img style="max-height:20px; padding-right:10px" src="media/reading-book.png">Przedmioty</a></li>
        <li><a href="plan.php"><img style="max-height:20px; padding-right:10px" src="media/calendar2.png">Plan zajęć</a></li>
        <li><a href="comments.php"><img style="max-height:20px; padding-right:10px" src="media/warning.png">Uwagi</a></li>
        <li><a href="contact.php"><img style="max-height:20px; padding-right:10px" src="media/mail.png">Kontakt</a></li>


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
       
                        
                        
                        
    <div class="container-contact">
        <div class="div-header">
            <div class="container-header">
                <div class="container-header-header">
                    Kontakt
                </div>
               <?php echo $_SESSION["user"] ?>
            </div>
        </div>
        <div class="container-data">
            <form method="post" action="contact_send.php">
                <div class="div-contact-do">
                    Wyślij wiadomość do: <input type="email" id="" name="email"/>
                </div>
              	<div class="div-contact-do">
                    Temat: <input type="text" id="" name="topic"/>
                </div>
                <textarea id="message" type="text" name="message"></textarea>
                <button class="button-send" type="submit">Wyślij</button>
            </form>
        </div>
    </div>
                        
                        
    					<div class="container-answers" id="container-answer"><!-- cały blok -->
                          <!-- tutaj zaczyna się rekurencyjne przedstawienie -->
                         
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
         
    </div>
    <!-- /#wrapper -->
     <script>
 $(document).ready(function() {
			setInterval(function() {
				$.ajax({
					url: "contact_get.php",
					success: function(result) {
						$("#container-answer").html(result);
					}
				});
			}, 1000); // odświeżaj co sekundę
		});
 
      document.getElementById("volume-button").click();
  </script>
    
   
    
</body>
</html>