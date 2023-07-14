<?php

$arrays=[
    [
        'name'=>'shiv1',
        'mobile'=>848484848,
        'address'=>'bassi naga kalwar jaipur'
    ],
    [
        'name'=>'shiv2',
        'mobile'=>848484848,    
        'address'=>'bassi naga kalwar jaipur'
    ],
    [
        'name'=>'shiv3',
        'mobile'=>848484848,
        'address'=>'bassi naga kalwar jaipur'
    ],
];

foreach($arrays as $keys=>$arrayss){
    echo $arrayss['name'].' '.$arrayss['mobile'].' '.$arrayss['address'];
    echo "<br>";

}
die;

echo "<pre>";
print_r($arrays);


?>
