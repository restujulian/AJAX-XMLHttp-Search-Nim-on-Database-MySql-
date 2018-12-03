<!DOCTYPE html>
<?php
	include'config.php';
	$db = new database();
?>
<html>
	<body align="center">

	<h2>Form Cari Mahasiswa</h2>

	<h3>Silahkan cari mahasiswa dengan nim</h3>

	<p>NIM : <input type="text" id="txt1" onkeyup="showHint(this.value)"></p>
	<div align="center">
		<table border="1">
			<tr>
				<th style="width: 200px;">NIM</th>
				<th style="width: 300px;">Nama</th>
			</tr>
			<tbody  id="txtHint">


			</tbody>
		</table>
	</div>

	<script>
		function showHint(str) {
		  var xhttp;
		  if (str.length == 0) { 
		    document.getElementById("txtHint").innerHTML = "";
		    return;
		  }
		  xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		      document.getElementById("txtHint").innerHTML = this.responseText;
		    }
		  };
		  xhttp.open("GET", "searchNIM.php?nim="+str, true);
		  xhttp.send();
		}
	</script>

	</body>
</html>
