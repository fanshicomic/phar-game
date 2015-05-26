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
                <h1>Lecture 2</h1>
                <p>This matching game is for the topic <i>bacteria cell wall synthesis inhibitors (main group).</i> There are several main groups (on the top) and several sub groups (on the bottom). Base on you understanding, matching each sub group to its corresponding main group by clicking the two of them, and a line will be drawn to connect them. Clicking the submit buttom to submit your answer.</p>
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
                        <svg id='lines' height='50px' class="col-lg-12">
                            
                        </svg>
                    </div>
                    <div class="row sub-group">
                        <div class="col-lg-2 text-center">
                            <svg height="62" width="102" id="penicillins">
                                <ellipse class="sub-element" cx="51" cy="31" rx="50" ry="30" style="fill:#ECF0F1;" />
                                <text x="18" y="35" fill="#1ABC9C" font-size="15px">Penicillins</text>
                            </svg>
                        </div>
                        <div class="col-lg-2 text-center">
                            <svg height="62" width="102" id="oxapenams">
                                <ellipse class="sub-element" cx="51" cy="31" rx="50" ry="30" style="fill:#ECF0F1;" />
                                <text x="10" y="35" fill="#1ABC9C" font-size="15px">Oxapenams</text>
                            </svg>
                        </div>
                        <div class="col-lg-2 text-center">
                            <svg height="62" width="142" id="cephalosporins">
                                <ellipse class="sub-element" cx="71" cy="31" rx="70" ry="30" style="fill:#ECF0F1;" />
                                <text x="18" y="35" fill="#1ABC9C" font-size="15px">Cephalosporins</text>
                            </svg>
                        </div>
                        <div class="col-lg-2 text-center">
                            <svg height="62" width="122" id="carbapenems">
                                <ellipse class="sub-element" cx="61" cy="31" rx="60" ry="30" style="fill:#ECF0F1;" />
                                <text x="15" y="35" fill="#1ABC9C" font-size="15px">Carbapenems</text>
                            </svg>
                        </div>
                        <div class="col-lg-2 text-center">
                            <svg height="62" width="122" id="monobactams">
                                <ellipse class="sub-element" cx="61" cy="31" rx="60" ry="30" style="fill:#ECF0F1;" />
                                <text x="13" y="35" fill="#1ABC9C" font-size="15px">Monobactams</text>
                            </svg>
                        </div>
                        <div class="col-lg-2 text-center">
                            <svg height="62" width="112" id="glycopeptide">
                                <ellipse class="sub-element" cx="55" cy="30" rx="55" ry="30" style="fill:#ECF0F1;" />
                                <text x="13" y="35" fill="#1ABC9C" font-size="15px">Glycopeptide</text>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <a href="#" class="col-lg-offset-3 col-lg-2 btn btn-default btn-lg btn-submit">Reset</a>
                    <a href="#" class="col-lg-offset-2 col-lg-2 btn btn-primary btn-lg btn-submit">Submit</a>
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