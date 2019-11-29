<!doctype html>
<html>
<head>
    <title>View Voter</title>
    <link rel = "stylesheet" type = "text/css" href = "vview.css">
    </head>
<body>
    <table>
    <tr>
        <th>Voter ID</th>
        <th>Voter Name</th>
        <th>Age</th>
        <th>Date of Birth</th>
        <th>Ward Id</th>
    </tr>
<?php
    $conn = mysqli_connect("localhost","root","","community");
        if($conn-> connect_error) {
         die("Connection Failed:". $conn-> connect_error);
        }
        $sql = "CALL viewVoter()";
        $result = $conn-> query($sql);
        if($result-> num_rows > 0) {
            while($row = $result-> fetch_assoc()) {
                echo "<tr><td>" . $row["voterid"] . "</td><td>" . $row["vname"] . "</td><td>" . $row["age"] . "</td><td>" . $row["date_of_birth"] . "</td><td>" . $row["wardid"] . "</td></tr>";
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
