var first = "";
var second = "";
var beta = new Array();
var non_beta = new Array();

$(function() {
	$(".main-element").click(function() {
		handle_element_clicking_event(this);
	});
	$(".sub-element").click(function() {
		handle_element_clicking_event(this);
	});
	$(".btn-reset").click(function() {
		game_reset();
	});
	$(".btn-submit").click(function() {
		submit_answer(this);
	});
});

function toggle_border(svg) {
	if($(svg).attr("stroke-width") == "2") {
		$(svg).attr("stroke-width", "0");
	} else {
		$(svg).attr("stroke-width", "2");
		$(svg).attr("stroke", "#16A085");
	}
}

function handle_element_clicking_event(element) {
	toggle_border(element);
	if (first != "") {
		if (first == element) {

		} else {
			if (is_same_level(element, first)) {
				toggle_border(first);
				first = element;
			} else {
				second = element;
				connect(first, second);
			}
		}
	} else {
		first = element;
	}
}

function is_same_level(e1, e2) {
	var is_e1_main = $(e1).attr("class");
	var is_e2_main = $(e2).attr("class");
	return is_e1_main == is_e2_main;
}

function connect(e1, e2) {
	if (is_same_level(e1, e2)) {
		swal({   
	    title: "Error!",   
	    text: "You can't match 2 groups that on the same level",   
	    type: "error",   
	    confirmButtonColor: "#DD6B55",   
	    confirmButtonText: "OK",   
	    closeOnConfirm: false }, 
	    function(){
	    	game_reset();
	    });  
	} else {
		var is_e1_main = $(e1).attr("class") == "main-element";
		var is_e2_main = $(e2).attr("class") == "main-element";
		if (is_e1_main) {
			var main = $(e1).parent();
			var sub = $(e2).parent();
		} else {
			var main = $(e2).parent();
			var sub = $(e1).parent();
		}
		if ($(main).attr("id") == "beta-lactam") {
			beta.push($(sub).attr("id"));
		} else if ($(main).attr("id") == "non-beta-lactam") {
			non_beta.push($(sub).attr("id"));
		} else {

		}
		draw_line(main, sub);
		toggle_border(e1);
		toggle_border(e2);
		first = "";
		second = "";
	}
}

function game_reset() {
	first = "";
	second = "";
	beta = new Array();
	non_beta = new Array();
	$("#lines").html("");
}

function submit_answer(btn) {
	var lec = $(btn).attr("lec");
	var score;
	if (lec == "2") {
		$.ajax({
			async	: false,
			type	:'POST', 
	    	url		: "/pharmacology/games/php/model/ajax_handler.php",
	    	data    : {	cmd 	: 'submit_answer',
	    			   	lecture	: lec,
	    			    beta 	: JSON.stringify(beta),
	    			    non_beta: JSON.stringify(non_beta)
	    			},
	    	success	: function(data) {
				score = data;
			}
		});
	} else if (lec == "4") {

	} else {

	}
	return show_score(score);
}

function show_score(score) {
	swal("success",
		"Your score is " + score + " .",
		"success");
}