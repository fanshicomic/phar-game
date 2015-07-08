// A javascript-enhanced crossword puzzle [c] Jesse Weisbeck, MIT/GPL 
var score = 0;
(function($) {
	$(function() {
		// provide crossword entries in an array of objects like the following example
		// Position refers to the numerical order of an entry. Each position can have 
		// two entries: an across entry and a down entry
		var puzzleData = [
			 	{
					clue: "This drug inhibits embCAB operon encoded mycobacterial arabinosyl transferases.",
					answer: "ethambutol",
					position: 1,
					orientation: "across",
					startx: 1,
					starty: 3
				},
			 	{
					clue: "Pyrazinamide may cause _________ and hyperuricaemia.",
					answer: "hepatotoxicity",
					position: 2,
					orientation: "across",
					startx: 2,
					starty: 6
				},
				{
					clue: "Pyrazinamide is a _______ drug.",
					answer: "bacteriostatic",
					position: 3,
					orientation: "down",
					startx: 6,
					starty: 3
				},
				{
					clue: "Mutation or deletion of the ______ gene may confer resistance to Isoniazid.",
					answer: "katg",
					position: 4,
					orientation: "down",
					startx: 8,
					starty: 1
				},
				{
					clue: "Hepatitis (occasional) hyperbilirubinaemia and transaminasaemia is sometimes observed after administration of this drug.",
					answer: "rifampin",
					position: 5,
					orientation: "across",
					startx: 6,
					starty: 8
				},
				{
					clue: "Rifampicin and Isoniazid are quite effective in treating a particular type of tuberculosis as they can penetrate this particular structure.",
					answer: "meninges",
					position: 6,
					orientation: "down",
					startx: 10,
					starty: 8
				},
				{
					clue: "Pyrazinamide is converted to active form under ______ conditions.",
					answer: "acidic",
					position: 7,
					orientation: "down",
					startx: 12,
					starty: 1
				},
				{
					clue: "Rifampin binds to the _______ subunit of the bacterial DNA dependent RNA polymerase to inhibit RNA snythesis.",
					answer: "beta",
					position: 8,
					orientation: "across",
					startx: 9,
					starty: 14
				},
				{
					clue: "Isoniazid may induce ______, which reduces the availability of pyridoxal phosphate for the formation of nicotinic acid from tryptophan.",
					answer: "pellagra",
					position: 9,
					orientation: "down",
					startx: 4,
					starty: 6
				},
				{
					clue: "Ethambutol has an absorption rate of about __________ percent.",
					answer: "eighty",
					position: 10,
					orientation: "across",
					startx: 9,
					starty: 11
				}
			] 
	
		$('#puzzle-wrapper').crossword(puzzleData);
		
	})
	
})(jQuery)
