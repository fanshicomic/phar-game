<?php
	require_once($_SERVER['DOCUMENT_ROOT'] .'/pharmacology/games/php/model/game_manager.php');
	require_once($_SERVER['DOCUMENT_ROOT'] .'/pharmacology/games/php/model/database_manager.php');
	$cmd = '';
	if (isset($_REQUEST['cmd'])) {
		$cmd = secureString($_REQUEST['cmd']);
	}

	if ($cmd == 'submit_answer') {
		$lecture = secureString($_REQUEST['lecture']);
		if ($lecture == "1") {

		} else if ($lecture == "2") {
			$ans = json_decode($_REQUEST['ans'], true);
			$score = calculate_game2_score($ans);
			echo update_game_score($lecture, $score);
		} else if ($lecture == "3") {
			$score = $_REQUEST['score'];
			echo update_game_score($lecture, $score);
		} else if ($lecture == "4") {
			$ans = urldecode($_REQUEST['ans']);
    		$ans = json_decode($ans, true);
    		$score = calculate_game4_score($ans);
			echo update_game_score($lecture, $score);
		} else if ($lecture == "7") {
			$ans = urldecode($_REQUEST['ans']);
    		$ans = json_decode($ans, true);
    		$score = calculate_game7_score($ans);
			echo update_game_score($lecture, $score);
		} else {

		}
	}
?>