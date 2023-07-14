<!-- <table border="1" cellpadding="0" cellspacing="0"> -->
    <?php
    // for($i=1;$i<21;$i++){?>
    <!-- <tr> -->
        <?php
        // for($k=1;$k<30;$k++){
            ?>
            <!-- <td><?=($i*$k)?><td> -->
                <?php
        // }
        ?>
        <!-- </tr> -->
        <?php

    // }
    ?>
    <!-- </table> -->
    <!-- prime number while loop -->
    <?php
    // $ram=19;
    // $raj=2;
    // while($raj<$ram){
        // if($ram%$raj==0){
            // echo "not prime number";
            // exit();
        // }else{
            // echo "this is prime number";
            // exit();
        // }
        // $raj++;
    // }
    ?>
    
    <?php
    
    $man[
        
        ["pardeep","bala ka bass","birmi",7687837345],
        ["pankaj","jhunjhunu","jhunjhunu",7657643345],
        ["rahul","puriya","patoda",8877645453],
        ["dipesh","bissau","bissau",98665423875]
    ];
    echo "<table border='1' cellspacing='0' cellpadding='0'>
         <tr>
         <th>name</th>
         <th>village</th>
         <th>post</th>
         <th>mobile</th>
         </tr>";
         foreach($man as list($name,$village,$post,$mobile)){
           echo "<tr><td>$name</td><td>$village</td><td>$post</td><td>mobile</td></tr>";
         }
         echo "</table>";

    ?>