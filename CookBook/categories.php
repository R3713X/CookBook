<?php
session_start();
if ($_SESSION['login']!="TRUE"){
  header("Location: loginview.php");

}
?>
<html>
<head>
<title>Categories</title>
<link rel="shortcut icon" type="image/x-icon" href="img/tabicon.ico">
<meta  http-equiv="content-type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="main" >
	<?php include 'menu.php';?>	
	<br>	
	<div class="con1" style="margin-left: 12%;">
		<center><h5>MAIN DISHES</h5></center><hr>
		<?php
		include 'dbcon.php';//connect to Db
		$sql = "SELECT * FROM recipes WHERE category = 'Main dish' AND del_rec = 0 ORDER BY name";
		include 'sortcat.php';?>	
	</div>
	<div class="con1">
		<center><h5>SNACKS & APPETIZERS</h5></center><hr>
		<?php
		include 'dbcon.php';
		$sql = "SELECT * FROM recipes WHERE category = 'Appetizer' AND del_rec = 0 ORDER BY name";
		include 'sortcat.php';?>
	</div>
	<div class="con1">
		<center><h5>SALADS</h5></center><hr>
		<?php
		include 'dbcon.php';
		$sql = "SELECT * FROM recipes WHERE category = 'Salad' AND del_rec = 0 ORDER BY name";
		include 'sortcat.php';?>
	</div>
	<div class="con1">
		<center><h5>PRESERVES</h5></center><hr>
		<?php
		include 'dbcon.php';
		$sql = "SELECT * FROM recipes WHERE category = 'Preserve' AND del_rec = 0 ORDER BY name";
		include 'sortcat.php';?>
	</div>
</div>
</body>
</html>