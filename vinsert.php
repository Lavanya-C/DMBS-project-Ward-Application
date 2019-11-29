<?php
$vid = $_POST['vid'];
$vname=$_POST['vname'];
$vage=$_POST['vage'];
$vdob=$_POST['vdob'];
$wid=$_POST['wid'];

$username = 'root';
$host = 'localhost';
$password = '';
$db = 'community';

$conn = new mysqli($host,$username,$password,$db);

if(mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}
else {
    $SELECT = "SELECT voterid from voter where voterid = ? Limit 1";
    $INSERT = "INSERT into voter values(?,?,?,?,?)";

    $stmt = $conn->prepare($SELECT);
    $stmt->bind_param("i",$vid);
    $stmt->execute();
    $stmt->bind_result($vid);
    $stmt->store_result();
    $rnum = $stmt->num_rows;
    if($rnum==0) {
        $stmt->close();

         $stmt = $conn->prepare($INSERT);
    $stmt->bind_param("isisi",$vid,$vname,$vage,$vdob,$wid);
    $stmt->execute();
        echo "Record inserted successfully";
    } else {
        echo "Voter already registered";
    }
    $stmt->close();
    $conn->close();
}
?>
