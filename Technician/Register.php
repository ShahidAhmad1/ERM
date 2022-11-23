<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "../_dbconnect.php";
    $Technician_Uname = $_POST["Technician_Uname"];
    $Technician_email = $_POST["Technician_email"];
    $Technician_psw = $_POST["Technician_psw"];
    $Technician_psw_repeat = $_POST["Technician_psw_repeat"];
    $Technician_Country = $_POST["Technician_Country"];
    $Technician_State = $_POST["Technician_State"];
    $Technician_District = $_POST["Technician_District"];
    $Technician_Address = $_POST["Technician_Address"];
    $Workshop_Address = $_POST["Workshop_Address"];
    $Technician_Number  = $_POST["Technician_Number"];
    $Technician_Pincode = $_POST["Technician_Pincode"];
    $Technician_Type = $_POST["Technician_Type"];

    $existSql = "SELECT * FROM technician_registration WHERE Technician_Uname = '$Technician_Uname'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
 
    if ($numExistRows > 0) {
        echo "Username Already Exists";
    } else {

        if ($Technician_psw == $Technician_psw_repeat) {
            $hash = password_hash($Technician_psw, PASSWORD_DEFAULT);
            // echo "INSERT INTO `Electronic_Repair_Data`.`technician_registration` (`Technician_Uname`,`Technician_email`,`Technician_psw`,`Technician_Country`,`Technician_State`,`Technician_District`,`Technician_Address`,`Workshop_Address`,`Technician_Number`,`Technician_Pincode`,`Technician_Type`,`D&T`) VALUES ('$Technician_Uname','$Technician_email','$hash','$Technician_Country','$Technician_State','$Technician_District', '$Technician_Address','$Workshop_Address','$Technician_Number','$Technician_Pincode','$Technician_Type',current_timestamp())";

            $sql = "INSERT INTO `Electronic_Repair_Data`.`technician_registration` (`Technician_Uname`,`Technician_email`,`Technician_psw`,`Technician_Country`,`Technician_State`,`Technician_District`,`Technician_Address`,`Workshop_Address`,`Technician_Number`,`Technician_Pincode`,`Technician_Type`,`D&T`) VALUES ('$Technician_Uname','$Technician_email','$hash','$Technician_Country','$Technician_State','$Technician_District', '$Technician_Address','$Workshop_Address','$Technician_Number','$Technician_Pincode','$Technician_Type',current_timestamp())";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo 'Your account is now created and you can login . <a href="Login.php">Login</a> ';
            }
        } else {
            echo "Passwords do not match";
        }
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technician Registration Page</title>
    <link rel="stylesheet" href="../CSS/style.css">

</head>


<body class="body_style">
    <form  method="post">

        <h1>Register</h1>
        <label for="Username">Username</label>
        <input class="Technician_input_style" type="text" id="Technician_Uname" name="Technician_Uname" required>

        <label for="Technician_email">Email</label>
        <input class="Technician_input_style" type="text" placeholder="Enter Email" name="Technician_email" id="Technician_email" required>

        <label for="psw">Password</label>
        <input class="Technician_input_style" type="password" placeholder="Enter Password" name="Technician_psw" id="Technician_psw" required>

        <label for="psw-repeat">Repeat Password</label>
        <input class="Technician_input_style" type="password" placeholder="Repeat Password" name="Technician_psw_repeat" id="Technician_psw-repeat" required>

        <label for="Country">Country</label>
        <input class="Customer_input_style" type="text" placeholder="Country" name="Technician_Country" id="Technician_Country" required>

        <label for="State">State</label>
        <input class="Customer_input_style" type="text" id="Technician_State" name="Technician_State" required>

        <label for="District">District</label>
        <input class="Technician_input_style" type="text" id="Technician_District" name="Technician_District" required>


        <label for="Address">Address</label>
        <input class="Technician_input_style" type="text" id="Technician_Address" name="Technician_Address" required><br>


        <label for="Workshop">Workshop Address</label>
        <input class="Technician_input_style" type="text" id="Workshop_Address" name="Workshop_Address" required>

        <label for="Contact number">Contact number:</label>
        <input class="Technician_input_style" type="tel" id="Technician_Number" name="Technician_Number" required>

        <label for="Pin Code">Pin Code:</label>
        <input class="Technician_input_style" type="number" id="Technician_Pincode" name="Technician_Pincode" required>


        <label for="Technician type">Select Technician Type:</label>
        <select name="Technician_Type" id="Technician_Type">
            <option value="Laptop_Technician">Laptop_Technician</option>
            <option value="Mobile_Technician">Mobile_Technician</option>
            <option value="Home_Gadget_Technician">Home_Gadget_Technician</option>
        </select>
        <button type="submit" style="margin-left:3px;padding:6px">Register</button>
    </form>
</body>

</html>