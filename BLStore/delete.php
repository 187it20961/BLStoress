<?php
	include "connect.php";
	$sql = "delete from sanpham where masanpham = '$_GET[masanpham]'";
	mysqli_query($conn,$sql);
	header('location:index.php');
?>