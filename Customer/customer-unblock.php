<?PHP 
include '../_dbconnect.php';

mysqli_query($conn, "update  customer_registration set status ='1' where SN ='".$_GET['SN']."'" );
header('location:View_Customers.php');

?>