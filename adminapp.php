
<?php
include("connection.php");
$ano=$_GET['acno'];
$sqlvar="update custactab set custapp='Y' where acno=$ano";
$result=$conn->query($sqlvar);
if($result){
header('location: admincustapp.php');
}
?>


