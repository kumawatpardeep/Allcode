
 <!-- $nums=0;
 $tables="";
$tables.='<table border="2" cellsapcing="0" cellpading="0">';
 for($nums;$nums<50;$nums++){
      $tables.='<tr><td>'.$nums.'</tr><td>';
    
 }
 $tables.='</table>';
echo "$tables.";


 $tables=""; -->

<!-- <table border="1" cellspacing="0" cellpadding="0">
    <?php
    // for($i=1;$i<11;$i++){
        ?>
        <tr>
            <?php
            // for($k=1;$k<11;$k++){
                ?>
                <td><?=($i*$k)?></td>
                <?php
            // }
            ?>
            </tr>
            <?php
    // }
    ?>
    </table> -->
<?php
// $ram=12;
// $ramu=3;
// while($ramu<$ram){
//     if($ram%$ramu==0){
//         echo "this is not prime number";
//         exit();
//     }else{
//         echo "this is prime number";
//         exit();
        
 
// }
// $ramu++;
// }
$run=[
    ["pardeep","bala ka bass",9844424587],
    ["pankaj","jhunjhunu",766546478],
    ["sandeep","dundlod",9875464546],
    ["vihan","jhunjhunu",87562642341]

];
echo "<table border='1' cellspacing='0' cellpadding='o'>
    <tr>
    <th>name</th>
    <th>village</th>
    <th>mobile</th>
    </tr>";

    foreach($run as list($name,$village,$mobile)){
        echo "<tr><td>$name</td>
        <td>$village</td>
        <td>$mobile</td></tr>";
    }
    echo "</table>";

?>