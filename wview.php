<!doctype html>
<html>
<head>
    <title>View Ward</title>
    <link rel = "stylesheet" type = "text/css" href = "wview.css">
    </head>
<body>
    <table>
    <tr>
        <th>Ward ID</th>
        <th>Ward Name</th>
        <th>Number of People</th>
        <th>Number on Poll</th>
        <th>Number of Houses</th>
        <th>NUmber of Parks</th>
        <th>Number of Streets</th>
        <th>Number of Schools</th>
        <th>Number of Schools</th>
     </tr>
<?php
    $conn = mysqli_connect("localhost","root","","community");
        if($conn-> connect_error) {
         die("Connection Failed:". $conn-> connect_error);
        }
        $sql = "SELECT  wardid,wname,no_of_people,no_on_poll,no_of_houses,no_of_parks,no_of_streets,no_of_schools from ward";
        $result = $conn-> query($sql);
        if($result-> num_rows > 0) {
            while($row = $result-> fetch_assoc()) {
                echo "<tr><td>" . $row["wardid"] . "</td><td>" . $row["wname"] . "</td><td>" . $row["no_of_people"] . "</td><td>" . $row["no_on_poll"] . "</td><td>" . $row["no_of_houses"] . "</td><td>" . $row["no_of_parks"] . "</td><td>" . $row["no_of_streets"] ."</td><td>" . $row["no_of_schools"] . "</td></tr>";
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
