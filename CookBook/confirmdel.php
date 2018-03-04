<?php
session_start();
if ($_SESSION['login']!="TRUE"){
  header("Location: loginview.php");

}
?>
<html>
<head>
<title>Cookbook</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="shortcut icon" type="image/x-icon" href="img/tabicon.ico">
<meta  http-equiv="content-type" content="text/html; charset=UTF-8" />
</head>
<body>
<div class="main" style="text-align: center;">
	<?php include 'menu.php';?>
	
	<form action="recipedel.php" method="post">
		<center>Are you sure?</center>
		 
		<input type="hidden" name="id" value="<?php echo $_POST['idconfirm']//Sending ID for deletion ?>">
    	<input type="submit" value="Nαι">
	</form>
	<form action="index.php">

    	<input type="submit" value="Οχι">
	</form>
	
</div>
</body>
</html>
