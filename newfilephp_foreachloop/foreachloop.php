<?php
    // $ras=[
    //     ["pardeep","bala ka bass",7695827224],
    //     ["rahul","jhunjhunu",7695827224],
    //     ["pardeep","bala ka bass",769582722]
        

    // ];
    // echo "<table border='1' cellspacing='0' cellpadding='0'>
    //       <tr>
    //       <th>name</th>
    //       <th>village</th>
    //       <th>mobile</th>
    //       </tr>";
    //       foreach($ras as list($name,$village,$mobile)){
    //         echo "<tr><td>$name</td><td>$village</td><td>$mobile</td></tr>";
    //       }
    //       echo "</table>";
    $ras=[
       [
        'name'=>'pardeep',
        'village'=>'bala ka bass',
        'mobile'=>'8890941174'
       ],
       [
       'name'=>'pankaj',
        'village'=>'jhunjhunu',
        'mobile'=>'674582893842'
       ],
       [
        'name'=>'rahul',
        'village'=>'bissau',
        'mobile'=>'987623646284'
       ]
       ];
       foreach($ras as $keys=>$rass){
        echo $rass['name'].' '.$rass['village'].' '.$rass['mobile'];
        echo "<br>";
       }
    //    echo "<pre>";
    //    print_r($ras);





    ?>