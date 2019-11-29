<?php
include_once('db.php');
?>
<?php
if(isset($_POST['wid']))
{
    $wid = $_POST['wid'];
    $sql = "DELETE FROM ward WHERE wardid='$wid'";
    $res = mysqli_query($conn,$sql) or die("Failed".mysqli_error());
    echo "<meta http-equiv='refresh' content='0;url=adminpage.php'>";
}
?>
