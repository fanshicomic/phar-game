var first = "";
var second = "";
var ans = new Array();
var current_section = 1;

$(function() {
	$(".exp-element").click(function() {
		handle_element_clicking_event(this);
	});
	$(".sub-element").click(function() {
		handle_element_clicking_event(this);
	});
	$(".btn-reset").click(function() {
		game_reset();
	});
	$(".btn-undo").click(function() {
		game_undo();
	})
	$(".btn-submit").click(function() {
		submit_answer(this);
	});
	$(".fa-chevron-circle-left").click(function() {
		previous_section(this);
	});
	$(".fa-chevron-circle-right").click(function() {
		next_section(this);
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
	if (true) {
		element = $(element).children()[0];
		toggle_border(element);
		if (first != "") {
			if (first == element) {
				first = "";
			} else {
				if (is_same_level($(element).parent(), $(first).parent())) {
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
	} else {

	}
}

function is_same_level(e1, e2) {
	var is_e1_main = $(e1).attr("class");
	var is_e2_main = $(e2).attr("class");
	return is_e1_main == is_e2_main;
}

function connect(e1, e2) {
	e1 = $(e1).parent();
	e2 = $(e2).parent();
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
		var is_e1_sub = $(e1).attr("class") == "sub-element";
		var is_e2_sub = $(e2).attr("class") == "sub-element";
		if (is_e1_sub) {
			var sub = e1;
			var exp = e2;
		} else {
			var sub = e2;
			var exp = e1;
		}
		var sub_id = $(sub).attr("id");
		var exp_id = $(exp).attr("id");
		ans.push([sub_id, exp_id]);
		draw_line(sub, exp, current_section);
		toggle_border($(e1).children()[0]);
		toggle_border($(e2).children()[0]);
		first = "";
		second = "";
	}
}

function previous_section (btn) {
	var sec = parseInt($(btn).attr("sec"));
	var prev = sec - 1 < 1 ? 1 : sec - 1;
	current_section = prev;
	$(".sec-" + sec).hide();
	$(".sec-" + prev).show();
}

function next_section (btn) {
	var sec = parseInt($(btn).attr("sec"));
	var next = sec + 1 > 3 ? 3 : sec + 1;
	current_section = next;
	$(".sec-" + sec).hide();
	$(".sec-" + next).show();
}

function game_reset() {
	first = "";
	second = "";
	ans = new Array();
	$("#lines-1").html("");
	$("#lines-2").html("");
	$("#lines-3").html("");
}

function game_undo() {
	var last_step = ans.pop();
	var sub = last_step[0];
	var exp = last_step[1];
	$("#myLine-" + sub + exp).remove();
}

function submit_answer(btn) {
	var lec = $(btn).attr("lec");
	var score;
	if (ans.length > $(".sub-element").length) {
		swal("Error",
			"You can't select more than "+ $(".sub-element").length +" pairs",
			"error");
	} else if (ans.length < $(".sub-element").length) {
		swal("Error",
			"You haven't completed all the sections",
			"error");
	} else {
		$.ajax({
			async	: false,
			type	:'POST', 
		    url		: "/pharmacology/games/php/model/ajax_handler.php",
		    data    : {	cmd 	: 'submit_answer',
		    		   	lecture	: lec,
		    		    ans 	: JSON.stringify(ans)
		    		},
		    success	: function(data) {
				if (data == 1) {
					window.location.href="/pharmacology/games/php/view/matching_game/lec_"+lec+"_answer.php?ans="+JSON.stringify(ans);
				} else {
					swal("Error",
						data,
						"error");
				}
			}
		});
	}
	// return show_score(score);
}