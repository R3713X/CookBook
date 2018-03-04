<?php
session_start();
$user_rec=$_SESSION['userid'];
if ($_SESSION['login']!="TRUE"){
  header("Location: loginview.php");
}?>
<html>
<head>
<meta  http-equiv="content-type" content="text/html; charset=UTF-8"/>
</head>
<body>
<?php
//--------------------------------------
//for image upload
if(isset($_FILES['image'])){
$file_name = $_FILES['image']['name'];
$file_size =$_FILES['image']['size'];
$file_tmp =$_FILES['image']['tmp_name'];
$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
if($file_size > 2097152){
     exit();
    } 
// Check if file already exists
$i=0;
while (file_exists('uploads/'.$file_name)) {
echo "Sorry, file already exists.";
$i++;
$file_name=$i.".".$file_ext;
} 
move_uploaded_file($file_tmp,"uploads/".$file_name);//εδω κανει upload το image
}
//-----------------------------------------
//for database
$servername="localhost";
$username="root";
$password="";
$dbname="cookbook";
//from post
$name = $_POST['name'];
$instr = $_POST['instr'];
$ingrs = "";
$time= $_POST['time'];
$category= $_POST['category'];
$more = TRUE;
//--------------------------------------
$i = 1;
while ($more){
	if ((isset($_POST['ingr'.$i])) && ($_POST['ingr'.$i] != "")){
		$ingrs .= $_POST['ingr'.$i];
		$ingrs .= "<br>";

	} else{
		$more = FALSE;
	} 
	$i++;
}
include 'dbcon.php';//connect to Db
$sql = "INSERT INTO recipes (name, instructions, ingr1, image_id, ctime, category, rec_uid) 
VALUES ('$name','$instr','$ingrs','$file_name','$time','$category','$user_rec')";
//για να εχει ελληνικα στο Db. Uncomment στο my.ini το character_set_server=utf8
//add more info
if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("Location: index.php");
die();
?>
</body>
</html>
