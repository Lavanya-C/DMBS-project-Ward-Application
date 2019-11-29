<?php
    $username = 'root';
    $password = '';
    $host = 'localhost';
    $db = 'community';
    $con = mysqli_connect($host ,$username , $password , $db);
        $wardid=$_POST['wid'];
        $voterid=$_POST['vid'];

if(!empty($wardid) && !empty($voterid)){
    $sql = " select * from voter where wardid = '".$wardid."' and voterid = '".$voterid."' Limit 1";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

    if($row['wardid'] == $wardid && $row['voterid'] == $voterid){
        header("Location:voterpage.html");
    }
    else{
        echo "Invalid Ward ID or Voter ID";
    }
}
else{
    echo "Fill Ward ID and Voter";
}
?>
