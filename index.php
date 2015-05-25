<?php
    require_once($_SERVER['DOCUMENT_ROOT'] .'/pharmacy/project1/php/controller/navbar_controller.php');
    if(!isset($_SESSION)){
        session_start();
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
    
	<title>Adherence Actitvity</title>
	<link rel="icon" href="/pharmacy/project1/img/AA-icon.ico">

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

	<!-- Customized Stylesheet -->
	<link type="text/css" rel="stylesheet" href="stylesheet/css/font.css">
	<link type="text/css" rel="stylesheet" href="stylesheet/css/index.css">
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
                <a class="navbar-brand page-scroll" href="#page-top">Home</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <?php show_navbar(); ?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Adherence Activity</h1>
                <hr>
                <p>The NUS department of pharmacology built a new online system to help the students quickly understand the importance of adherence.</p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Learn More</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h3 class="section-heading">HIV and antiretroviral therapy</h3>
                    <hr class="light">
                    <p class="text-faded">HIV (human immunodeficiency virus) infection is incurable; no treatment can eradicate the virus from the body. It is not a lethal disease by itself, but if untreated, HIV can gradually weaken the immune system until it is no longer functional. At this point, the patient has AIDS (acquired immune deficiency syndrome), and other types of infections can easily occur.</p>
                    <p class="text-faded">HIV antiretroviral drug therapy can suppress HIV and delay the onset of AIDS for many years.</p>
                    <p class="text-faded">Because HIV has a high mutation rate, treating a patient with only one drug can inadvertently select for a mutant drug- resistant strain of HIV . Multi-drug therapies are prescribed so that even if a mutant strain resistant to one drug arises, it will still be suppressed by the other drugs.</p>
                </div>
            </div>
        	</div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h3 class="section-heading">What is adherence? Why is it important?</h3>
                    <hr class="light">
                    <p class="text-faded">Adherence is the measure of how well a patient sticks to a treatment program.</p>
                    <p class="text-faded">In HIV antiretroviral therapy, it is very important to adhere to the treatment program to keep the virus suppressed. If the drug treatment is interrupted for any reason, there is a risk that the number of viruses in the body will rebound and include drug-resistant strains. Therefore, in the long run, poorly adhering to treatment may be worse than not being treated at all.</p>
                </div>
			</div>
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h3 class="section-heading">Activity instructions</h3>
                    <hr class="light">
                    <p class="text-faded">In this activity, you will participate in a simulation of HIV antiretroviral drug therapy. You will experience firsthand how easy or difficult it is to fully adhere to a treatment program.</p>
                    <p class="text-faded">You have been assigned one of three treatment protocols of varying complexity. One aim of the study is to see if students adhere better to simpler treatment protocols.</p>
                    <p class="text-faded">Check the enclosed activity data sheet for your protocol assignment. Instead of actual retroviral drugs, you will use substitutes: tic tac mints. Follow the protocol for 7 days and take the simulated “medicine” at appropriate times.</p>
                    <p class="text-faded">On the activity data sheet, record the time and the date each time you take a dose of “medicine. ” Keep the record honestly and accurately. This is not a contest to see who’s best at adhering to the treatment protocol.</p>
                </div>
            </div>
            <div class="row">
            	<div class="col-lg-12 text-center">
            		<a href="#protocol" id="btn-to-protocol" class="btn btn-default btn-xl page-scroll">Get Started!</a>
            	</div>
            </div>       
        </div>
    </section>

    <section id="protocol">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Choose an HIV and antiretroviral therapy Protocol</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-center">
                    <div class="service-box">
                        <img class="protocol-image wow bounceIn text-primary" src="img/pills-blue-icon.png">
                        <h3>protocol 1</h3>
                        <p class="text-muted">Drug name: Truvada, Reyataz & Norvir</p>
                        <a href="php/view/protocol_1.php" class="btn btn-primary btn-md btn-protocol">View</a>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="service-box">
                        <img class="protocol-image wow bounceIn text-primary" src="img/pills-green-icon.png">
                        <h3>protocol 2</h3>
                        <p class="text-muted">Drug name: Fuzeon, Kaletra & Combivir</p>
                        <a href="php/view/protocol_2.php" class="btn btn-primary btn-md btn-protocol">View</a>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="service-box">
                        <img class="protocol-image wow bounceIn text-primary" src="img/pills-orange-icon.png">
                        <h3>protocol 3</h3>
                        <p class="text-muted">Drug name: Atripla</p>
                        <a href="php/view/protocol_3.php" class="btn btn-primary btn-md btn-protocol">View</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h3>Download our mobile app on the App store!</h3>
                <a href="#" class="btn btn-default btn-lg btn-download wow tada">Download Now!</a>
            </div>
        </div>
    </aside>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>9864-6408</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:your-email@your-domain.com">fanshicomic@gmail.com</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Plugin JavaScript -->
    <script src="javascript/creative/jquery.easing.min.js"></script>
    <script src="javascript/creative/jquery.fittext.js"></script>
    <script src="javascript/creative/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="javascript/creative/creative.js"></script>

</body>
</html>