<?php
include_once('db.php');
?>
<?php
if(isset($_POST['pyid']))
{
    $pyid = $_POST['pyid'];
    $sql = "DELETE FROM party WHERE partyid='$pyid'";
    $res = mysqli_query($conn,$sql) or die("Failed".mysqli_error());
    echo "<meta http-equiv='refresh' content='0;url=adminpage.php'>";
}
?>
