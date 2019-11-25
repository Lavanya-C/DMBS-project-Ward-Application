<?php
$con = mysqli_connect('localhost','root','');

if (!$con) {
    echo 'not connected';
}

if (!mysqli_select_db($con, 'adminlogin')) {
    echo 'db not selected';
}

$vid = $_POST['vid'];
$vname = $_POST['vname'];
$age = $_POST['age'];
$dob = $_POST['dob'];
$wid = $_POST['wid'];
$pid = $_POST['pid'];

echo "$cid, $cname ,$status";

$sql = "INSERT INTO voterinsertion (vid,vname,age,dob,wid,pid) VALUES ('$vid','$vname','$age','$dob','$wid','$pid')";

$err = mysqli_query($con, $sql);
if (!$err) {
	echo ("err: $err" . mysqli_error($con));
} else {
	header("Location: http://localhost/adminpage.html"); 
	exit; 
}
?>