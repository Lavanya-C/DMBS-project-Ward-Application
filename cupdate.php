<?php
include_once('db.php');
?>
<?php
if(isset($_POST['cid']))
{
    $cid = $_POST['cid'];
    $name = $_POST['name'];
    $value = $_POST['value'];
    $sql = "UPDATE candidate SET $name='$value' WHERE candidateid='$cid'";
    $res = mysqli_query($conn,$sql);
    echo "<meta http-equiv='refresh' content='0;url=adminpage.php'>";
}
?>
