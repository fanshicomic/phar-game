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

	// 
    $ans = urldecode($_REQUEST['ans']);
    $ans = json_decode($ans, true);
    $score = calculate_game4_score($ans);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
	<title>Learning Games Lecture 4</title>
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
                <div class="game-sec row col-lg-12 text-center">
                    <?php show_game4_answer($ans); ?>
                    <!-- <div class="row">
                        <div class="col-xs-offset-1 col-xs-5 text-center">
                            <svg height="82" width="232" id="antifolate-agents">
                                <ellipse class="main-element" cx="116" cy="41" rx="116" ry="41" style="fill:yellow;" />
                                <text x="32" y="47" fill="#1ABC9C" font-size="23px">Antifolate agents</text>
                            </svg>
                        </div>
                        <div class="col-xs-5 text-center">
                            <svg height="82" width="282" id="dna-synthesis-inhibitor">
                                <ellipse class="main-element" cx="141" cy="41" rx="141" ry="41" style="fill:yellow;" />
                                <text x="25" y="47" fill="#1ABC9C" font-size="23px">DNA synthesis inhibitor</text>
                            </svg>
                        </div>
                    </div><div class="row">
                        <svg id="lines" height="80px" class="col-lg-12">
                            <line id="myLine-sulphonamides" x1="259" y1="5" x2="139" y2="71.5" stroke-width="2" stroke="red"></line>
                            <line id="myLine-trimethoprim" x1="259" y1="5" x2="299" y2="71.5" stroke-width="2" stroke="red"></line>
                            <line id="myLine-cotrimoxazole" x1="259" y1="5" x2="462" y2="71.5" stroke-width="2" stroke="red"></line>
                            <line id="myLine-fluoroquinolones" x1="651" y1="5" x2="616" y2="71.5" stroke-width="2" stroke="red"></line>
                            <line id="myLine-nitrofurantoin" x1="651" y1="5" x2="771" y2="71.5" stroke-width="2" stroke="red"></line>
                        </svg>
                    </div>
                    <div class="row sub-group">
                        <div class="col-xs-1"></div>
                        <div class="col-xs-2 text-center">
                            <svg height="62" width="122" id="sulphonamides">
                                <ellipse class="sub-element" cx="61" cy="31" rx="61" ry="31" style="fill:#ECF0F1;" />
                                <text x="10" y="35" fill="#1ABC9C" font-size="15px">Sulphonamides</text>
                            </svg>
                            <ul class="text-left">
                                <li>Sulphamethoxazole (SMZ)</li>
                                <li>Sulphadiazine</li>
                            </ul>
                        </div>
                        <div class="col-lg-2 text-center">
                            <svg height="62" width="116" id="trimethoprim">
                                <ellipse class="sub-element" cx="58" cy="31" rx="58" ry="31" style="fill:#ECF0F1;" />
                                <text x="13" y="35" fill="#1ABC9C" font-size="15px">Trimethoprim</text>
                            </svg>
                            <ul class="text-left">
                                <li>Trimethoprim (TMP)</li>
                            </ul>
                        </div>
                        <div class="col-lg-2 text-center">
                            <svg height="62" width="132" id="cotrimoxazole">
                                <ellipse class="sub-element" cx="66" cy="31" rx="66" ry="31" style="fill:#ECF0F1;" />
                                <text x="18" y="35" fill="#1ABC9C" font-size="15px">Cotrimoxazole</text>
                            </svg>
                            <ul class="text-left">
                                <li>Sulphamethoxazole + Trimethoprim (SMZ + TMP)</li>
                                <li>Septrin®; Bactrim®</li>
                            </ul>
                        </div>
                        <div class="col-lg-2 text-center">
                            <svg height="62" width="136" id="fluoroquinolones">
                                <ellipse class="sub-element" cx="68" cy="31" rx="68" ry="31" style="fill:#ECF0F1;" />
                                <text x="12" y="35" fill="#1ABC9C" font-size="15px">Fluoroquinolones</text>
                            </svg>
                            <ul class="text-left">
                                <li>Ciprofloxacin</li>
                                <li>Ofloxacin</li>
                                <li>Levofloxacin</li>
                                <li>Gatifloxacin</li>
                            </ul>
                        </div>
                        <div class="col-lg-2 text-center">
                           <svg height="62" width="122" id="nitrofurantoin">
                            <ellipse class="sub-element" cx="61" cy="31" rx="60" ry="30" style="fill:#ECF0F1;" />
                            <text x="15" y="35" fill="#1ABC9C" font-size="15px">Nitrofurantoin</text>
                           </svg>
                            <ul class="text-left">
                                <li>Furadantin®</li>
                            </ul>
                        </div>
                    </div> -->
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