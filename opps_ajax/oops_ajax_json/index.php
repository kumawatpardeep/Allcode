<?php

// print_r($_REQUEST);
include "Op.php";
$objects=new Op();
$datas=$objects->getAllData();
// echo "<pre>";
// print_r($datas);
json_encode($datas);


?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<script>
    function allData(){
        $.ajax({
            type:"post",
            url:"my_data.php",
            // data:{name:"pardeep",email:"kumawatpradeep@gmail"},
            dataType:"JSON",
            success:function(response){
                // console.log(response);
                // $("#appenddata").html(response)
                $aapData="";
                $index=1;
                $.each(response,function(index,value) {
                    $aapData+='<tr>';
                    $aapData+='<td>'+$index+'</td>';
                    $aapData+='<td>'+value.name+'</td>';
                    $aapData+='<td>'+value.email+'</td>';
                    $aapData+='<td>'+value.village+'</td>';


                    $aapData+='</tr>';

                    $index++;

                });
                $("#appenddata").html($aapData);
            }
        });
    }
    $(document).ready(function(){
        allData();
    });
</script>
<body>

<div class="container">
  <h2>Striped Rows</h2>
  <p>The .table-striped class adds zebra-stripes to a table:</p>            
  <table class="table table-striped">
    <thead>
      <tr>
      <th>Sr.No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Village</th>
      </tr>
    </thead>
    <tbody id="appenddata">
    
    </tbody>
  </table>
</div>

</body>
</html>
