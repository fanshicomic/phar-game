var height = $("#lines").height() - 15;
var left = $(".sub-group").position().left;

function parseSVG(s) {
    var div= document.createElementNS('http://www.w3.org/1999/xhtml', 'div');
    div.innerHTML= '<svg xmlns="http://www.w3.org/2000/svg">'+s+'</svg>';
    var frag= document.createDocumentFragment();
    while (div.firstChild.firstChild)
        frag.appendChild(div.firstChild.firstChild);
    return frag;
}

function connect(main, sub) {
	var id = sub.attr("id");

	var main_cx = parseInt($($(main).children()[0]).attr("cx"));
	var sub_cx = parseInt($($(sub).children()[0]).attr("cx"));
	var main_position = $(main).offset();
	var sub_position = $(sub).offset();
	var main_left = main_position.left;
	var sub_left = sub_position.left;
	var mx = main_cx + main_left - left;
	var sx = sub_cx + sub_left - left;
	var svg = '<line id="myLine-'+id+'" x1="'+mx+'" y1="5" x2="'+mx+'" y2="5" stroke-width="2" stroke="red"/>';
	document.getElementById('lines').appendChild(parseSVG(svg));
	var line = document.getElementById('myLine-'+ id);
	var count = 0;
	var times = 70;
	var interval = window.setInterval(function() {
	    line.setAttribute('y2', height/times + +line.getAttribute('y2'));
	    line.setAttribute('x2', (sx - mx)/times + +line.getAttribute('x2'));
	    if (count++ > times)
	        window.clearInterval(interval);
	}, 15);
}

var main = $("#non-beta-lactam");
var sub = $("#monobactams");
connect(main, sub);