// A javascript-enhanced crossword puzzle [c] Jesse Weisbeck, MIT/GPL 
var score = 0;
(function($) {
	$(function() {
		// provide crossword entries in an array of objects like the following example
		// Position refers to the numerical order of an entry. Each position can have 
		// two entries: an across entry and a down entry
		var puzzleData = [
			 	{
					clue: "Acyclovir is usually used on patients who are on immunosuppressant and undergoing transplant or __________ therapy to prevent a relapse of Herpes.",
					answer: "radiation",
					position: 1,
					orientation: "across",
					startx: 1,
					starty: 1
				},
			 	{
					clue: "The drug __________ can sometime produce problems in the Gastro-Intestinal Tract when used to treat HSV.",
					answer: "acyclovir",
					position: 2,
					orientation: "down",
					startx: 2,
					starty: 1
				},
				{
					clue: "VZV stands for _____________ virus.",
					answer: "varicellazoster",
					position: 3,
					orientation: "across",
					startx: 2,
					starty: 7
				},
				{
					clue: "After usage, Ganciclovir is usually excreted via __________.",
					answer: "urine",
					position: 4,
					orientation: "down",
					startx: 4,
					starty: 6
				},
				{
					clue: "____________ is rapidly converted to acyclovir after oral absorption.",
					answer: "valacyclovir",
					position: 5,
					orientation: "down",
					startx: 8,
					starty: 5
				},
				{
					clue: "Herpes Simplex Virus is a _______ virus.",
					answer: "dna",
					position: 6,
					orientation: "down",
					startx: 10,
					starty: 5
				},
				{
					clue: "HSV attachment and entry can be blocked by _____________.",
					answer: "docosanol",
					position: 7,
					orientation: "down",
					startx: 12,
					starty: 6
				},
				{
					clue: "At high dosage, __________ can cause irreversible aspermatogenesis in men. It can also enhance the adverse/toxic effect of Imipenem and increase risk of seizures.",
					answer: "ganciclovir",
					position: 8,
					orientation: "across",
					startx: 11,
					starty: 11
				},
				{
					clue: "Acyclovir is __________ into Acyclovir Monophosphate by Herpes thymidine kinase.",
					answer: "phosphorylated",
					position: 9,
					orientation: "across",
					startx: 6,
					starty: 13
				},
				{
					clue: "Those infected with Herpes Simplex Virus usually experience __________ on the skin of infected areas.",
					answer: "lesions",
					position: 10,
					orientation: "across",
					startx: 5,
					starty: 15
				}
			] 
	
		$('#puzzle-wrapper').crossword(puzzleData);
		
	})
	
})(jQuery)
