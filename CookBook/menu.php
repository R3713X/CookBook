<div class="nav">	
	<ul>
 		<li><a href="index.php">HOME</a></li>
 		<li><a href="categories.php">CATEGORIES</a></li>
  		<li><a href="addrecipe.php">ADD RECIPE</a></li>
  		<li><a href="searchview.php">SEARCH</a></li>

  	</ul>	
</div>
<div style="float:right;margin-right:20px;">
	<?php 
	if (isset($_SESSION['firstn'])){
	?>Welcome, <?php echo $_SESSION['firstn'] ." ". $_SESSION['lastn'];
	}else{?>You are not logged in.<?php
	}
	?>
</div>
<br>
<div class="linkstyle" style="float:right; margin-right:20px;">
<h4>
<?php
	if (isset($_SESSION['login'])){
		echo "<a href=\"myrecipes.php\"><h3><u>My recipes</u></h3></a><br><br>";
		echo "<a href=\"logout.php\">Log out</a>";
	}else{
		echo "<a href=\"loginview.php\">Log in</a>";
	}
?>
<br>

<?php
	if (!isset($_SESSION['login'])){?>
	<hr>
	<span class="linkStyle" style="text-align: center;"><a href="register.php">Sign up</a></span>
<?php 
}?>
</h4>
</div>
