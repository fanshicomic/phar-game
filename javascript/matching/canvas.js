var height = $("#lines-1").height() - 10;
var left = parseInt($(".sub-group").position().left);

function parseSVG(s) {
    var div= document.createElementNS('http://www.w3.org/1999/xhtml', 'div');
    div.innerHTML= '<svg xmlns="http://www.w3.org/2000/svg">'+s+'</svg>';
    var frag= document.createDocumentFragment();
    while (div.firstChild.firstChild)
        frag.appendChild(div.firstChild.firstChild);
    return frag;
}

function draw_line(sub, exp, sec) {
	var id = $(sub).attr("id") + $(exp).attr("id");

	var sub_cx = parseInt($($(sub).children()[0]).attr("cx"));
	var exp_cx = parseInt($($(exp).children()[0]).attr("cx"));
	var sub_position = $(sub).offset();
	var exp_position = $(exp).offset();
	var sub_left = sub_position.left;
	var exp_left = exp_position.left;
	var mx = sub_cx + sub_left - left;
	var sx = exp_cx + exp_left - left;
	var svg = '<line id="myLine-'+id+'" x1="'+mx+'" y1="5" x2="'+mx+'" y2="0" stroke-width="2" stroke="red"/>';
	document.getElementById('lines-'+sec).appendChild(parseSVG(svg));
	var line = document.getElementById('myLine-'+ id);
	var count = 0;
	var times = 100;
	var interval = window.setInterval(function() {
	    line.setAttribute('y2', height/times + +line.getAttribute('y2'));
	    line.setAttribute('x2', (sx - mx)/times + +line.getAttribute('x2'));
	    if (count++ > times)
	        window.clearInterval(interval);
	}, 5);
}