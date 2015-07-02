var score = 0;
var countdown;
$(function() {
	$('.btn-start').click(function() {
		start_game(this);
	});
	$('.btn-submit').click(function() {
		submit_answer_alert(this);
	});
});

function start_game(btn) {
	var lec = $(btn).attr("lec");
	$('#time').show();
	$('#instruction').hide();
	$('#div-puzzle').show();

	// the time limit for the game
	var time_limit = 60 * 30,
    display = $('#time');
    startTimer(lec, time_limit, display);
};

function submit_answer_alert(btn) {
	var lec = $(btn).attr("lec");
	swal({   
		title: "Are you sure?",   
		text: "Your answer will be submitted, this action is irreversible.",   
		type: "warning",   
		showCancelButton: true,   
		confirmButtonColor: "#DD6B55",   
		confirmButtonText: "Yes, submit it!",   
		closeOnConfirm: false }, 
		function(){   
			submit_answer(lec); 
		});
}

function submit_answer(lec) {
	$.ajax({
			async	: false,
			type	:'POST', 
		    url		: "/pharmacology/games/php/model/ajax_handler.php",
		    data    : {	cmd 	: 'submit_answer',
		    		   	lecture	: lec,
		    		    score 	: score
		    		},
		    success	: function(data) {
				if (data == 1) {
					stopTimer();
					show_score();
				} else {
					swal("Error",
						data,
						"error");
				}
			}
		});
}

function show_score() {
	swal("Good job!", "Your score is "+ score +" !", "success");
}

function startTimer(lec, duration, display) {
    var timer = duration, minutes, seconds;
    countdown = setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.text(minutes + " : " + seconds);

        if (--timer < 0) {
            window.clearInterval(countdown);
            submit_answer(lec);
        }
    }, 1000);
}

function stopTimer() {
	window.clearInterval(countdown);
}