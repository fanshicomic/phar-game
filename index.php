<?php
    if(!isset($_SESSION)){
        session_start();
        $_SESSION['PATH'] = '/pharmacology/games';
    }
    require_once($_SERVER['DOCUMENT_ROOT'] .$_SESSION['PATH'].'/php/controller/navbar_controller.php');
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
	<title>Learning Games</title>
	<link rel="icon" href="/img/AA-icon.ico">

	<!-- JQuery -->
	<script src="plugin/jQuery/jquery-2.1.3.min.js"></script>

	<!--Bootstrap-->
    <link type="text/css" rel="stylesheet" href="plugin/Bootstrap/css/bootstrap.min.css">
    <script src="plugin/Bootstrap/js/bootstrap.min.js"></script>
	
	<!-- Font Awesome -->
	<link type="text/css" rel="stylesheet" href="plugin/Font-Awesome/css/font-awesome.min.css">

	<!-- Plugin CSS -->
    <link rel="stylesheet" href="stylesheet/css/animate.min.css" type="text/css">
    <link rel="stylesheet" href="stylesheet/css/creative.css" type="text/css">

    <!-- SweetAlert -->
    <script src="/pharmacology/games/plugin/SweetAlert/sweetalert.min.js"></script> 
    <link rel="stylesheet" type="text/css" href="/pharmacology/games/plugin/SweetAlert/sweetalert.css">

	<!-- Customized Stylesheet -->
	<link type="text/css" rel="stylesheet" href="/pharmacology/games/stylesheet/css/font.css">
	<link type="text/css" rel="stylesheet" href="/pharmacology/games/stylesheet/css/index.css">
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
                <a class="navbar-brand page-scroll" href="#">Home</a>
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
                <h1>Learning Games</h1>
                    <div class="row game-row">
                        <div class="game-sec col-lg-6 text-center">
                            <img src="img/matching-icon.png" class="game-icon">
                            <h3>Matching game</h3>
                            <a href="/pharmacology/games/php/view/matching_game/lec_2.php"><h4>Inhibitors of Bacterial Cell Wall Synthesis</h4></a>
                            <a href="/pharmacology/games/php/view/matching_game/lec_4.php"><h4> Antifolate and DNA Synthesis Inhibitors 
                                      (Urinary Antiseptics)</h4></a>
                            <a href="/pharmacology/games/php/view/matching_game/lec_7.php"><h4>Anti-HIV Drugs</h4></a>
                        </div>
                        <div class="game-sec col-lg-6 text-center">
                            <img src="img/crossword-icon.png" class="game-icon">
                            <h3>Crossword</h3>
                            <a href="/pharmacology/games/php/view/crossword/lec_1.php"><h4>Anti-HSV Drugs</h4></a>
                            <a href="/pharmacology/games/php/view/crossword/lec_3.php"><h4>Antifungal and Antiprotozoal agents (part 1)</h4></a>
                            <a href="/pharmacology/games/php/view/crossword/lec_5.php"><h4>Anti-Tuberculosis Agents</h4></a>
                            <a href="/pharmacology/games/php/view/crossword/lec_6.php"><h4>Antifungal and Antiprotozoal agents (part 2)</h4></a>
                        </div>
                    </div>
            </div>
        </div>
    </header>

    <!-- Plugin JavaScript -->
    <script src="javascript/creative/jquery.easing.min.js"></script>
    <script src="javascript/creative/jquery.fittext.js"></script>
    <script src="javascript/creative/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="javascript/creative/creative.js"></script>

</body>
</html>