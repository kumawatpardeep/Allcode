<?php
include "Operations.php";
$objOperations=new Operations();
$myData=$objOperations->getAllData();

echo json_encode($myData);//array or object will be supply here 



?>