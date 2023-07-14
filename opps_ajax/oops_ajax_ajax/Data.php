<?php
include "Opera.php";

$obj=new Opera();
// $datass=$obj->allData();

$id=$_POST['id'];
$datadddd=$obj->delete_data($id);

if($datadddd){
    $arraydata=['status'=>true , 'message'=>'successfully deleteed..!'];
}
else{
    $arraydata=['status'=>false , 'message'=>'unsuccessfully deleteed..!'];

}

echo json_encode($arraydata);
// $srno=1;

// $return_arr = array();

// $query=$datass;

// // $result = mysqli_query($con,$query);

// foreach($query as $querss){
//     $id = $querss['id'];
//     $name  = $querss['name'];
//     $email = $querss['email'];
//     $mobile = $querss['mobile'];

//     $return_arr[] = array("id" => $id,
//                     "name" => $name,
//                     "email" => $email,
//                     "mobile" => $mobile);
// }

// // Encoding array in JSON format
// echo json_encode($return_arr); 

?>