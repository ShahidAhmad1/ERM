<?php
include '../_dbconnect.php';
require_once('header.php');
require_once('sidebar.php');
session_start();
$sql = "SELECT * FROM `technician_registration`";
$result = mysqli_query($conn, $sql);



while ($row = mysqli_fetch_assoc($result)) {
    if ($row['Technician_Uname'] == $_SESSION['Technician_Uname']) {
        echo "<div class='rest-section'>";
        echo $row['Technician_Uname'] . " " . $row['Technician_email'] .  $row['Technician_Country'] . " " . $row['Technician_State'] . " " . $row['Technician_District'] . " " . $row['Technician_Address'] . " " . $row['Workshop_Address'] . " " . $row['Technician_Number'] . " " . $row['Technician_Pincode'];

        echo "<br>";
    }

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
    <title>Technician Profile Page</title>
</head>

<body>
</body>

</html>