// A javascript-enhanced crossword puzzle [c] Jesse Weisbeck, MIT/GPL 
var score = 0;
(function($) {
	$(function() {
		// provide crossword entries in an array of objects like the following example
		// Position refers to the numerical order of an entry. Each position can have 
		// two entries: an across entry and a down entry
		var puzzleData = [
			 	{
					clue: "Itraconazole may sometimes cause __________.",
					answer: "headache",
					position: 1,
					orientation: "across",
					startx: 5,
					starty: 1
				},
			 	{
					clue: "Polyenes have strong affinity for _________.",
					answer: "ergosterol",
					position: 2,
					orientation: "down",
					startx: 6,
					starty: 1
				},
				{
					clue: "Medicine that are applied on the skin and/or mucous membrane are ____________.",
					answer: "topical",
					position: 3,
					orientation: "across",
					startx: 5,
					starty: 4
				},
				{
					clue: "An example of a Polyene is ____________ B.",
					answer: "amphotericin",
					position: 4,
					orientation: "across",
					startx: 1,
					starty: 6
				},
				{
					clue: "Echinocandins should be avoided when the patient is _________.",
					answer: "pregnant",
					position: 5,
					orientation: "across",
					startx: 5,
					starty: 8
				},
				{
					clue: "One example of a Pyrimidine analogue is __________.",
					answer: "flucytosine",
					position: 6,
					orientation: "across",
					startx: 5,
					starty: 10
				},
				{
					clue: "Ingesting E. histolytica cysts from contaminated food or water can lead to ________.",
					answer: "amebiasis",
					position: 7,
					orientation: "down",
					startx: 1,
					starty: 1
				},
				{
					clue: "Cell wall synthesis is affected by ____________.",
					answer: "caspofungin",
					position: 8,
					orientation: "down",
					startx: 3,
					starty: 3
				},
				{
					clue: "This subgroup of antifungal agent Inhibit ergosterol synthesis, by inhibiting α-demethylase, which demethylates lanosterol to ergosterol.",
					answer: "azoles",
					position: 9,
					orientation: "down",
					startx: 15,
					starty: 6
				},
				{
					clue: "Fungal Growths may cause ______ Itch.",
					answer: "jock",
					position: 10,
					orientation: "across",
					startx: 14,
					starty: 8
				}
			] 
	
		$('#puzzle-wrapper').crossword(puzzleData);
		
	})
	
})(jQuery)
