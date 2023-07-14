<?php
include "Operations.php";

$aaa=new Operations();
$ddd=$aaa->getAllData();

echo json_encode($ddd);



?>