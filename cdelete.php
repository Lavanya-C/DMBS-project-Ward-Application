<?php
include_once('db.php');
?>
<?php
if(isset($_POST['cid']))
{
    $cid = $_POST['cid'];
    $sql = "DELETE FROM candidate WHERE candidateid='$cid'";
    $res = mysqli_query($conn,$sql) or die("Failed".mysqli_error());
    echo "<meta http-equiv='refresh' content='0;url=adminpage.php'>";
}
?>
