$(function() {
	$(".main-element").click(function() {
		toggle_border(this);
	});
	$(".sub-element").click(function() {
		toggle_border(this);
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