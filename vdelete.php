<?php
include_once('db.php');
?>
<?php
if(isset($_POST['vid']))
{
    $vid = $_POST['vid'];
    $sql = "DELETE FROM voter WHERE voterid='$vid'";
    $res = mysqli_query($conn,$sql) or die("Failed".mysqli_error());
    echo "<meta http-equiv='refresh' content='0;url=adminpage.php'>";
}
?>
