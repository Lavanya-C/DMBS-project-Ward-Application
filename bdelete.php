<?php
include_once('db.php');
?>
<?php
if(isset($_POST['bid']))
{
    $bid = $_POST['bid'];
    $sql = "DELETE FROM welfare WHERE billid='$bid'";
    $res = mysqli_query($conn,$sql) or die("Failed".mysqli_error());
    echo "<meta http-equiv='refresh' content='0;url=adminpage.php'>";
}
?>
