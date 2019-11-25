<?php
$con = mysqli_connect('localhost','root','');

if (!$con) {
    echo 'not connected';
}

if (!mysqli_select_db($con, 'adminlogin')) {
    echo 'db not selected';
}

$adminid = $_POST['adminid'];
$wardno = $_POST['wardno'];
$password = $_POST['password'];

// echo "$adminid, $wardno $password";

$sql = "INSERT INTO admi (adminid, wardno, password) VALUES ('$adminid', '$wardno', '$password')";

$err = mysqli_query($con, $sql);
if (!$err) {
	echo ("err: $err" . mysqli_error($con));
} else {
	header("Location: http://localhost/adminpage.html"); 
	exit; 
}
?>