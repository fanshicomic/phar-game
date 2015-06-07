<?php
    if(!isset($_SESSION)){
        session_start();
        $_SESSION['PATH'] = '/pharmacology/games';
    }
    require_once($_SERVER['DOCUMENT_ROOT'] .$_SESSION['PATH'].'/php/controller/navbar_controller.php');
    require_once($_SERVER['DOCUMENT_ROOT'] .$_SESSION['PATH'].'/php/model/game_manager.php');
    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
         
    } else {
        header("Location: /pharmacology/games/php/view/signin.php");
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
	<title>Learning Games Lecture 2</title>
	<link rel="icon" href="/pharmacology/games/img/AA-icon.ico">

	<!-- JQuery -->
	<script src="/pharmacology/games/plugin/jQuery/jquery-2.1.3.min.js"></script>

	<!--Bootstrap-->
    <link type="text/css" rel="stylesheet" href="/pharmacology/games/plugin/Bootstrap/css/bootstrap.min.css">
    <script src="/pharmacology/games/plugin/Bootstrap/js/bootstrap.min.js"></script>
	
	<!-- Font Awesome -->
	<link type="text/css" rel="stylesheet" href="/pharmacology/games/plugin/Font-Awesome/css/font-awesome.min.css">

	<!-- Plugin CSS -->
    <link rel="stylesheet" href="/pharmacology/games/stylesheet/css/animate.min.css" type="text/css">
    <link rel="stylesheet" href="/pharmacology/games/stylesheet/css/creative.css" type="text/css">

    <!-- SweetAlert -->
    <script src="../../../plugin/SweetAlert/sweetalert.min.js"></script> 
    <link rel="stylesheet" type="text/css" href="../../../plugin/SweetAlert/sweetalert.css">

	<!-- Customized Stylesheet -->
	<link type="text/css" rel="stylesheet" href="/pharmacology/games/stylesheet/css/font.css">
	<link type="text/css" rel="stylesheet" href="/pharmacology/games/stylesheet/css/lec_2.css">
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
                <a class="navbar-brand page-scroll" href="../../../index.php">Home</a>
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
                <h1>Lecture 2</h1>
                <p class="text-left"><b style="color:white">Objective</b>: This game is to test your ability to recognize the different groups of drugs belonging to the bacterial cell wall synthesis inhibitors. The fullmark for this game is 100.
                <br><b style="color:white">Aim</b>: Match the subgroups to their corresponding drug examples by clicking the ellipses, a line will be drawn to connect them;
                <br><b style="color:white">Target</b>: You need to complete all <b style="color:yellow">three</b> sections as it is part of your CA grades.</p>
                <div class="game-sec sec-1">
                    <!-- <div class="row text-center">
                        <h3>Section 1</h3>
                    </div> -->
                    <div class="row sub-group">
                        <div class="col-xs-3 text-center">
                            <svg height="82" width="222" id="penicillins" class="sub-element">
                                <ellipse cx="111" cy="41" rx="110" ry="40" style="fill:yellow;" />
                                <text x="111" y="47" text-anchor="middle" fill="#1ABC9C" font-size="23px">Penicillins</text>
                            </svg>
                        </div>
                        <div class="col-xs-3 text-center">
                            <svg height="82" width="222" id="cephalosporins" class="sub-element">
                                <ellipse cx="111" cy="41" rx="110" ry="40" style="fill:yellow;" />
                                <text x="111" y="47" text-anchor="middle" fill="#1ABC9C" font-size="23px">Cephalosporins</text>
                            </svg>
                        </div>
                        <div class="col-xs-3 text-center">
                            <svg height="82" width="222" id="carbapenems" class="sub-element">
                                <ellipse cx="111" cy="41" rx="110" ry="40" style="fill:yellow;" />
                                <text x="111" y="47" text-anchor="middle" fill="#1ABC9C" font-size="23px">Carbapenems</text>
                            </svg>
                        </div>
                        <div class="col-xs-3 text-center">
                            <svg height="82" width="222" id="monobactams" class="sub-element">
                                <ellipse cx="111" cy="41" rx="110" ry="40" style="fill:yellow;" />
                                <text x="111" y="47" text-anchor="middle" fill="#1ABC9C" font-size="23px">Monobactams</text>
                            </svg>
                        </div>
                    </div>
                    <div class="row">
                        <svg id='lines-1' height='80px' class="col-xs-12">
                            
                        </svg>
                        <i class="fa fa-chevron-circle-right fa-3x" sec="1"></i>
                    </div>
                    <div class="row">
                        <div class="col-xs-3 text-center">
                            <svg height="82" width="222" id="aztreonam" class="exp-element">
                                <ellipse cx="111" cy="41" rx="110" ry="40" style="fill:white;" />
                                <text x="111" y="47" text-anchor="middle" fill="#1ABC9C" font-size="23px">Aztreonam</text>
                            </svg>
                        </div>
                        <div class="col-xs-3 text-center">
                            <svg height="82" width="222" id="imipenem" class="exp-element">
                                <ellipse cx="111" cy="41" rx="110" ry="40" style="fill:white;" />
                                <text x="111" y="47" text-anchor="middle" fill="#1ABC9C" font-size="23px">Imipenem</text>
                            </svg>
                        </div>
                        <div class="col-xs-3 text-center">
                            <svg height="82" width="222" id="amoxicillin" class="exp-element">
                                <ellipse cx="111" cy="41" rx="110" ry="40" style="fill:white;" />
                                <text x="111" y="47" text-anchor="middle" fill="#1ABC9C" font-size="23px">Amoxicillin</text>
                            </svg>
                        </div>
                        <div class="col-xs-3 text-center">
                            <svg height="82" width="222" id="cefazolin" class="exp-element">
                                <ellipse cx="111" cy="41" rx="110" ry="40" style="fill:white;" />
                                <text x="111" y="47" text-anchor="middle" fill="#1ABC9C" font-size="23px">Cefazolin</text>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="game-sec sec-2" style="display:none">
                    <div class="row sub-group">
                        <div class="col-xs-3 text-center">
                            <svg height="82" width="222" id="penicillins" class="sub-element">
                                <ellipse cx="111" cy="41" rx="110" ry="40" style="fill:yellow;" />
                                <text x="111" y="47" text-anchor="middle" fill="#1ABC9C" font-size="23px">Penicillins</text>
                            </svg>
                        </div>
                        <div class="col-xs-3 text-center">
                            <svg height="82" width="222" id="oxapenams" class="sub-element">
                                <ellipse cx="111" cy="41" rx="110" ry="40" style="fill:yellow;" />
                                <text x="111" y="47" text-anchor="middle" fill="#1ABC9C" font-size="23px">Oxapenams</text>
                            </svg>
                        </div>
                        <div class="col-xs-3 text-center">
                            <svg height="82" width="222" id="carbapenems" class="sub-element">
                                <ellipse cx="111" cy="41" rx="110" ry="40" style="fill:yellow;" />
                                <text x="111" y="47" text-anchor="middle" fill="#1ABC9C" font-size="23px">Carbapenems</text>
                            </svg>
                        </div>
                        <div class="col-xs-3 text-center">
                            <svg height="82" width="222" id="glycopeptide" class="sub-element">
                                <ellipse cx="111" cy="41" rx="110" ry="40" style="fill:yellow;" />
                                <text x="111" y="47" text-anchor="middle" fill="#1ABC9C" font-size="23px">Glycopeptide</text>
                            </svg>
                        </div>
                    </div>
                    <div class="row">
                        <i class="fa fa-chevron-circle-left fa-3x" sec="2"></i>
                        <svg id='lines-2' height='80px' class="col-xs-12">
                            
                        </svg>
                        <i class="fa fa-chevron-circle-right fa-3x" sec="2"></i>
                    </div>
                    <div class="row">
                        <div class="col-xs-3 text-center">
                            <svg height="82" width="222" id="meropenem" class="exp-element">
                                <ellipse cx="111" cy="41" rx="110" ry="40" style="fill:white;" />
                                <text x="111" y="47" text-anchor="middle" fill="#1ABC9C" font-size="23px">Meropenem</text>
                            </svg>
                        </div>
                        <div class="col-xs-3 text-center">
                            <svg height="82" width="222" id="sulbactam" class="exp-element">
                                <ellipse cx="111" cy="41" rx="110" ry="40" style="fill:white;" />
                                <text x="111" y="47" text-anchor="middle" fill="#1ABC9C" font-size="23px">Sulbactam</text>
                            </svg>
                        </div>
                        <div class="col-xs-3 text-center">
                            <svg height="82" width="222" id="cloxacillin" class="exp-element">
                                <ellipse cx="111" cy="41" rx="110" ry="40" style="fill:white;" />
                                <text x="111" y="47" text-anchor="middle" fill="#1ABC9C" font-size="23px">Cloxacillin</text>
                            </svg>
                        </div>
                        <div class="col-xs-3 text-center">
                            <svg height="82" width="222" id="vancomycin" class="exp-element">
                                <ellipse cx="111" cy="41" rx="110" ry="40" style="fill:white;" />
                                <text x="111" y="47" text-anchor="middle" fill="#1ABC9C" font-size="23px">Vancomycin</text>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="game-sec sec-3" style="display:none">
                    <div class="row sub-group">
                        <div class="col-xs-3 text-center">
                            <svg height="82" width="222" id="penicillins" class="sub-element">
                                <ellipse cx="111" cy="41" rx="110" ry="40" style="fill:yellow;" />
                                <text x="111" y="47" text-anchor="middle" fill="#1ABC9C" font-size="23px">Penicillins</text>
                            </svg>
                        </div>
                        <div class="col-xs-3 text-center">
                            <svg height="82" width="222" id="oxapenams" class="sub-element">
                                <ellipse cx="111" cy="41" rx="110" ry="40" style="fill:yellow;" />
                                <text x="111" y="47" text-anchor="middle" fill="#1ABC9C" font-size="23px">Oxapenams</text>
                            </svg>
                        </div>
                        <div class="col-xs-3 text-center">
                            <svg height="82" width="222" id="carbapenems" class="sub-element">
                                <ellipse cx="111" cy="41" rx="110" ry="40" style="fill:yellow;" />
                                <text x="111" y="47" text-anchor="middle" fill="#1ABC9C" font-size="23px">Carbapenems</text>
                            </svg>
                        </div>
                        <div class="col-xs-3 text-center">
                            <svg height="82" width="222" id="cephalosporin" class="sub-element">
                                <ellipse cx="111" cy="41" rx="110" ry="40" style="fill:yellow;" />
                                <text x="111" y="47" text-anchor="middle" fill="#1ABC9C" font-size="23px">Cephalosporin</text>
                            </svg>
                        </div>
                    </div>
                    <div class="row">
                        <i class="fa fa-chevron-circle-left fa-3x" sec="3"></i>
                        <svg id='lines-3' height='80px' class="col-xs-12">
                            
                        </svg>
                    </div>
                    <div class="row">
                        <div class="col-xs-3 text-center">
                            <svg height="82" width="222" id="flucloxacillin" class="exp-element">
                                <ellipse cx="111" cy="41" rx="110" ry="40" style="fill:white;" />
                                <text x="111" y="47" text-anchor="middle" fill="#1ABC9C" font-size="23px">Flucloxacillin</text>
                            </svg>
                        </div>
                        <div class="col-xs-3 text-center">
                            <svg height="82" width="222" id="tienem" class="exp-element">
                                <ellipse cx="111" cy="41" rx="110" ry="40" style="fill:white;" />
                                <text x="111" y="47" text-anchor="middle" fill="#1ABC9C" font-size="23px">Tienem</text>
                            </svg>
                        </div>
                        <div class="col-xs-3 text-center">
                            <svg height="82" width="222" id="cefuroxime" class="exp-element">
                                <ellipse cx="111" cy="41" rx="110" ry="40" style="fill:white;" />
                                <text x="111" y="47" text-anchor="middle" fill="#1ABC9C" font-size="23px">Cefuroxime</text>
                            </svg>
                        </div>
                        <div class="col-xs-3 text-center">
                            <svg height="82" width="222" id="clavulanic" class="exp-element">
                                <ellipse cx="111" cy="41" rx="110" ry="40" style="fill:white;" />
                                <text x="111" y="47" text-anchor="middle" fill="#1ABC9C" font-size="23px">Clavulanic acid</text>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="row btn-row">
                    <a href="#" class="col-xs-offset-3 col-xs-2 btn btn-default btn-lg btn-reset">Reset</a>
                    <a href="#" class="col-xs-offset-2 col-xs-2 btn btn-primary btn-lg btn-submit" lec="2">Submit</a>
                </div>   
            </div>
        </div>
    </header>

    <!-- Plugin JavaScript -->
    <script src="/pharmacology/games/javascript/creative/jquery.easing.min.js"></script>
    <script src="/pharmacology/games/javascript/creative/jquery.fittext.js"></script>
    <script src="/pharmacology/games/javascript/creative/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/pharmacology/games/javascript/creative/creative.js"></script>
    <script src="/pharmacology/games/javascript/matching/matching.js"></script>
    <script src="/pharmacology/games/javascript/matching/canvas.js"></script>
</body>
</html>