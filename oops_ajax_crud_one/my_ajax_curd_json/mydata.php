<?php
include "Operations.php";
$obj=new Operations();

$ojjj=$obj->getAllData();


echo json_encode($ojjj);


?>