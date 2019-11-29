<?php
    $username = 'root';
    $password = '';
    $host = 'localhost';
    $db = 'community';
    $con = mysqli_connect($host ,$username , $password , $db);
        $user=$_POST['email'];
        $pass=$_POST['password'];

if(!empty($user) && !empty($pass)){
    $sql = " select * from admin where adminid = '".$user."' and  password = '".$pass."' Limit 1";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

    if($row['adminid'] == $user && $row['password'] == $pass){
        header("Location:adminpage.php");
    }
    else{
        echo "Invalid Admin ID or Password";
    }
}
else{
    echo "Fill Admin ID and Password";
}
?>
