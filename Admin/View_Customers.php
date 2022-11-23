<?php
include '../_dbconnect.php';
require_once('header.php');
require_once('sidebar.php');
$sql = "SELECT * FROM `customer_registration`";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
// echo "Records found in the DataBase:$num<br><br>";
if ($num > 0) {
    echo "<div class='rest-section'>";
    echo "<h2 class='page-info'>Customers List</h2>";

    echo "<table>";
    echo "<tr>";
    echo "<th>Customer Name</th>";
    echo "<th>Customer Email</th>";
    echo "<th>Customer Country</th>";
    echo "<th>Customer State</th>";
    echo "<th>Customer District</th>";
    echo "<th>Customer Address</th>";
    echo "<th>Customer Number</th>";
    echo "<th>Customer Pincode</th>";
    echo "<th>Status</th>";
    echo "<th>Block</th>";
    echo "<th>Unblock</th>";
    echo "<th>All Details</th>";

    echo "</tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['Customer_name'] . "</td>";
        echo "<td>" . $row['Customer_email'] . "</td>";
        echo "<td>" . $row['Customer_Country'] . "</td>";
        echo "<td>" . $row['Customer_State'] . "</td>";
        echo "<td>" . $row['Customer_District'] . "</td>";
        echo "<td>" . $row['Customer_Address'] . "</td>";
        echo "<td>" . $row['Customer_Number'] . "</td>";
        echo "<td>" . $row['Customer_Pincode'] . "</td>";

        if ($row['status'] == 1) {
            echo "<td>" . "Active" . "</td>";
        } else {
            echo "<td>" . "Block" . "</td>";
        }






        echo "<td>" . "<a href='customer-block.php?SN=$row[SN]'> Block </a>" . "</td>";

        echo "<td>" . "<a href='customer-unblock.php?SN=$row[SN]'>Unblock</a>" . "</td>";

        echo "<td>" . "<a href='customer-more-details.php?SN=$row[SN]'>Click here</a>" . "</td>";

        // echo "<td>" . "<a href='customer-block.php?SN=$row[SN]'> Block </a>" . "</td>";

        echo "</tr>";
    }
    echo "</table>";
    echo "</div>";

    // while ($row = mysqli_fetch_assoc($result)) {

    //     echo $row['SN'] . "    " . $row['Customer_name'] . "    " . $row['Customer_email'] . "    " . $row['Customer_psw'] . "    " . $row['Customer_Country'] . "    " . $row['Customer_State'] . "    " . $row['Customer_District'] . "    " . $row['Customer_Address'] . "    " . $row['Customer_Number'] . "    " . $row['Customer_Pincode'];

    //     echo "<br>";
    //     echo "<br>";
    // }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Customers</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>

</body>

</html>