<?php
$pyid = $_POST['pyid'];
$pname=$_POST['pname'];
$pnoc=$_POST['pnoc'];
$psts=$_POST['psts'];
$psuc = $_POST['psuc'];

$username = 'root';
$password = '';
$host = 'localhost';
$db = 'community';

$con = new mysqli($host,$username,$password,$db);

if (mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());
}
else {
    $SELECT = "SELECT partyid from party where partyid = ? Limit 1";
    $INSERT = "INSERT into party values(?,?,?,?,?)";

    $stmt = $con->prepare($SELECT);
    $stmt->bind_param("i",$pyid);
    $stmt->execute();
    $stmt->bind_result($pyid);
    $stmt->store_result();
    $rnum = $stmt->num_rows;
    if($rnum==0) {
        $stmt->close();

         $stmt = $con->prepare($INSERT);
    $stmt->bind_param("isisi",$pyid,$pname,$pnoc,$psts,$psuc);
    $stmt->execute();
        echo "Record inserted successfully";
    } else {
        echo "Party already registered";
    }
    $stmt->close();
    $con->close();
}
?>
