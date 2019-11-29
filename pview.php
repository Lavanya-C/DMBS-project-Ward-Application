<!doctype html>
<html>
<head>
    <title>View Party</title>
    <link rel = "stylesheet" type = "text/css" href = "pview.css">
    </head>
<body>
    <table>
    <tr>
        <th>Party ID</th>
        <th>Party Name</th>
        <th>Number of Candidates</th>
        <th>Status</th>
        <th>Success in Percent</th>
     </tr>
<?php
    $conn = mysqli_connect("localhost","root","","community");
        if($conn-> connect_error) {
         die("Connection Failed:". $conn-> connect_error);
        }
        $sql = "SELECT  partyid,pname,no_of_candidates,status,success_in_percent from party";
        $result = $conn-> query($sql);
        if($result-> num_rows > 0) {
            while($row = $result-> fetch_assoc()) {
                echo "<tr><td>" . $row["partyid"] . "</td><td>" . $row["pname"] . "</td><td>" . $row["no_of_candidates"] . "</td><td>" . $row["status"] . "</td><td>" . $row["success_in_percent"] . "</td></tr>" ;
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
