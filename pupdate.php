<?php
include_once('db.php');
?>
<?php
if(isset($_POST['pyid']))
{
    $pyid = $_POST['pyid'];
    $name = $_POST['name'];
    $value = $_POST['value'];
    $sql = "UPDATE party SET $name='$value' WHERE partyid='$pyid'";
    $res = mysqli_query($conn,$sql);
    echo "<meta http-equiv='refresh' content='0;url=adminpage.php'>";
}
?>
