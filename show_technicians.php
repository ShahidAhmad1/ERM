<?php
require_once('_dbconnect.php');
require_once('header.php');
require_once('footer.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kjl</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    </head>

<?php
$sql = "SELECT * FROM `technician_registration`";
$result = mysqli_query($conn, $sql); 



// while ($row = mysqli_fetch_assoc($result)) {
   
//         echo "<div class='rest-section'>";
//         echo $row['Technician_Uname'] . " " . $row['Technician_email'] .  $row['Technician_Country'] . " " . $row['Technician_State'] . " " . $row['Technician_District'] . " " . $row['Technician_Address'] . " " . $row['Workshop_Address'] . " " . $row['Technician_Number'] . " " . $row['Technician_Pincode'];

//         echo "<br>";
    

//     echo "</div>";
// }



?>


<body>
    <div class="container"></div>
    <?php while ($row = mysqli_fetch_assoc($result)) 
    {?>
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"> <?php echo $row['Technician_Uname'] ?></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
           <?php  echo "<a href='profile.php?sn=$row[SN]' class='btn btn-primary'>View more</a>"; ?>
        </div>
    </div>
   <?php } 
   ?>
   
</body>

</html>

<style>
    .card
    {
        display: inline-block;
        margin: 30px;
    }
</style>