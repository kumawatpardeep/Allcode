<?php
include "Comman.php";

$obj=new Comman;


$haloo=$obj->getAllData();

echo json_encode($haloo);

?>