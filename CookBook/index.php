<?php
session_start();
if ($_SESSION['login']!="TRUE"){
  header("Location: loginview.php");
}
?>
<html>
<head>
<title>Αρχική</title>
<link rel="shortcut icon" type="image/x-icon" href="img/tabicon.ico">
<meta  http-equiv="content-type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="main">
<?php include 'menu.php';?>
<div class="content">
<form action="index.php" method="post" enctype="multipart/form-data">
<br>
<h4><center>Ταξινόμηση ανά: <select name="sort" value="0">
  <option value="0">Επιλέξτε...</option>
  <option value="1">Χρόνος εκτέλεσης &uarr; </option>
  <option value="2">Χρόνος εκτέλεσης &darr;</option>
  <option value="3">Κατηγορία &uarr;</option>
  <option value="4">Κατηγορία &darr;</option>
</select> <input type="submit"  value="Βρες"></center></h4>
</form>
<?php
if (isset($_POST['sort']))	{
	$sort = $_POST['sort'];
}else{
	$sort=0;
}
//Allazoume to query order by αναλογα τι θέλει να βρει ο χρήστης
//το del_rec ειναι για να μην εμφανιζονται διαγραμένες συνταγές
if($sort==0){
$sql = "SELECT * FROM recipes WHERE del_rec = 0";}
else if($sort==1){
$sql = "SELECT * FROM recipes WHERE del_rec = 0 ORDER BY ctime ";}
else if($sort==2){
$sql = "SELECT * FROM recipes WHERE del_rec = 0 ORDER BY ctime DESC";}
else if($sort==3){
$sql = "SELECT * FROM recipes WHERE del_rec = 0 ORDER BY category";}
else if($sort==4){
$sql = "SELECT * FROM recipes WHERE del_rec = 0 ORDER BY category DESC";}
?>
<h3><center>Συνταγές</center></h3><br>
<hr>
<br>
<?php
//for database
include 'dbcon.php';//connect to Db
//εμφανιζει ολες τις εγγραφες
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $id = $row["aa"];
    $img_id = $row["image_id"];
?>
<div class=" cent linkStyle" style="margin-left: 75px;">
<a href="result.php?id=<?php echo $id?>&img_id=<?php echo $img_id?>"><img src="uploads/<?php echo $img_id?>" alt="no image" style="margin:5px;width:180px;height:100px;vertical-align: middle;"><h3><?php echo $row["name"];?></h3></a> 
<div style="display: inline; float: right;vertical-align: middle; text-align: left;"><br><br><h6>Εκτέλεση: <?php echo $row["ctime"];?> λεπτά </h6> <br> <h6>Κατηγορία: <?php echo $row["category"];?></h6></div>
<br>
<br>
<hr>
</div>
<?php    
    }//end while
}//end if
else {
?>
<center>0 Συνταγές.</center>
<?php
}
$conn->close();
?>
</div>
</div>
</body>
</html>