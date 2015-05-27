<?php
	if(!isset($_SESSION)){
        session_start();
        $_SESSION['PATH'] = '/pharmacology/games';
    }
    require_once($_SERVER['DOCUMENT_ROOT'] .$_SESSION['PATH'].'/php/controller/navbar_controller.php');
    require_once($_SERVER['DOCUMENT_ROOT'] .'/pharmacology/games/php/model/game_manager.php');
    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
         
    } else {
        header("Location: /pharmacology/games/php/view/signin.php");
    }

	$beta = json_decode($_REQUEST['beta'], true);
	$non_beta = json_decode($_REQUEST['non_beta'], true);
	$score = calculate_game2_score($beta, $non_beta);
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
    <script src="/pharmacology/games/plugin/SweetAlert/sweetalert.min.js"></script> 
    <link rel="stylesheet" type="text/css" href="/pharmacology/games/plugin/SweetAlert/sweetalert.css">

	<!-- Customized Stylesheet -->
	<link type="text/css" rel="stylesheet" href="/pharmacology/games/stylesheet/css/font.css">
	<link type="text/css" rel="stylesheet" href="/pharmacology/games/stylesheet/css/lec_2_answer.css">
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
            	<div class="score-row col-lg-6 col-lg-offset-3">
	                <img src="/pharmacology/games/img/score-logo.png" height="80px">
	                <label class="score">: <?php echo $score; ?></label>
	            </div>
                <div class="game-sec">
                    <div class="row">
                        <div class="col-lg-offset-1 col-lg-5 text-center">
                            <svg height="82" width="202" id="beta-lactam">
                                <ellipse class="main-element" cx="101" cy="41" rx="100" ry="40" style="fill:yellow;" />
                                <text x="35" y="47" fill="#1ABC9C" font-size="23px">Beta-lactam</text>
                            </svg>
                        </div>
                        <div class="col-lg-5 text-center">
                            <svg height="82" width="222" id="non-beta-lactam">
                                <ellipse class="main-element" cx="111" cy="41" rx="110" ry="40" style="fill:yellow;" />
                                <text x="25" y="47" fill="#1ABC9C" font-size="23px">Non Beta-lactam</text>
                            </svg>
                        </div>
                    </div>
                    <div class="row">
                        <svg id="lines" height="80px" class="col-lg-12">
                            <line id="myLine-penicillins" x1="259" y1="5" x2="59.5" y2="71.5" stroke-width="2" stroke="red"></line>
                            <line id="myLine-oxapenams" x1="259" y1="5" x2="219" y2="71.5" stroke-width="2" stroke="red"></line>
                            <line id="myLine-cephalosporins" x1="259" y1="5" x2="387" y2="71.5" stroke-width="2" stroke="red"></line>
                            <line id="myLine-carbapenems" x1="259" y1="5" x2="539" y2="71.5" stroke-width="2" stroke="red"></line>
                            <line id="myLine-monobactams" x1="259" y1="5" x2="698.5" y2="71.5" stroke-width="2" stroke="red"></line>
                            <line id="myLine-glycopeptide" x1="651" y1="5" x2="849.5" y2="71.5" stroke-width="2" stroke="red"></line>
                        </svg>
                    </div>
                    <div class="row sub-group">
                        <div class="col-lg-2 text-center">
                            <svg height="62" width="102" id="penicillins">
                                <ellipse class="sub-element" cx="51" cy="31" rx="50" ry="30" style="fill:#ECF0F1;" />
                                <text x="18" y="35" fill="#1ABC9C" font-size="15px">Penicillins</text>
                            </svg>
                            <ul class="text-left">
                                <li>Penicillin V, G</li>
                                <li>Cloxacillin</li>
                                <li>Flucloxacillin</li>
                                <li>Amoxicillin</li>
                                <li>Ampicillin</li>
                            </ul>
                        </div>
                        <div class="col-lg-2 text-center">
                            <svg height="62" width="102" id="oxapenams">
                                <ellipse class="sub-element" cx="51" cy="31" rx="50" ry="30" style="fill:#ECF0F1;" />
                                <text x="10" y="35" fill="#1ABC9C" font-size="15px">Oxapenams</text>
                            </svg>
                            <ul class="text-left">
                                <li>Clavulanic acid</li>
                                <li>Sulbactam</li>
                                <li>Tazobactam</li>
                            </ul>
                        </div>
                        <div class="col-lg-2 text-center">
                            <svg height="62" width="142" id="cephalosporins">
                                <ellipse class="sub-element" cx="71" cy="31" rx="70" ry="30" style="fill:#ECF0F1;" />
                                <text x="18" y="35" fill="#1ABC9C" font-size="15px">Cephalosporins</text>
                            </svg>
                            <ul class="text-left">
                                <li>Cefazolin</li>
                                <li>Cephalexin</li>
                                <li>Cefuroxime axetil</li>
                                <li>Cefaclor</li>
                                <li>Cefotaxime</li>
                                <li>Ceftazidime</li>
                                <li>...</li>
                            </ul>
                        </div>
                        <div class="col-lg-2 text-center">
                            <svg height="62" width="122" id="carbapenems">
                                <ellipse class="sub-element" cx="61" cy="31" rx="60" ry="30" style="fill:#ECF0F1;" />
                                <text x="15" y="35" fill="#1ABC9C" font-size="15px">Carbapenems</text>
                            </svg>
                            <ul class="text-left">
                                <li>Imipenem Meropenem</li>
                                <li>Tienam® [Imipenem + Cilastatin (inhibitor of renal dehydropeptidase)]</li>
                            </ul>
                        </div>
                        <div class="col-lg-2 text-center">
                            <svg height="62" width="122" id="monobactams">
                                <ellipse class="sub-element" cx="61" cy="31" rx="60" ry="30" style="fill:#ECF0F1;" />
                                <text x="13" y="35" fill="#1ABC9C" font-size="15px">Monobactams</text>
                            </svg>
                            <ul class="text-left">
                                <li>Aztreonam</li>
                            </ul>
                        </div>
                        <div class="col-lg-2 text-center">
                            <svg height="62" width="112" id="glycopeptide">
                                <ellipse class="sub-element" cx="55" cy="30" rx="55" ry="30" style="fill:#ECF0F1;" />
                                <text x="13" y="35" fill="#1ABC9C" font-size="15px">Glycopeptide</text>
                            </svg>
                            <ul class="text-left">
                                <li>Vancomycin</li>
                            </ul>
                        </div>
                    </div>
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
</body>
</html>