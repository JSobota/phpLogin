<?php
	include 'dbh.php';

	$first = $_POST['first'];
	$last = $_POST['last'];
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];

	echo $first."<br>";
	echo $last."<br>";
	echo $uid."<br>";
	echo $pwd."<br>";

	var_dump($_POST);
	die();
?>