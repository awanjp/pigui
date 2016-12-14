<!DOCTYPE html>
<html>
<head>
	<title>Konversi Password MD5 dengan PHP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="kotak">
	<h2>Konversi Password dengan enkripsi MD5</h2>
	<form name="f1" method="post" action="">
		<div><input type="text" name="pass" id="pass" maxlength="30" required placeholder="Masukkan password yang hendak dikonversi"/></div>
		<div><input type="submit" class="tombol" name="convert" value="Konversi" /></div>
	</form>
	<span class="hasil">
		<?php
			if (isset($_POST['convert'])) {
				if (strlen(trim($_POST['pass']))) {
					echo "Hasil konversi password ".$_POST['pass'].": ".md5($_POST['pass']);
				}
			}
		?>
	</span><br/>
	<script type="text/javascript">document.getElementById('pass').focus();</script>
	<a href="index.php">Ke halaman utama</a>
</div>
</body>
</html>