<?php
include "Operations.php";

$objj=new Operations();

$id=$_POST['id'];
$objjjj=$objj->delete_data($id);

if($objjjj){
    $arrayresultss=['status'=>true,'message'=>'successfully delete..!'];
}
else{
    $arrayresultss=['status'=>true,'message'=>'Do not delete..!'];

}
echo json_encode($arrayresultss);


?>