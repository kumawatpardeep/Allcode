<?php
echo "<pre>";
print_r($_POST);
echo "<br>";

if(isset($_POST['email']) && !empty($_POST['email'])){

    $emails=isset($_POST['email']) ?$_POST['email']: "";
    echo "<br>";
    $pwds=isset($_POST['pwd']) ?$_POST['email']: "";

    echo "successfully uploed..";
}



?>