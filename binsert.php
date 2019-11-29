<?php
$bid = $_POST['bid'];
$cid = $_POST['cid'];
$wid = $_POST['wid'];
$bname=$_POST['bname'];
$bsac=$_POST['bsac'];
$bspn=$_POST['bspn'];
$bsuc=$_POST['bsuc'];
$btyp = $_POST['btyp'];
$bon=$_POST['bon'];
$bfed=$_POST['bfed'];


$username = 'root';
$password = '';
$host = 'localhost';
$db = 'community';

$con = new mysqli($host,$username,$password,$db);

if (mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());
}
else {
    $SELECT = "SELECT billid from welfare where billid = ? Limit 1";
    $INSERT = "INSERT into welfare values(?,?,?,?,?,?,?,?,?,?)";

    $stmt = $con->prepare($SELECT);
    $stmt->bind_param("i",$bid);
    $stmt->execute();
    $stmt->bind_result($bid);
    $stmt->store_result();
    $rnum = $stmt->num_rows;
    if($rnum==0) {
        $stmt->close();

         $stmt = $con->prepare($INSERT);
    $stmt->bind_param("iiisiiisss",$bid,$cid,$wid,$bname,$bsac,$bspn,$bsuc,$btyp,$bon,$bfed);
    $stmt->execute();
        echo "Record inserted successfully";
    } else {
        echo "Bill already registered";
    }
    $stmt->close();
    $con->close();
}
?>
