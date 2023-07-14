<?php
include "Comman.php";

$obj=new Comman();

$object=$obj->getAllData();

echo json_encode($object);


?>