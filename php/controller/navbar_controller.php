<?php
if(!isset($_SESSION)){
 session_start();
}

function show_navbar() {
    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
        $uid = $_SESSION['uid'];
        echo '<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">';
        echo '<ul class="nav navbar-nav navbar-right">';
        echo '<li><a class="page-scroll" href="#">' . $uid . '</a></li>';
        echo '<li><a class="page-scroll" href="/pharmacology/games/php/model/logout.php">Log out</a></li>';
        echo '</ul></div>';
	} else {
		echo '<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">';
        echo '<ul class="nav navbar-nav navbar-right">';
        echo '<li><a class="page-scroll" href="/pharmacology/games/php/view/signup.php">Sign Up</a></li>';
        echo '<li><a class="page-scroll" href="/pharmacology/games/php/view/signin.php">Sign In</a></li>';
        echo '</ul></div>';
	}
}

?>