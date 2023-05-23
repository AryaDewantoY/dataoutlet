<?php
	if(empty($_SESSION['username']) and empty($_SESSION['password'])){
		// header("location:login.php");
		?>
<li><a href="index.php" title="Home">Home</a></li>
<li><a href="#" title="Profile">Profil</a></li>

<li><a href="?pg=list_outlet">Data Outlet</a></li>
<li><a href="logout.php" title="Keluar">Logout<span class="rov"> Apa anda Ingin keluar? </span></a></li>
		<?php
	}else{
	?>
	<li><a href="index.php" title="Home">Home</a></li>
<li><a href="#" title="Profile">Profil</a></li>

<li><a href="?pg=list_outlet">Import Data Outlet</a></li>
<li><a href="logout.php" title="Keluar">Logout<span class="rov"> Apa anda Ingin keluar? </span></a></li>
	<?php
	}
?>