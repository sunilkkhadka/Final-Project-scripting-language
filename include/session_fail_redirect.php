<?php
if(!isset($_SESSION['login']) || $_SESSION['login'] !="login" ) {
	echo "<script type= 'text/javascript'>alert('You have no permission to visit this page.');</script>";
	header( "Location: index.php" );
}
?>