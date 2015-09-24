// A javascript-enhanced crossword puzzle [c] Jesse Weisbeck, MIT/GPL 
var score = 0;
(function($) {
	$(function() {
		// provide crossword entries in an array of objects like the following example
		// Position refers to the numerical order of an entry. Each position can have 
		// two entries: an across entry and a down entry
		var puzzleData = [
			 	{
					clue: "One symptom of systemic fungal infection is _____.",
					answer: "constipation",
					position: 1,
					orientation: "down",
					startx: 1,
					starty: 1
				},
			 	{
					clue: "_____ can inhibit CYP450 activity and sometimes cause headaches.",
					answer: "itraconazole",
					position: 2,
					orientation: "across",
					startx: 1,
					starty: 6
				},
				{
					clue: "_____ is one of the drugs that target Ergosterol Synthesis.",
					answer: "voriconazole",
					position: 3,
					orientation: "down",
					startx: 3,
					starty: 4
				},
				{
					clue: "_____ can be administered if the specific type of fungus cannot be identified as this drug has the broadest antifungal spectrum.",
					answer: "amphotericinb",
					position: 4,
					orientation: "across",
					startx: 4,
					starty: 2
				},
				{
					clue: "Oral and Vaginal infections are classified as _____ (hint: type of surface).",
					answer: "mucocutaneous",
					position: 5,
					orientation: "down",
					startx: 5,
					starty: 2
				},
				{
					clue: "Flucytosine is usually administered _____.",
					answer: "orally",
					position: 6,
					orientation: "across",
					startx: 3,
					starty: 9
				},
				{
					clue: "_____ is a kind of fungal infection that usually affects the feet.",
					answer: "atheletesfoot",
					position: 7,
					orientation: "down",
					startx: 11,
					starty: 3
				},
				{
					clue: "In pregnant women, _____ should be avoided if possible as it may kill the foetus.",
					answer: "chinocandins",
					position: 8,
					orientation: "across",
					startx: 11,
					starty: 9
				},
				{
					clue: "Flucytosine resistance usually increases if both _____ alleles in the diploid fungus are mutated.",
					answer: "furi",
					position: 9,
					orientation: "across",
					startx: 11,
					starty: 11
				},
				{
					clue: "Usage of polyenes like Amphotericin B may lead to _____ in some patients.",
					answer: "thrombophlebitis",
					position: 10,
					orientation: "across",
					startx: 8,
					starty: 13
				}
			] 
	
		$('#puzzle-wrapper').crossword(puzzleData);
		
	})
	
})(jQuery)
