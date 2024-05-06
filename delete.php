<?php
	
	include 'dbconfig.php';
 
	$sql = "DELETE FROM usuarios WHERE rowid = '".$_GET['id']."'";
	$db->query($sql);
 
	header('location:index.php');
?>