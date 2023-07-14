<?php
echo "<pre>";
print_r($_POST);
echo "<br>";

if(isset($_POST['email1']) && !empty($_POST['email1'])){

    $emails=isset($_POST['email1']) ?$_POST['email1']: "";
    echo "<br>";
    $psws=isset($_POST['psw']) ?$_POST['psw']: "";
    echo "<br>";
    $pswrepeats=isset($_POST['pswrepeat']) ?$_POST['pswrepeat']: "";

    echo "successfully uploed..";
}



?>