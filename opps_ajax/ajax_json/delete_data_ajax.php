<?php
include "Operations.php";

$connec=new Operations();

$id=$_REQUEST['id'];
// $object=$connec->data_delete($id);
// print_r($object);
// die();
$qrys="delete from ajax_json where id=$id";
$object=$connec->data_delete($qrys);

if($object){
     $fetchresult=['status'=>true,'message'=>'Successfully deleted..!'];
}
else{
    $fetchresult=['status'=>true,'message'=>'It is not deleted..!'];

}
echo json_encode($fetchresult);


?>