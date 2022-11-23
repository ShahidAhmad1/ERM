<?php
include '../_dbconnect.php';
require_once('header.php');
require_once('sidebar.php');

$sql = "SELECT * FROM `technician_registration`";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
// echo "Records found in the DataBase:$num<br><br>";



echo "<div class='rest-section'>";
echo "<h2 class='page-info'>Technicians List</h2>";
if ($num > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>Technician Username</th>";
    echo "<th>Technician Email</th>";
    echo "<th>Technician Country</th>";
    echo "<th>Technician State</th>";
    echo "<th>Technician District</th>";
    echo "<th>Technician Address</th>";
    echo "<th>Workshop Address</th>";
    echo "<th>Technician Number</th>";
    echo "<th>Technician Pincode</th>";
    echo "<th>Technician Type</th>";
    echo "<th>Status</th>";
    echo "<th>Block</th>";
    echo "<th>Unblock</th>";
    echo "<th>All Details</th>";


    echo "</tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['Technician_Uname'] . "</td>";
        echo "<td>" . $row['Technician_email'] . "</td>";
        echo "<td>" . $row['Technician_Country'] . "</td>";
        echo "<td>" . $row['Technician_State'] . "</td>";
        echo "<td>" . $row['Technician_District'] . "</td>";
        echo "<td>" . $row['Technician_Address'] . "</td>";
        echo "<td>" . $row['Workshop_Address'] . "</td>";
        echo "<td>" . $row['Technician_Number'] . "</td>";
        echo "<td>" . $row['Technician_Pincode'] . "</td>";
        echo "<td>" . $row['Technician_Type'] . "</td>";

      
          if($row['status']==1)
          {
            echo "<td>" . "Active" . "</td>";

          }else 
          {
            echo "<td>" . "Block" . "</td>";
          }


        
        
        

        echo "<td>" . "<a href='technician-block.php?SN=$row[SN]'> Block </a>" . "</td>";

        echo "<td>" . "<a href='technician-unblock.php?SN=$row[SN]'>Unblock</a>" . "</td>";

        echo "<td>" . "<a href='technician-more-details.php?SN=$row[SN]'>Click here</a>" . "</td>";



        echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
}
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Technicians</title>
    <link rel="stylesheet" href="../CSS/style.css">

</head>


<body>

</body>

</html>