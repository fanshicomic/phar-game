var answer = 0;
$(function() {
	$('.btn-start').click(function() {
		start_game();
	})
});

function start_game() {
	$('#time').show();
	$('#instruction').hide();
	$('#div-puzzle').show();

	var thirty_minutes = 60 * 30,
    display = $('#time');
    // startTimer(thirty_minutes, display);
};

function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.text(minutes + " : " + seconds);

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}