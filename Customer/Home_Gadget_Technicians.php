<?php
session_start();
include '../_dbconnect.php';
require_once('header.php');
require_once('sidebar.php');
$_Technician_sql = "SELECT * FROM `technician_registration`";
$Technician_result = mysqli_query($conn, $_Technician_sql);
$Customer_sql = "SELECT Customer_Pincode FROM `customer_registration` where Customer_name='{$_SESSION['Customer_name']}'";
$Customer_result = mysqli_query($conn, $Customer_sql);
$Customer_row = mysqli_fetch_assoc($Customer_result);
echo "<div class='rest-section'>";
echo "Showing technicians nearby you <br><br>";
echo "<table>";
echo "<tr>";
echo "<th>Technician_Uname</th>";
echo "<th>Technician_email</th>";
echo "<th>Technician_Country</th>";
echo "<th>Technician_State</th>";
echo "<th>Technician_District</th>";
echo "<th>Technician_Address</th>";
echo "<th>Workshop_Address</th>";
echo "<th>Technician_Number</th>";
echo "<th>Technician_Pincode</th>";
echo "<th>Technician_Type</th>";
echo "</tr>";

while ($Technician_row = mysqli_fetch_assoc($Technician_result)) {

    if ($Customer_row['Customer_Pincode'] == $Technician_row['Technician_Pincode'] and $Technician_row['Technician_Type'] == "Home_Gadget_Technician") {
        echo "<tr>";
        echo "<td>" . $Technician_row['Technician_Uname'] . "</td>";
        echo "<td>" . $Technician_row['Technician_email'] . "</td>";
        echo "<td>" . $Technician_row['Technician_Country'] . "</td>";
        echo "<td>" . $Technician_row['Technician_State'] . "</td>";
        echo "<td>" . $Technician_row['Technician_District'] . "</td>";
        echo "<td>" . $Technician_row['Technician_Address'] . "</td>";
        echo "<td>" . $Technician_row['Workshop_Address'] . "</td>";
        echo "<td>" . $Technician_row['Technician_Number'] . "</td>";
        echo "<td>" . $Technician_row['Technician_Pincode'] . "</td>";
        echo "<td>" . $Technician_row['Technician_Type'] . "</td>";
        echo "</tr>";
    }
}

echo "</table>";
echo "<br";
echo "</div>";




$conn->close();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Gadget Technicians</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
    <a href="Home_Gad_Tech_other_results.php">Show other results</a><br>
    <small>Matching your District</small>
</body>

</html>