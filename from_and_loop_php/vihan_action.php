<?php

// echo "<pre>";
// print_r($_POST);
if(isset($_POST['fname']) && !empty($_POST['fname'])){
    $fname=isset($_POST['fname']) ?$_POST['fname'] : "";
   echo "<br>";

    $lname=isset($_POST['lname']) ?$_POST['lname'] : "";
    echo "successfuly update..";

}

    // echo "<br>";
    //   $file_name=isset($_FILES['photo']): "";
    // //  $file_tmpname=isset($_FILES['photo']['tmp_name']): "";
    // //  $file_size=isset($_FILES['photo']['size']): "";
    // //  $file_type=isset($_FILES['photo']['type']): "";

    //  if(move_uploaded_file($file_tmpname,"vihan_action.php/".$file_name)){
    //     echo "successfully uploded..";
    //  },
    //  echo "<img src='vihan_action.php/".$file_name."'>";
    // die;
    // $nums=0;
    // $tables ="";
    // $tables.='<table border="1" cellspacing="0" cellpading="0">';
    // for($nums;$nums<10;$nums++){
    //     $tables.='<tr><td>'.$nums.'</td></tr>';
        
    // }

    



?>