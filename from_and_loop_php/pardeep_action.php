<?php

if(isset($_POST['fname']) && !empty($_POST['fname'])){

    $fnames= isset($_POST['fname']) ?$_POST['fname'] : "";
      
    echo "<br>";

    $lnames= isset($_POST['lname']) ?$_POST['lname'] : "";
    echo "successfuly update";
}

// if(isset($_POST['fname']) && !empty($_POST['fname'])){
//     $fnames=isset($_POST['fname']) ?$_POST['fname'] : "";

//     echo "<br>";
//     $lnames=isset($_POST['lname']) ?$_POST['lname']  : "";
//     echo "successfully updated..!";
// }

?>