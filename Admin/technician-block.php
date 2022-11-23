<?PHP 
include '../_dbconnect.php';

mysqli_query($conn, "update  technician_registration set status ='0' where SN ='".$_GET['SN']."'" );
header('location:View_Technicians.php');

?>