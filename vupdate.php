<?php
include_once('db.php');
?>
<?php
if(isset($_POST['vid']))
{
    $vid = $_POST['vid'];
    $name = $_POST['name'];
    $value = $_POST['value'];
    $sql = "UPDATE voter SET $name='$value' WHERE voterid='$vid'";
    $res = mysqli_query($conn,$sql);
    echo "<meta http-equiv='refresh' content='0;url=adminpage.php'>";
}
?>
