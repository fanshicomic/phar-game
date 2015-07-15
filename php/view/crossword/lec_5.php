<?php
    if(!isset($_SESSION)){
        session_start();
        $_SESSION['PATH'] = '/pharmacology/games';
    }
    require_once($_SERVER['DOCUMENT_ROOT'] .$_SESSION['PATH'].'/php/controller/navbar_controller.php');
    require_once($_SERVER['DOCUMENT_ROOT'] .$_SESSION['PATH'].'/php/model/game_manager.php');
    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
         
    } else {
        $_SESSION['redirect'] = $_SESSION['PATH'].'/php/view/crossword/lec_5.php';
        header("Location: /pharmacology/games/php/view/signin.php");
    }
    
?>
<!doctype html>
<html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>lecture 5 crossword game</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<!-- JQuery -->
	<script src="/pharmacology/games/plugin/jQuery/jquery-2.1.3.min.js"></script>
	<!-- // <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->

	<!--Bootstrap-->
    <link type="text/css" rel="stylesheet" href="/pharmacology/games/plugin/Bootstrap/css/bootstrap.min.css">
    <script src="/pharmacology/games/plugin/Bootstrap/js/bootstrap.min.js"></script>
	
	<!-- Font Awesome -->
	<link type="text/css" rel="stylesheet" href="/pharmacology/games/plugin/Font-Awesome/css/font-awesome.min.css">

	<!-- Plugin CSS -->
    <link rel="stylesheet" href="/pharmacology/games/stylesheet/css/animate.min.css" type="text/css">
    <link rel="stylesheet" href="/pharmacology/games/stylesheet/css/creative.css" type="text/css">

    <!-- SweetAlert -->
    <script src="/pharmacology/games/plugin/SweetAlert/sweetalert.min.js"></script> 
    <link rel="stylesheet" type="text/css" href="/pharmacology/games/plugin/SweetAlert/sweetalert.css">

	<!-- Customized Stylesheet -->
	<link type="text/css" rel="stylesheet" href="/pharmacology/games/stylesheet/css/font.css">
	<link type="text/css" rel="stylesheet" href="/pharmacology/games/stylesheet/css/lec_5.css">
	<link type="text/css" rel="stylesheet" href="/pharmacology/games/stylesheet/css/puzzle.css">
	<script src="/pharmacology/games/javascript/crossword/jquery.crossword.js"></script>
	<script src="/pharmacology/games/javascript/crossword/script_5.js"></script>
    <script src="/pharmacology/games/javascript/crossword/event.js"></script>

</head>

<body id="page-top">
	<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="/pharmacology/games/index.php">Home</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <?php show_navbar(); ?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <header>
        <div class="header-content">
            <div class="header-content-inner container">
                <h1>Lecture 5 <span id="time" class="col-xs-offset-2" style="display:none">30 : 00</span></h1>
                <div id="instruction">
                    <p class="text-left">
                        <b style="color:white">Objective</b>: This game is to test your understanding on Tuberculosis and tuberculosis treatments. We will go into detail about some of the specific drugs and/or diseases that you have covered in your lecture. All of the answers can be found in your lecture notes if you take some time to search for them. This is an open book quiz, and the full score is 100 marks.
                    </p> 
                    <p class="text-left"><b style="color:white">Instruction</b>: Type the letters into the boxes corresponding to the hints provided and their numbers. Type one letter at a time otherwise the keystrokes may not be recorded. If there is an intersection where one box is already filled, you may skip typing that letter and continue with the word. The time limit is 30 minutes. Click the Start button to start the game, after 30 minutes your answer will be submitted automatically. Or you can click the Submit button to submit your answer once you have finished. Once you have keyed in a correct answer, the hint will be crossed out automatically.
                    </p>
                    <a href="#" class="btn btn-primary btn-lg btn-start" lec="5">Start Game</a>
                </div>
                <div class="row" id="div-puzzle" style="display:none">
	                <div id="puzzle-wrapper" class= "col-md-6 col-xs-12">

					</div>
					<div id="puzzle-clues" class="col-md-6 col-xs-12">
						<h2>Across</h2>
						<ul id="across" class= "text-left" class="col-md-3 col-xs-12"></ul>
						<h2>Down</h2>
						<ul id="down" class= "text-left" class="col-md-3 col-xs-12"></ul>
                        <a href="#" class="btn btn-primary btn-lg btn-submit" lec="5">Submit</a>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Plugin JavaScript -->
    <script src="/pharmacology/games/javascript/creative/jquery.easing.min.js"></script>
    <script src="/pharmacology/games/javascript/creative/jquery.fittext.js"></script>
    <script src="/pharmacology/games/javascript/creative/wow.min.js"></script>

</body>
</html>	