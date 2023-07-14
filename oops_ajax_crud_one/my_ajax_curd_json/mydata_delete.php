<?php
include "Operations.php";
$obj=new Operations();

$id=$_POST['id'];
$reult=$obj->delete_data($id);

if($reult){
    $array=['status'=>true,'message'=>'successfully delete'];
}
else{
    $array=['status'=>false,'message'=>'no delete'];

}
echo json_encode($array);

?>