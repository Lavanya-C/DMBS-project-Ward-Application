<!doctype html>
<html>
<head>
    <title>View Welfare</title>
    <link rel = "stylesheet" type = "text/css" href = "bview.css">
    </head>
<body>
    <table>
    <tr>
        <th>Bill ID</th>
        <th>Candidate Id</th>
        <th>Ward ID</th>
        <th>Bill Name</th>
        <th>Sanctioned Amount</th>
        <th>Spent Amount</th>
        <th>Succes Rate</th>
        <th>Bill Type</th>
        <th>Bill On</th>
        <th>Feedback</th>
     </tr>
<?php
    $conn = mysqli_connect("localhost","root","","community");
        if($conn-> connect_error) {
         die("Connection Failed:". $conn-> connect_error);
        }
        $sql = "SELECT  billid,candidateid,wardid,bname,sanctioned_amount,spent_amount,success_percent,bill_type,bill_on,feedback from welfare";
        $result = $conn-> query($sql);
        if($result-> num_rows > 0) {
            while($row = $result-> fetch_assoc()) {
                echo "<tr><td>" . $row["billid"] . "</td><td>" . $row["candidateid"] . "</td><td>" . $row["wardid"] . "</td><td>" . $row["bname"] . "</td><td>" . $row["sanctioned_amount"] . "</td><td>" . $row["success_percent"] . "</td><td>" . $row["bill_type"] ."</td><td>" . $row["bill_on"] . "</td><td>" . $row["feedback"] . "</td></tr>";
            }
            echo "</table>";
        }
        else {
            echo "0 result";
        }
    $conn-> close();
?>
    </table>
        <br><br><center><input class = "but1" type="button" value="BACK" onclick="window.location.href='voterpage.html'"></center>

    </body>
</html>
