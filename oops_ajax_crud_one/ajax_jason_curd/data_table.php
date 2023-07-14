<?php
include "Comman.php";

$obj=new Comman();
$objjj=$obj->dataAllGet();

echo json_encode($objjj);


?>