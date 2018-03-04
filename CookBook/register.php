<html>
<head>
<title>Εγγραφή χρήστη</title>
<link rel="shortcut icon" type="image/x-icon" href="img/tabicon.ico">
<meta  http-equiv="content-type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="main">
	<?php include 'menu.php';?>
	<div class="content">
	<form action="regdb.php" method="post">
		<label for="firstn">Όνομα:</label>
		<input type="text" name="firstn" required><br>

		<label for="lastn">Επώνυμο:</label>
		<input type="text" name="lastn" required><br>

		<label for="email">E-mail:</label>
		<input type="text" name="email" required><br>

		<label for=username>Όνομα Χρήστη:</label> 
		<input type="text" name="username" required><br>

		<label for="passw">Κωδικός:</label>
		<input type="password" name="passw" required><br><br>

		<span style="margin-left: 360px;"><input type="submit" value="Εγγραφή"></span>
	</form>
	</div>


</div>
</body>
</html>
