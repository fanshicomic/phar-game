// A javascript-enhanced crossword puzzle [c] Jesse Weisbeck, MIT/GPL 
(function($) {
	$(function() {
		// provide crossword entries in an array of objects like the following example
		// Position refers to the numerical order of an entry. Each position can have 
		// two entries: an across entry and a down entry
		var puzzleData = [
			 	{
					clue: "This drug inhibits embCAB operon encoded mycobacterial arabinosyl Transferases.",
					answer: "ethambutol",
					position: 1,
					orientation: "across",
					startx: 3,
					starty: 3
				},
			 	{
					clue: "Pyrazinamide may cause _________ and ____________.",
					answer: "hepatotoxicity",
					position: 2,
					orientation: "across",
					startx: 4,
					starty: 6
				},
				{
					clue: "Pyrazinamide is a _______ drug.",
					answer: "bacteriastatic",
					position: 3,
					orientation: "down",
					startx: 8,
					starty: 3
				},
				{
					clue: "Mutation or deletion of the ______ gene may confer resistance to Isoniazid.",
					answer: "katg",
					position: 4,
					orientation: "down",
					startx: 10,
					starty: 1
				},
				{
					clue: "Hepatitis (occasional) hyperbilirubinaemia and transaminasaemia is sometimes observed after administration of this drug.",
					answer: "rifampin",
					position: 5,
					orientation: "across",
					startx: 8,
					starty: 8
				},
				{
					clue: "Rifampicin and Isoniazid are quite effective in treating a particular type of tuberculosis as they can penetrate this particular structure.",
					answer: "meninges",
					position: 6,
					orientation: "down",
					startx: 12,
					starty: 8
				},
				{
					clue: "________ are where Rifampin are deacetylated.",
					answer: "livers",
					position: 7,
					orientation: "across",
					startx: 7,
					starty: 15
				}
			] 
	
		$('#puzzle-wrapper').crossword(puzzleData);
		
	})
	
})(jQuery)
