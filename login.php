<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<style type = "text/css">
h1 {
  height: 100px;
  width: 100%;
  font-size: 18px;
  background: #18aa8d;
  color: white;
  line-height: 150%;
  border-radius: 3px 3px 0 0;
  box-shadow: 0 2px 5px 1px rgba(0, 0, 0, 0.2);
}

form {
  box-sizing: border-box;
  width: 260px;
  margin: 100px auto 0;
  box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.2);
  padding-bottom: 40px;
  border-radius: 3px;
}
form h1 {
  box-sizing: border-box;
  padding: 20px;
}

input {
  margin: 40px 25px;
  width: 200px;
  display: block;
  border: none;
  padding: 10px 0;
  border-bottom: solid 1px #1abc9c;
  -webkit-transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
          transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
  background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 96%, #1abc9c 4%);
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #1abc9c 4%);
  background-position: -200px 0;
  background-size: 200px 100%;
  background-repeat: no-repeat;
  color: #0e6252;
}
input:focus, input:valid {
  box-shadow: none;
  outline: none;
  background-position: 0 0;
}
input:focus::-webkit-input-placeholder, input:valid::-webkit-input-placeholder {
  color: #1abc9c;
  font-size: 11px;
  -webkit-transform: translateY(-20px);
          transform: translateY(-20px);
  visibility: visible !important;
}

.tombol {
  border: none;
  background: #1abc9c;
  cursor: pointer;
  border-radius: 3px;
  padding: 6px;
  width: 200px;
  color: white;
  margin-left: 25px;
  box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.2);
}
.tombol:hover {
  -webkit-transform: translateY(-3px);
      -ms-transform: translateY(-3px);
          transform: translateY(-3px);
  box-shadow: 0 6px 6px 0 rgba(0, 0, 0, 0.2);
}
 
The magic happens in a few lines of code for the input:focus and input:valid. The CSS transform property plays a crucial role to achieve this little instant feedback effect.

input:focus::-webkit-input-placeholder, input:valid::-webkit-input-placeholder {
  color: #1abc9c;
  font-size: 11px;
  -webkit-transform: translateY(-20px);
          transform: translateY(-20px);
  visibility: visible !important;
}
</style>
</head>
<body>
<form name="flogin" id="flogin" method="post" action="">
  <h1>Silakan Login Terlebih Dahulu</h1>
  <input type="text" name="user" id="user" required placeholder="Username">
  <input type="password" name="password" id="password" required placeholder="Password">
  <input type="submit" name="logins" class="tombol" value="Login"/>
</form>
	<span class="hasil">
<?php
if (isset($_POST['logins'])) {
	$u=trim($_POST['user']);
	$p=trim($_POST['password']);
	if ($u=='admin' && md5($p)=='796b702d65def97ede8b865a253b4c55') { #ini adalah password hasil enkripsi md5
		$_SESSION['user_login']=$u;
		header('location: index.php');
	}else{
		echo "Login gagal !";
	}
}
?>
	</span>
<script type="text/javascript">document.getElementById('user').focus();</script>
</body>
</html>
