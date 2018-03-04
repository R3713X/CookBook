<?php
session_start();
if ($_SESSION['login']!="TRUE"){
  header("Location: loginview.php");

}
?>
<html>
<head>
	<title>Αναζήτηση</title>
<link rel="shortcut icon" type="image/x-icon" href="img/tabicon.ico">
	<meta  http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="main">
		<?php include 'menu.php';?>
		<form action="search.php" method="post">
			<div class="content centerText">
				<br><h3>Υλικά προς αναζήτηση</h3><br><br><hr><br>
				<input type="text" name="s_ing1" placeholder="ύλικο 1, υλικο 2...">
				<br><br>
				<input type="submit" value="Αναζήτηση">
			</div>
		</form>
	</div>
<body>
</html>