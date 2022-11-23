<?PHP 
include '../_dbconnect.php';

mysqli_query($conn, "update  customer_registration set status ='0' where SN ='".$_GET['SN']."'" );
header('location:View_customers.php');

?>