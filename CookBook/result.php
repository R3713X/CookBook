<?php
session_start();
if ($_SESSION['login']!="TRUE"){
  header("Location: loginview.php");

}
?>
<html>
<head>
<title>Cookbook</title>
<link rel="shortcut icon" type="image/x-icon" href="img/tabicon.ico">
<meta  http-equiv="content-type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="main">
	<?php include 'menu.php';?>
	<div class="content">
		<?php
		//connect to Db
		include 'dbcon.php';
		$id=$_GET["id"];
		$img_id=$_GET["img_id"];
		$sql = "SELECT * FROM recipes WHERE aa LIKE $id";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();//
		$rec_uid=$row["rec_uid"];//from db
		?>
		<div class="font">
			<center><h2><?php echo $row["name"];?></h2></center>
		</div>
		<div class="con1" style="margin-left: 50px;">
			<img src="uploads/<?php echo $img_id?>" alt="no image" style="margin-top:42px;margin-left:12px; width:320px;height:200px;vertical-align: middle;">
		</div>
		<div class="con2" >
			<h5>Ingredients:
			<hr>
			<?php echo $row["ingr1"]; ?></h5>
			<br><h6>Preparation time:
			<?php echo $row["ctime"]; ?> minutes</h6>
		</div>
		<div class="cent" style="margin-left: 50px;">
			<br><h5>Instructions:<hr>
			<?php echo $row["instructions"]; ?></h5>
		</div>
		<br>
		<div class="cent" style="margin-left: 50px;">
		<?php 
			if ($rec_uid==$_SESSION['userid']){
				?>
			<form action="confirmdel.php" method="POST">
				<input type="hidden" name="idconfirm" value="<?php echo $id ?>">
				<input type="submit" name="delete_rec" value="Delete">
			</form>
		<?php
			}
		?>
		</div>
	</div>
</div>
</body>
</html>