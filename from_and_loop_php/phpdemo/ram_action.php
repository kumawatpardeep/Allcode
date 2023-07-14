<?php
echo "<pre>";
print_r($_REQUEST);

// echo "<br>";
   
// echo "<pre>";
// print_r($_FILES['photo']);


// $file_name =isset($_FILES['photo']['name']);# && !empty($_FILES['photo']['name']) ?$_FILES['photo']['name']: "";
// $file_name = "text.png";
// $file_tmpname = isset($_FILES['photo']['tmp_name']); #&& !empty($_FILES['photo']['tmp_name']) ?$_FILES['photo']['tmp_name']: "";
// $file_size = isset($_FILES['photo']['size']); #&& !empty($_FILES['photo']['size']) ? $_FILES['photo']['size']: "";

//  $file_type = isset($_FILES['photo']['type']); #&& !empty($_FILES['photo']['type']) ? $_FILES['photo']['type']: "";



// // if($file_size>71000){
    
// //     echo "uploded file is max size";
// //     header("lacation:ram_action.php");
// // }else{
// //     echo "uploded file is max size";
// // }


// if( move_uploaded_file($file_tmpname,'file/'.$file_name)){
//     echo "successful";
// }else{
//     echo "uploded";
// }
 

//  echo "<img src= 'file/".$file_name."'>";

// die;







// echo "hello";
// $man = array('fname'=>'pankaj','village'=>'bala ka bass','post'=>'birmi');
// $rrr = array('pardeep','panakj','paras','babulal','monu','hanumaan');
// echo "<pre>";

// print_r($_REQUEST);


$fnames =isset($_GET['fname']) && !empty($_GET['fname']) ? $_GET['fname']: "";
$lnames =isset($_GET['lname']) && !empty($_GET['lname']) ? $_GET['lname']: "";
$emails =isset($_GET['email']) && !empty($_GET['email']) ? $_GET['email']: "";

echo "<pre>";

echo "<b>" .$fnames." ".$lnames." ".$emails. "</b>"
//echo "<pre>";
 //echo "<br>";

 //print_r($_REQUEST['city']);






?>