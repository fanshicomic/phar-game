<?php
	require_once($_SERVER['DOCUMENT_ROOT'] .'/pharmacology/games/php/model/game_manager.php');
	$cmd = '';
	if (isset($_REQUEST['cmd'])) {
		$cmd = secureString($_REQUEST['cmd']);
	}

	if ($cmd == 'submit_answer') {
		$lecture = secureString($_REQUEST['lecture']);
		if ($lecture == "1") {

		} else if ($lecture == "2") {

			$beta = json_decode($_REQUEST['beta'], true);
			$non_beta = json_decode($_REQUEST['non_beta'], true);
			$score = calculate_game2_score($beta, $non_beta);
			echo $score;
		} else {

		}
	}
?>