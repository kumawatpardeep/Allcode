<?php
include "Operations.php";

$obj=new Operations();
$datass=$obj->getDataAll();

echo json_encode($datass);
?>