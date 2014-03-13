<script>
	function search() {
		updatezind('sform');
		if (document.getElementById("sform").style.visibility == "visible") {
			document.getElementById("sform").style.visibility = "hidden";
		} else {
			document.getElementById("sform").style.visibility = "visible";
		}
	}


	$(document).ready(function() {
		$.getJSON("https://api.vk.com/method/users.get?uid=" + id + "&fields=photo&access_token=" + tocken + "&callback=?", function(data) {
			document.getElementById('user').innerHTML = data.response[0].first_name + ' ' + data.response[0].last_name;
			document.getElementById('userphoto').src = data.response[0].photo;
		});
	});
	$(document).ready(function() {
		$.getJSON("https://api.vk.com/method/status.get?uid=" + id + "&fields=photo&access_token=" + tocken + "&callback=?", function(data) {
			document.getElementById('userstatus').innerHTML = data.response.text;
		});
	});
	$(document).ready(function() {
		$.getJSON("https://api.vk.com/method/audio.get?access_token=" + tocken + "&callback=?", function(data) {
			jwplayer('mediaspace').setup({
				'flashplayer' : 'users/admin/applications/mediaplayer/player.swf',
				'description' : data.response[0].title,
				'duration' : data.response[0].duration,
				'file' : data.response[0].url,
				'controlbar' : 'bottom',
				'width' : '300',
				'height' : '24'
			});
		});
	});
	function statusform() {
		var status;
		$(document).ready(function() {
			$.getJSON("https://api.vk.com/method/status.get?uid=" + id + "&fields=photo&access_token=" + tocken + "&callback=?", function(data) {
				new _nfWnd('stat', 'Status Change', '{width:350,height:200}', '<textarea cols="38" rows="7" id="statusx">' + data.response.text + '</textarea><br><input type=button value="Change" style="position:absolute;right:10px" onClick=javascript:statusset(document.getElementById("statusx").value)>');
			});
		});
	}

	function statusset() {
		var text = document.getElementById('stat').value;
		$(document).ready(function() {
			$.getJSON("https://api.vk.com/method/status.set?text=" + text + "&access_token=" + tocken + "&callback=?", function(data) { JavaScript:
				document.getElementById("userstatus").innerHTML = text;
			});
		});
	}

	function reply(id) {
		var status;
		$(document).ready(function() {
			$.getJSON("https://api.vk.com/method/users.get?uid=" + id + "&access_token=" + tocken + "&callback=?", function(data) {
				new _nfWnd('reply', 'Reply to ' + data.response[0].first_name + ' ' + data.response[0].last_name, '{width:350,height:200}', '<textarea cols="38" rows="7" id="statusx"></textarea><br><input type=button value="Send" style="position:absolute;right:10px" onClick=javascript:messsend(document.getElementById("statusx").value,' + id + ')><br>');
			});
		});
	}

	function messsend(text, id) {
		$(document).ready(function() {
			$.getJSON("https://api.vk.com/method/messages.send?uid=" + id + "&message=" + text + "&access_token=" + tocken + "&callback=?", function(data) { JavaScript:
				nfWnd["reply"]._close();
			});
		});
		$(document).ready(function() {
			$.getJSON("https://api.vk.com/method/messages.send?uid=" + id + "&message=" + text + "&access_token=" + tocken + "&callback=?", function(data) { JavaScript:
				nfWnd["reply"]._close();
			});
		});
	}
</script>
<div id="report"></div>
<div style="position:absolute; top:0; left:0; height:5px; width:100%; background-color:#222933;"></div>
<a href="javascript:start();" style="position: absolute; top:15px; left:250px;"><img src="users/admin/style/UI/theme/menu.fw.png" style="height: 25px;" /></a>
<div class="popover fade bottom in" id="apps" onMouseDown="updatezind('apps');" style="top: 41px; left: 133px; display: block; visibility: hidden; width:250px; height:340px;">
	<div class="arrow"></div>
	<div class="popover-inner">

		<div class="popover-title" style="height: 280px;">
			<iframe src="users/admin/style/menu.htm" style="position:absolute; top:40px;  height:250px; width:230px; border:0;"></iframe>
		</div>
		<span style="position: relative;top: 15px;" class="popover-content"><i class="icon-search" onclick="javascript:search();"></i></span>
	</div>
</div>
<div id="time" style="color: #FFF; position: absolute; top: 20px; right:90px; font-size: 28pt; font-family:Arial;"></div>
<div id="date" style="color: #FFF; position: absolute; top: 20px; right:5px;"><span id="month" style="font-size: 14pt; font-family:Tahoma; position:relative;top:-16px; left: 28px;"></span><span id="year" style="font-size: 10pt; font-family:Arial;"></span> <span id="day" style="font-size: 28pt; font-family:Arial;"></span></div>

<script language="JavaScript" type="text/javascript">
	//obj_hours = document.getElementById("hours");
 obj_time = document.getElementById("time");
 obj_day = document.getElementById("day");
 obj_month = document.getElementById("month");
 obj_year = document.getElementById("year");

	name_month = new Array("янв", "фев", "мар", "апр", "май", "июн", "июл", "авг", "сен", "окт", "ноя", "дек");
	name_day = new Array("Воскресенье", "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота");

	function wr_hours() {
		time = new Date();

		time_min = time.getMinutes();
		time_hours = time.getHours();
		time_wr = ((time_hours < 10) ? "0" : "") + time_hours;
		time_wr += ":";
		time_wr += ((time_min < 10) ? "0" : "") + time_min;
		obj_time.innerHTML = time_wr;
		obj_day.innerHTML = time.getDate();
		obj_month.innerHTML = " "+name_month[time.getMonth()];
		obj_year.innerHTML = time.getFullYear();
		time_wr = "" + name_day[time.getDay()] + "<br>" + time.getDate() + " " + name_month[time.getMonth()] + " " + time.getFullYear() + "<br>" + time_wr;

		//obj_hours.innerHTML = time_wr;
		
	}

	wr_hours();
	setInterval("wr_hours();", 200); 
</script>
