<?php
	require_once($_SERVER['DOCUMENT_ROOT'] .'/pharmacology/games/php/model/database_manager.php');

	function calculate_game2_score($beta, $non_beta) {
		$score = 0;
		$count = 0;
		$ans_beta = ["penicillins", "oxapenams", "cephalosporins", "carbapenems", "monobactams"];
		$ans_non_beta = ["glycopeptide"];
		foreach ($beta as $element) {
			if (in_array($element, $ans_beta)) {
				$count += 1;
				unset($ans_beta[$element]);
			} else {

			}
		}
		foreach ($non_beta as $element) {
			if (in_array($element, $ans_non_beta)) {
				$count += 1;
				unset($ans_non_beta[$element]);
			} else {

			}
		}
		if ($count == 6) {
			$score = 100;
		} else {
			$score = floor(100 * $count / 6);
		}
		return $score;
	}
?>