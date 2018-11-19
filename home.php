<?php 
include 'class/class.tanggal.php';
include 'class/koneksi.php';
//include 'sesion.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Aplikasi Service Favorit Techno</title>
		<link type="text/css" href="css/start/jquery-ui-1.8.14.custom.css" rel="stylesheet" />	
        <link type="text/css" href="css/main.css" rel="stylesheet" />	
		<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="js/ajaxFunction.js"></script>
		<script type="text/javascript" src="js/zeroFill.js"></script>
		<style>
		<!--
		.logo_cari{
		width:60px;
		height:10px;
		background-image:url(images/b97i5XsKSL7.png);
		background-position: -230px -215px;
		float:left;
		}
		-->
		</style>
	</head>
	<body>
	<div style="width:100%; height:26px; background-color:#3B5998; background-image:url('images/hd_bar.png');  -moz-border-radius:5px 5px 0 0;"></div>
		<div style="width:99.85%; height:560px; border:solid 1px #648CB4;">
			<div style="width:200px; height:300px; float:left; border:solid 0px #648CB4;">
				<?php include 'main/left_nav.php';?>						
			</div>			
			<div style="float:left; width:850px; height:550px; border:solid 1px #648CB4; margin-top:2px; background-image:url(images/trans_white.png);">
				<div style="width:850px; height:auto; ">
					<div style="width:100%;  background-image:url('images/hd_bar.png'); height:25px;">
						<div style="width:300px; height:20px; border:solid 1px #ededed; background-color:#FFF; padding:1px;"><div style="float:left;"><input onFocus="this.value=''" onBlur="this.value='&nbsp;Pencarian&nbsp;'" style="border:none; width: 250px;" type="text" name="" id="" value="&nbsp;Pencarian&nbsp;"></div>|Cari</div>
					</div>
					<div style="width:100%; height:20px; background-color:#D6EAFD; border-bottom:dashed 1px #000; margin-top:2px;">&nbsp;
						<b id="capTitle"></b>
					</div>
					<div style="width:100%; height:auto; background-color:#fff;">
						<iframe id="mainx" src="" style="display:none; width:99.9%; height:500px; border:0px;"></iframe>
						<div id="main" style="width:99.9%; height:500px; border:0px; overflow:auto; overflow-x:hidden; "></div>
						<script>
						$(document).ready(function() {
							loadMenu('001');
						}
						)
						function loadMenu(menu){
						switch (menu){
							case '001': $('#main').load('main/dataPelanggan.php'); break;
							case '002': $('#main').load('main/dataBarang.php?menu='+menu); break;
							case '003': $('#main').load('main/lap_dataPelanggan.php'); break;
							case '004': $('#main').load('main/lap_dataBarang.php?status=0&menu='+menu); break;
							case '005': $('#main').load('main/lap_dataBarang.php?status=1&menu='+menu); break;
							case '006': $('#main').load('main/lap_dataBarang.php?status=2&menu='+menu); break;
							case '007': $('#main').load('main/lap_dataBarang.php?status=3&menu='+menu); break;
							case '008': $('#main').load('main/lap_dataBarang.php?status=4&menu='+menu); break;
						}
						
						/*if(menu==001){document.getElementById('main').src='main/dataPelanggan.php';}
						if(menu==002){document.getElementById('main').src='main/dataBarang.php?menu='+menu;}
						if(menu==003){document.getElementById('main').src='main/lap_dataPelanggan.php';}
						if(menu==004){document.getElementById('main').src='main/lap_dataBarang.php?status=0&menu='+menu;}
						if(menu==005){document.getElementById('main').src='main/lap_dataBarang.php?status=1&menu='+menu;}
						if(menu==006){document.getElementById('main').src='main/lap_dataBarang.php?status=2&menu='+menu;}
						if(menu==007){document.getElementById('main').src='main/lap_dataBarang.php?status=3&menu='+menu;}
						if(menu==008){document.getElementById('main').src='main/lap_dataBarang.php?status=4&menu='+menu;}
						*/
						}
						</script>	
					</div>
				</div>
			</div>
		</div>
	<div style="width:100%; height:26px; background-color:#3B5998; background-image:url('images/hd_bar.png');  -moz-border-radius:0 0 5px 5px;"></div>
	</body>
</html>
