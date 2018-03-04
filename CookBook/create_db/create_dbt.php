<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "3652_3782";
//------------------------------------------
//δημιουργια database
$conn = new mysqli($servername,$username,$password);

if ($conn->connect_error){
	die("con fail: ". $conn->connect_error);
}

$sql = "CREATE DATABASE 3652_3782";
if ($conn->query($sql) === TRUE){
	echo "H βάση δημιουργήθηκε. ";
}else {
	echo "Σφαλμα ή η βαση υπαρχει. ";
}
$conn->close();
//----------------------------------------
//δημιουργια table recipes
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sqlt = "CREATE TABLE recipes(
aa INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
name TEXT NOT NULL,
instructions TEXT NOT NULL,
ingr1 TEXT NOT NULL,
image_id TEXT NOT NULL,
del_rec TINYINT(1) NOT NULL,
ctime INT(255) NOT NULL,
category TEXT NOT NULL,
rec_uid INT(11) NOT NULL,
FULLTEXT(ingr1)
)";

$sqlt2 = "CREATE TABLE users(
aa INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
firstn TEXT NOT NULL,
lastn TEXT NOT NULL,
email TEXT NOT NULL,
username TEXT NOT NULL,
passw TEXT NOT NULL
)";

if ($conn->query($sqlt) === TRUE) {
    echo "Ο πίνακας recipes δημιουργήθηκε. ";
} else {
    echo "Σφαλμα" . $conn->error;
}
if ($conn->query($sqlt2) === TRUE) {
    echo " Ο πίνακας users δημιουργήθηκε.";
} else {
    echo "Σφαλμα" . $conn->error;
}


$conn->close();
//------------------------------------------


?>