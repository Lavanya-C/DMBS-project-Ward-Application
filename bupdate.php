<?php
include_once('db.php');
?>
<?php
if(isset($_POST['submit']))
{
    $bid = $_POST['bid'];
    $name = $_POST['name'];
    $value = $_POST['value'];
    $sql = "UPDATE welfare SET $name='$value' WHERE billid='$bid'";
    $res = mysqli_query($conn,$sql);
    echo "<meta http-equiv='refresh' content='0;url=adminpage.php'>";
}
?>
