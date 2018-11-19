<?php 
include "./class/koneksi.php";
 if(isset($_COOKIE['ID_my_site']))
 { 	$username = $_COOKIE['ID_my_site']; 
 	$pass = $_COOKIE['Key_my_site'];
 	 	$check = mysql_query("SELECT * FROM mst_person WHERE login = '$username'")or die(mysql_error());
 	while($info = mysql_fetch_array( $check )) 	
 		{
 		if ($pass != trim($info['sandi'])) 
 			{
 			 			}
 		else
 			{
 			header("Location: home.php");
 
 			}
 		}
 }

 if (isset($_POST['submit'])) { 
 	if(!$_POST['username'] | !$_POST['pass']) {
 		header("location: login.php");
 	}
 	if (!get_magic_quotes_gpc()) {
 		$_POST['email'] = addslashes($_POST['email']);
 	}
 	$check = mysql_query("SELECT * FROM mst_person WHERE login = '".$_POST['username']."'")or die(mysql_error());
 $check2 = mysql_num_rows($check);
 if ($check2 == 0) {
 			die("<script language=Javascript>alert('Username dan password tidak terdaftar');window.location='login.php'; </script>"); 		
 	}
 while($info = mysql_fetch_array( $check )) 	
 {
 $_POST['pass'] = trim(stripslashes($_POST['pass']));
 	$info['sandi'] = trim(stripslashes($info['sandi']));
 	$_POST['pass'] = md5($_POST['pass']);
 	if ($_POST['pass'] != $info['sandi']) {
 		die("<script language=Javascript>alert('Password salah, coba diulangi');window.location='login.php'; </script>");		
 	}
	else 
 { 
 	 $_POST['username'] = stripslashes($_POST['username']); 
 	 //$hour = time() + 32400; //8jam
 	 $hour = time() + 7200; 
 setcookie(ID_my_site, $_POST['username'], $hour); 
 setcookie(Key_my_site, $_POST['pass'], $hour);	 
 header("Location: index.php"); 
 } 
 } 
 } 
 else 
 {	 
 ?> 
<!--<form onsubmit="return check('login')" id="formlogin" action="<?php //echo $_SERVER['PHP_SELF']?>" method="post" > -->
<!--Login Form HTML-->
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Login Form >> Program Kredit</title>
	<link type="text/css" href="css/start/jquery-ui-1.8.14.custom.css" rel="stylesheet" />	
	<link type="text/css" href="css/main.css" rel="stylesheet" />	
	<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>		
</head>
<body>
<form method="POST" action="login.php">
	<div id="dialogLogin">
		<div class="row" style="margin:2px;">
			<div class="col">User Name</div>
			<div class="col"><input style="width:150px;" type="text" id="userInput" name="username"></div>
		</div>
		<div class="row" style="margin:2px;">
			<div class="col">Password</div>
			<div class="col"><input style="width:150px;" type="text" id="password" name="pass"></div>
		</div>
		<div class="row" style="margin:2px;">
			<div class="col">&nbsp;</div>
			<div class="col"><input type="submit" id="login" name="login" value="LOGIN"></div>
		</div>
	</div>
</form>
</body>
</html>

<!--</form>-->
<?php 
 }  
 ?> 
 <script type='text/javascript'>
 window.onload= function load(){document.getElementById('userInput').focus();}
function check(x){	
var username = document.getElementById('userInput').value;
var password = document.getElementById('password').value;
if(username=="" || password==""){
alert('Username dan password tidak boleh kosong');
}	
}

</script>