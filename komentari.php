<?php

if (isset($_POST['submit'])) {
	include_once 'header.php';

	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$comment = mysqli_real_escape_string($conn, $_POST['comment']);
	$date = mysqli_real_escape_string($conn, $_POST['date']);
}

if ($name != ''  && $comment != '') {

	$sql = "INSERT INTO comments (name, comment, date) VALUES ('$name', '$comment', '$date');";
	mysqli_query($conn, $sql);

	header("Location: /satovi/index.php");
	exit();

}