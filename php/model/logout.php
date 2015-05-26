<?php
	if(!isset($_SESSION)){
	 	session_start();
	}
	if(session_destroy()) {
		header("Location: /pharmacology/games/index.php"); 
	}
?>