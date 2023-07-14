<?php
// print_r($_REQUEST);
include "Operations.php";

$obj=new Operations();
$data=$obj->getAllData();
// echo "<pre>";
// print_r($data);
echo json_encode($data);
die();
$myappneddata="";
$srno=1;
foreach($data as $datas){
    $myappneddata.='<tr>';
    $myappneddata.='<td>'.$srno.'</td>';
    $myappneddata.='<td>'.$datas->name.'</td>';
    $myappneddata.='<td>'.$datas->email.'</td>';
    $myappneddata.='<td>'.$datas->mobile.'</td>';
    $myappneddata.='</tr>';

    $srno++;
}
echo $myappneddata;
?>