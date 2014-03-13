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
<div class="navbar">
	<div class="navbar-inner">
		<div class="container">

			<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>

			<!-- Be sure to leave the brand out there if you want it shown -->
			<a class="brand" href="#">Nebula</a>

			<!-- Everything you want hidden at 940px or less, place within here -->
			<div class="nav-collapse">
				<ul class="nav">
					<li>
						<a href="javascript:start();">Приложения</a>
					</li>
					<li>
						<a href="javascript:control();">Система</a>
					</li>
					<li>
						<a href="#">Магазин</a>
					</li>

				</ul>
				<!-- .nav, .navbar-search, .navbar-form, etc -->
			</div>

		</div>
	</div>
</div>
<div class="popover fade bottom in" id="apps" onMouseDown="updatezind('apps');" style="top: 41px; left: 0px; display: block; visibility: hidden; width:330px; height:400px;">
	<div class="arrow"></div>
	<div class="popover-inner">
		<h3 class="popover-title">Приложения</h3>
		<div class="popover-content">
			<iframe src="users/admin/style/menu.htm" style="height:340px; width:300px; border:0;"></iframe>
		</div>
	</div>
</div>
<div id="searchcontrol" style="margin: 5px; position: absolute; top:0; right: 0;"  class="form-search"></div>
<div id='vk'><img id="userphoto"><div id="user"></div><a id="userstatus"></a>
	<input type="text" id="stat"/>
	<input type="submit" onclick="javascript:statusset()" />
</div>