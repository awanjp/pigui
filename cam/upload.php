<html><head><title>Berhasil ambil gambar</title>
<meta http-equiv="refresh" content="10;url=index.php"></head>
<body>
<?php
shell_exec("sudo /var/www/html/cam/poto.sh > /dev/null 2>&1 &");
?>
Gambar berhasil di-upload, silakan cek akun dropbox anda untuk melihat gambar...
</body>
</html>