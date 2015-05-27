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

	function randomize_game2() {
		$penicillins = '<div class="col-lg-2 text-center"><svg height="62" width="102" id="penicillins"><ellipse class="sub-element" cx="51" cy="31" rx="50" ry="30" style="fill:#ECF0F1;" /><text x="18" y="35" fill="#1ABC9C" font-size="15px">Penicillins</text></svg></div>';
		$oxapenams = '<div class="col-lg-2 text-center"><svg height="62" width="102" id="oxapenams"><ellipse class="sub-element" cx="51" cy="31" rx="50" ry="30" style="fill:#ECF0F1;" /><text x="10" y="35" fill="#1ABC9C" font-size="15px">Oxapenams</text></svg></div>';
		$cephalosporins = '<div class="col-lg-2 text-center"><svg height="62" width="142" id="cephalosporins"><ellipse class="sub-element" cx="71" cy="31" rx="70" ry="30" style="fill:#ECF0F1;" /><text x="18" y="35" fill="#1ABC9C" font-size="15px">Cephalosporins</text></svg></div>';
		$carbapenems = '<div class="col-lg-2 text-center"><svg height="62" width="122" id="carbapenems"><ellipse class="sub-element" cx="61" cy="31" rx="60" ry="30" style="fill:#ECF0F1;" /><text x="15" y="35" fill="#1ABC9C" font-size="15px">Carbapenems</text></svg></div>';
		$monobactams = '<div class="col-lg-2 text-center"><svg height="62" width="122" id="monobactams"><ellipse class="sub-element" cx="61" cy="31" rx="60" ry="30" style="fill:#ECF0F1;" /><text x="13" y="35" fill="#1ABC9C" font-size="15px">Monobactams</text></svg></div>';
		$glycopeptide = '<div class="col-lg-2 text-center"><svg height="62" width="112" id="glycopeptide"><ellipse class="sub-element" cx="55" cy="30" rx="55" ry="30" style="fill:#ECF0F1;" /><text x="13" y="35" fill="#1ABC9C" font-size="15px">Glycopeptide</text></svg></div>';
		$elements = [$penicillins, $oxapenams, $cephalosporins, $carbapenems, $monobactams, $glycopeptide];
		shuffle($elements);
		foreach ($elements as $element) {
			echo $element;
		}
	}
?>