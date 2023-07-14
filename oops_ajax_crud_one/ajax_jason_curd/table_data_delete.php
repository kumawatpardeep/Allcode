<?php
include "Comman.php";
$obj=new Comman();
$id=$_POST['id'];

$objjjj=$obj->delete_data($id);

if($objjjj){
    $arrayresultss=['status'=>true,'message'=>'Successfully delete..!'];
}
else{
    $arrayresultss=['status'=>false,'message'=>'No..!'];

}
echo json_encode($arrayresultss);

?>