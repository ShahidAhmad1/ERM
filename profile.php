<?php
require_once('_dbconnect.php');
require_once('header.php');
require_once('footer.php');
$sql = "SELECT * FROM technician_registration where SN ='" . $_GET['sn'] . "'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// echo $row['Technician_Uname'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script src="https://kit.fontawesome.com/b5ccaa8465.js" crossorigin="anonymous"></script>
</head>

<body>



  <!-- <div class="container-fluid bg-dark ">

    <p class="text-white fs-3 fw-bold text-center py-2"><label for="" class="text-warning">Electronic</label> Dashboard</p>

  </div> -->


    <div class="container">
    
      <div class=" text-white " style="text-align: center;" id="content2">

        <h style="font-size: 50px; padding-right: auto; padding-left: auto;" class=" text-muted"> Profile </h>
    
          <div class=" p-3 mt-5 m-0  ">

 
 <table class="table table-md-12  table-hover table-striped  border m-0  table-bordered m-0" style="text-transform: capitalize;"  >

       

      <tr class=""><td  class="">Name</td> <td class=''><?php echo $row['Technician_Uname'] ?></td> <td class='' style='text-align:center;' rowspan='3'> <img src='https://www.shreebalajihospital.com/assets/img/dr-pro/demo.jpg'>  </td></tr>

     <tr class=""><td  class="">Workshop Address </td><td class=''><?php echo $row['Workshop_Address'] ?></td></tr>

     <tr class=""><td  class="">District</td><td class=''><?php echo $row['Technician_District'] ?></td></tr>

     <tr class=""><td  class="">Email</td> <td class='' colspan='2'><?php echo $row['Technician_email'] ?></td></tr>
     <tr class=""><td  class="">Mobile Number</td> <td class='' colspan='2'><?php echo $row['Technician_Number'] ?></td></tr>
     <!-- <button type="button" class="btn btn-link"><a href="Book_Technician.php">Book now</a></button> -->

       </table>


       <button type="button" class="btn btn-light"><a href="Book_Technician.php">Book now</a></button>

 </div>

   

      </div>
    </div>
  
  
</body>





</html>

<style type="text/css">
  img
  {
    height: 200px;
    width: 200px;
    border-radius: 50%;
  }

</style>

