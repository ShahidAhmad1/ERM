<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "../_dbconnect.php";
    $Admin_Uname = $_POST["Admin_Uname"];
    $Admin_psw = $_POST["Admin_psw"];
    $Admin_psw_repeat = $_POST["Admin_psw_repeat"];


    if ($Admin_psw == $Admin_psw_repeat) {
        $hash = password_hash($Admin_psw, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `electronic_repairment_data`.`admin_registration` (`Admin_Uname`,`Admin_psw`) VALUES ('$Admin_Uname','$hash')";;
            $result = mysqli_query($conn, $sql);
        if ($result) {
            echo 'Your account is now created and you can login . <a href="Login.php">Login</a> ';
        }
    } else {
        echo "Passwords do not match";
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
    <title>Admin Registration Page</title>
    <link rel="stylesheet" href="../CSS/style.css">

</head>


<body class="body_style">
    <form method="post">

        <h1>Register</h1>
        <label for="Username">Username</label>
        <input class="Technician_input_style" type="text" id="Admin_Uname" name="Admin_Uname" required>

       
        <label for="psw">Password</label>
        <input class="Technician_input_style" type="password" placeholder="Enter Password" name="Admin_psw" id="Admin_psw" required>

        <label for="psw-repeat">Repeat Password</label>
        <input class="Technician_input_style" type="password" placeholder="Repeat Password" name="Admin_psw_repeat" id="Admin_psw_repeat" required>
        <button type="submit" style="margin-left:3px;padding:6px">Register</button>
    </form>
</body>

</html>