<?php
// if(isset($_FILES['photo'])){
//     //  echo "<pre>";
//     //  print_r($_FILES);
//     //  echo "</pre>";

//     $file_name=$_FILES['photo']['name'];
//     $file_tmp=$_FILES['photo']['tmp_name'];
//     $file_size=$_FILES['photo']['size'];
//     $file_type=$_FILES['photo']['type'];

// move_uploaded_file($file_tmp,"file/".$file_name);

// if($file_size>80000){
//     echo "uploding image is a max size";
//     header("name:monu.php");
// }

// }

//echo "<img src='file/".$file_name."'>";

if(isset($_POST['fname']) && !empty($_POST['fname'])){
    $fnames=isset($_POST['fname']) ?$_POST['fname'] : "";

    echo "<br>";
    $lnames=isset($_POST['lname']) ?$_POST['lname']  : "";
    echo "successfully updated..!";
}


    

?>