<?php
	include "init.php";

	$userid = $_POST['userid'];
	$stmt = $con->prepare("DELETE FROM users WHERE id = ?");
	$stmt->execute(array($userid));