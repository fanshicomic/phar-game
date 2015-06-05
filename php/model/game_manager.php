<?php
	require_once($_SERVER['DOCUMENT_ROOT'] .'/pharmacology/games/php/model/database_manager.php');

	function calculate_game2_score($ans) {
		$score = 0;
		if (count($ans) > 12) {
			$score = 0;
		} else {
			$count = 0;
			
			$real_ans = array(array("penicillins","amoxicillin"),
						array("cephalosporins","cefazolin"),
						array("carbapenems","imipenem"),
						array("monobactams","aztreonam"),
						array("penicillins","cloxacillin"),
						array("oxapenams","sulbactam"),
						array("carbapenems","meropenem"),
						array("glycopeptide","vancomycin"),
						array("penicillins","flucloxacillin"),
						array("oxapenams","clavulanic"),
						array("carbapenems","tienem"),
						array("cephalosporin","cefuroxime"));
			foreach ($ans as $element) {
				if (in_array($element, $real_ans)) {
					$count += 1;
					$key = array_search($element, $real_ans);
					unset($real_ans[$key]);
				} else {

				}
			}
			if ($count == 12) {
				$score = 100;
			} else {
				$score = floor(100 * $count / 12);
			}
		}
		return $score;
	}

	function calculate_game4_score($anti, $dna) {
		$score = 0;
		$count = 0;
		$ans_anti = array("sulphonamides", "trimethoprim", "cotrimoxazole");
		$ans_dna = array("fluoroquinolones", "nitrofurantoin");
		foreach ($anti as $element) {
			if (in_array($element, $ans_anti)) {
				$count += 1;
				unset($ans_anti[$element]);
			} else {

			}
		}
		foreach ($dna as $element) {
			if (in_array($element, $ans_dna)) {
				$count += 1;
				unset($ans_dna[$element]);
			} else {

			}
		}
		$score = floor(100 * $count / 5);
		return $score;
	}

	function randomize_game2() {
		$penicillins = '<div class="col-xs-2 text-center"><svg height="62" width="102" id="penicillins"><ellipse class="sub-element" cx="51" cy="31" rx="50" ry="30" style="fill:#ECF0F1;" /><text x="18" y="35" fill="#1ABC9C" font-size="15px">Penicillins</text></svg></div>';
		$oxapenams = '<div class="col-xs-2 text-center"><svg height="62" width="102" id="oxapenams"><ellipse class="sub-element" cx="51" cy="31" rx="50" ry="30" style="fill:#ECF0F1;" /><text x="10" y="35" fill="#1ABC9C" font-size="15px">Oxapenams</text></svg></div>';
		$cephalosporins = '<div class="col-xs-2 text-center"><svg height="62" width="142" id="cephalosporins"><ellipse class="sub-element" cx="71" cy="31" rx="70" ry="30" style="fill:#ECF0F1;" /><text x="18" y="35" fill="#1ABC9C" font-size="15px">Cephalosporins</text></svg></div>';
		$carbapenems = '<div class="col-xs-2 text-center"><svg height="62" width="122" id="carbapenems"><ellipse class="sub-element" cx="61" cy="31" rx="60" ry="30" style="fill:#ECF0F1;" /><text x="15" y="35" fill="#1ABC9C" font-size="15px">Carbapenems</text></svg></div>';
		$monobactams = '<div class="col-xs-2 text-center"><svg height="62" width="122" id="monobactams"><ellipse class="sub-element" cx="61" cy="31" rx="60" ry="30" style="fill:#ECF0F1;" /><text x="13" y="35" fill="#1ABC9C" font-size="15px">Monobactams</text></svg></div>';
		$glycopeptide = '<div class="col-xs-2 text-center"><svg height="62" width="112" id="glycopeptide"><ellipse class="sub-element" cx="55" cy="30" rx="55" ry="30" style="fill:#ECF0F1;" /><text x="13" y="35" fill="#1ABC9C" font-size="15px">Glycopeptide</text></svg></div>';
		$elements = array($penicillins, $oxapenams, $cephalosporins, $carbapenems, $monobactams, $glycopeptide);
		shuffle($elements);
		foreach ($elements as $element) {
			echo $element;
		}
	}

	function randomize_game4() {
		$sulphonamides = '<div class="col-xs-2 text-center"><svg height="62" width="122" id="sulphonamides"><ellipse class="sub-element" cx="61" cy="31" rx="61" ry="31" style="fill:#ECF0F1;" /><text x="10" y="35" fill="#1ABC9C" font-size="15px">Sulphonamides</text></svg></div>';
		$trimethoprim = '<div class="col-xs-2 text-center"><svg height="62" width="116" id="trimethoprim"><ellipse class="sub-element" cx="58" cy="31" rx="58" ry="31" style="fill:#ECF0F1;" /><text x="13" y="35" fill="#1ABC9C" font-size="15px">Trimethoprim</text></svg></div>';
		$cotrimoxazole = '<div class="col-xs-2 text-center"><svg height="62" width="132" id="cotrimoxazole"><ellipse class="sub-element" cx="66" cy="31" rx="66" ry="31" style="fill:#ECF0F1;" /><text x="18" y="35" fill="#1ABC9C" font-size="15px">Cotrimoxazole</text></svg></div>';
		$fluoroquinolones = '<div class="col-xs-2 text-center"><svg height="62" width="136" id="fluoroquinolones"><ellipse class="sub-element" cx="68" cy="31" rx="68" ry="31" style="fill:#ECF0F1;" /><text x="12" y="35" fill="#1ABC9C" font-size="15px">Fluoroquinolones</text></svg></div>';
		$nitrofurantoin = '<div class="col-xs-2 text-center"><svg height="62" width="122" id="nitrofurantoin"><ellipse class="sub-element" cx="61" cy="31" rx="60" ry="30" style="fill:#ECF0F1;" /><text x="15" y="35" fill="#1ABC9C" font-size="15px">Nitrofurantoin</text></svg></div>';
		$elements = array($sulphonamides, $trimethoprim, $cotrimoxazole, $fluoroquinolones, $nitrofurantoin);
		// shuffle($elements);
		foreach ($elements as $element) {
			echo $element;
		}
	}

	function show_game2_answer($ans) {
		$wrong_ans = array();
		$real_ans = array(array("penicillins","amoxicillin"),
						  array("cephalosporins","cefazolin"),
						  array("carbapenems","imipenem"),
						  array("monobactams","aztreonam"),
						  array("penicillins","cloxacillin"),
						  array("oxapenams","sulbactam"),
						  array("carbapenems","meropenem"),
						  array("glycopeptide","vancomycin"),
						  array("penicillins","flucloxacillin"),
						  array("oxapenams","clavulanic"),
						  array("carbapenems","tienem"),
						  array("cephalosporin","cefuroxime"));
		foreach ($ans as $element) {
			if (!in_array($element, $real_ans)) {
				array_push($wrong_ans, $element);
			} else {
					
			}
		}
		echo "<h2 style='color:orange'>Your wrong answers:</h2>";
		echo "<h4 style='color:orange'>Please check your textbook to find out the correct answers</h4>";
		foreach ($wrong_ans as $element) {
			echo "<div class='col-xs-offset-3 col-xs-4 text-left' style='font-size: 18px'>sub group: ".$element[0]. "</div><div class='col-xs-4 text-left' style='font-size: 18px'>Example: ".$element[1]."</div>";
		}
	}
?>