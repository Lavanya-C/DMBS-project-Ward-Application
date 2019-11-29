<?php
include_once('db.php');
?>
<?php
if(isset($_POST['wid']))
{
    $wid = $_POST['wid'];
    $name = $_POST['name'];
    $value = $_POST['value'];
    $sql = "UPDATE ward SET $name='$value' WHERE wardid='$wid'";
    $res = mysqli_query($conn,$sql);
    echo "<meta http-equiv='refresh' content='0;url=adminpage.php'>";
}
?>
