<?php
include "Operations.php";

$bojects=new Operations();

$id=$_POST['id'];
$mydata=$bojects->delete_data($id);

if($mydata){
    $arraydata=['status'=>true ,'message'=>'successfully delete..!'];
}
else{
    $arraydata=['status'=>false ,'message'=>'Unsuccessfully delete..!'];

}
echo json_encode($arraydata);
?>