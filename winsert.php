<?php
$wid = $_POST['wid'];
$wname=$_POST['wname'];
$wnpeo=$_POST['wnpeo'];
$wnpo=$_POST['wnpo'];
$wnho=$_POST['wnho'];
$wnpk = $_POST['wnpk'];
$wnst=$_POST['wnst'];
$wnsch=$_POST['wnsch'];


$username = 'root';
$password = '';
$host = 'localhost';
$db = 'community';

$con = new mysqli($host,$username,$password,$db);

if (mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());
}
else {
    $SELECT = "SELECT wardid from ward where wardid = ? Limit 1";
    $INSERT = "INSERT into ward values(?,?,?,?,?,?,?,?)";

    $stmt = $con->prepare($SELECT);
    $stmt->bind_param("i",$wid);
    $stmt->execute();
    $stmt->bind_result($wid);
    $stmt->store_result();
    $rnum = $stmt->num_rows;
    if($rnum==0) {
        $stmt->close();

         $stmt = $con->prepare($INSERT);
    $stmt->bind_param("isiiiiii",$wid,$wname,$wnpeo,$wnpo,$wnho,$wnpk,$wnst,$wnsch);
    $stmt->execute();
        echo "Record inserted successfully";
    } else {
        echo "Ward already registered";
    }
    $stmt->close();
    $con->close();
}
?>
