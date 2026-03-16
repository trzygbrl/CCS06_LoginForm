<?php 
include 'header.php';
?>
<div class="page-wrap">
	<div class="home-card p-4 p-md-5">
		<h1> My Home Page </h1>
		<?php if (isset($_SESSION['email'])) { 
		echo "<h2>Welcome ".$_SESSION['name'].", Your email id is ".$_SESSION['email']."</h2>"; 
		?>
		<h3><a href="logout.php" class="btn btn-outline-primary">Logout </a></h3>
		<?php } 
		else {
			?>
			<h3>Click <a href="login.php" class="btn btn-primary">here</a> to login</h3>
		<?php } ?>
	</div>
</div>
</body>
</html> 
