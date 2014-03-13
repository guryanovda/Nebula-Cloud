// JavaScript Document -
var isclient = 0;
var zindex = 0;
var x2;
var y2;
var req = new XMLHttpRequest();
function get_object(id) {
	return document.getElementById(id);
}

function new_window(id, header, content, w, h) {
	zindex++;
	if (!document.getElementById(id)) {
		var w2 = w + 30;
		var h2 = h + 80;
		$('#workplace').append('<div class="modal hide" id="' + id + '" style="width:' + w2 + 'px; height:' + h2 + 'px; z-index:' + zindex + '" ></div>');
		$('#' + id).append('<div class="modal-header" onMouseDown="updatezind(\'' + id + '\');"><button type="button" class="close" data-dismiss="modal"  >×</button><h3>' + header + '</h3></div>');
		$('#' + id).append('<div class="modal-body" style="width:' + w + 'px; height:' + h + 'px;"><iframe src="' + content + '" style="border:0; width:' + w + 'px; height:' + h + 'px;"></iframe></div>');
		$('#' + id).modal({
			backdrop : false,
			keyboard : false
		})
		$(function() {
			$("#" + id).draggable();
		});
		updatezind('"' + id + '"');
	} else {
		$('#' + id).modal('show');
		updatezind('"' + id + '"')
	}
}

function updatezind(e) {
	zindex++;
	document.getElementById(e).style.zIndex = zindex;
}
function start() {
	updatezind('apps');
	if (document.getElementById("apps").style.visibility == "visible") {
		document.getElementById("apps").style.visibility = "hidden";
	} else {
		document.getElementById("apps").style.visibility = "visible";
	}
}