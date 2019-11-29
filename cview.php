<!doctype html>
<html>
<head>
    <title>View Party</title>
    <link rel = "stylesheet" type = "text/css" href = "cview.css">
    </head>
<body>
    <table>
    <tr>
        <th>Candidate ID</th>
        <th>Party Name</th>
        <th>Status</th>
        <th>Experience</th>
        <th>Efficiency</th>
        <th>Party Id</th>
        <th>Ward Id</th>
     </tr>
<?php
    $conn = mysqli_connect("localhost","root","","community");
        if($conn-> connect_error) {
         die("Connection Failed:". $conn-> connect_error);
        }
        $sql = "SELECT  candidateid,cname,status,experience,efficiency_percent,partyid,wardid from candidate";
        $result = $conn-> query($sql);
        if($result-> num_rows > 0) {
            while($row = $result-> fetch_assoc()) {
                echo "<tr><td>" . $row["candidateid"] . "</td><td>" . $row["cname"] . "</td><td>" . $row["status"] . "</td><td>" . $row["experience"] . "</td><td>" . $row["efficiency_percent"] . "</td><td>" . $row["partyid"] . "</td><td>" . $row["wardid"] . "</td></tr>" ;
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
