<?php
$cid = $_POST['cid'];
$cname=$_POST['cname'];
$csts=$_POST['csts'];
$cexp=$_POST['cexp'];
$ceff=$_POST['ceff'];
$pyid= $_POST['pyid'];
$wid=$_POST['wid'];

$username = 'root';
$password = '';
$host = 'localhost';
$db = 'community';

$con = new mysqli($host,$username,$password,$db);

if (mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());
}
else {
    $SELECT = "SELECT candidateid from candidate where candidateid = ? Limit 1";
    $INSERT = "INSERT into candidate values(?,?,?,?,?,?,?)";

    $stmt = $con->prepare($SELECT);
    $stmt->bind_param("i",$cid);
    $stmt->execute();
    $stmt->bind_result($cid);
    $stmt->store_result();
    $rnum = $stmt->num_rows;
    if($rnum == 0) {
        $stmt->close();

         $stmt = $con->prepare($INSERT);
    $stmt->bind_param("issiiii",$cid,$cname,$csts,$cexp,$ceff,$pyid,$wid);
    $stmt->execute();
        echo "Record inserted successfully";
    } else {
        echo "Candidate already registered";
    }
    $stmt->close();
    $con->close();
}
?>
