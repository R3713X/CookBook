<?php
session_start();
if ($_SESSION['login']!="TRUE"){
  header("Location: loginview.php");

}
?>
<html>

<head>
<title>Add a recipe</title>
<link rel="shortcut icon" type="image/x-icon" href="img/tabicon.ico">
	<meta  http-equiv="content-type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript">
		var i=1;
		function addIngr()
		{
			if (i<=15)
			{
				i++;
				var div = document.createElement('div');
				div.innerHTML = ' <input type="text" name="ingr'+i+'" placeholder="'+i+'" ><input type="button" value="-" onclick="removeIngr(this)">';
				document.getElementById('ingrs').appendChild(div);

			}
		}
		function removeIngr(div)
		{	
    	document.getElementById('ingrs').removeChild( div.parentNode );
		i--;
		}
		
	</script>
</head>
<body>
<div class="main">
	<?php include 'menu.php';?>
	<form action="addDB.php" method="post" enctype="multipart/form-data">
	<div class="content  ">
		<br><h3><center>ADD A RECIPE</center></h3><br><hr><br>
		<h4>Recipe title: <input type="text" name="name" required></h4><br><br>
		<h4>Category:
		<select name="category" required>
  			<option value="">Choose...</option>
  			<option value="Main Dish">Main dish</option>
  			<option value="Appetizer">Appetizer</option>
  			<option value="Salad">Salad</option>
  			<option value="Preserve">Preserve</option>
		</select>
		</p>Preparation time: <input type="tel" name="time" style="width: 30px;" pattern="[0-9]{1,3}"  maxlength="3" required> minutes.<br></h4>
		<div class="  con1"><br>
			Instructions:
		​	<textarea id="steps" rows="20" cols="50" name="instr" fixed required></textarea><br>
			<input type="file" name="image">
			<input type="submit" value="Save">
		</div>
		<div class=" con2">
			Ingrediences:
			<input type="button" id="add_ingr()" onclick="addIngr()" value=" + "> 
			<br>
			<div id=ingrs>
				<input type="text" name="ingr1" placeholder="1" required> 
			</div>
		</div>
	</div>
	</form>
</div>
<body>
</html>