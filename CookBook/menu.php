<div class="nav">	
	<ul>
 		<li><a href="index.php">ΑΡΧΙΚΗ</a></li>
 		<li><a href="categories.php">ΚΑΤΗΓΟΡΙΕΣ</a></li>
  		<li><a href="addrecipe.php">ΠΡΟΣΘΗΚΗ</a></li>
  		<li><a href="searchview.php">ΑΝΑΖΗΤΗΣΗ</a></li>

  	</ul>	
</div>
<div style="float:right;margin-right:20px;">
	<?php 
	if (isset($_SESSION['firstn'])){
	?>Καλωσήρθατε, <?php echo $_SESSION['firstn'] ." ". $_SESSION['lastn']; 
	}else{?>Δεν είστε συνδεδεμένος.<?php
	}
	?>
</div>
<br>
<div class="linkstyle" style="float:right; margin-right:20px;">
<h4>
<?php
	if (isset($_SESSION['login'])){
		echo "<a href=\"myrecipes.php\"><h3><u>Οι συνταγές μου</u></h3></a><br><br>";
		echo "<a href=\"logout.php\">Αποσύνδεση</a>";
	}else{
		echo "<a href=\"loginview.php\">Σύνδεση</a>";
	}
?>
<br>

<?php
	if (!isset($_SESSION['login'])){?>
	<hr>
	<span class="linkStyle" style="text-align: center;"><a href="register.php">Εγγραφή</a></span>	
<?php 
}?>
</h4>
</div>
