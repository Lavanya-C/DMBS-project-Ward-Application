<?php
$con = mysqli_connect('localhost','root','');

if (!$con) {
    echo 'not connected';
}

if (!mysqli_select_db($con, 'adminlogin')) {
    echo 'db not selected';
}

$wid = $_POST['wid'];
$wname = $_POST['wname'];
$nop = $_POST['nop'];
$nopl = $_POST['nopl'];
$noh = $_POST['noh'];
$nopks = $_POST['nopks'];
$nostr = $_POST['nostr'];
$noskl = $_POST['noskl'];

echo "$cid, $cname ,$status";

$sql = "INSERT INTO wardinsertion (wid,wname,nop,nopl,noh,nopks,nostr,noskl) VALUES ('$wid','$wname','$nop','$nopl','$noh','$nopks','$nostr','$noskl')";

$err = mysqli_query($con, $sql);
if (!$err) {
	echo ("err: $err" . mysqli_error($con));
} else {
	header("Location: http://localhost/adminpage.html"); 
	exit; 
}
?>