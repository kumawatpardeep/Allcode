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
    function callAllData(){
        $.ajax({
          type:"post",
          url:"data.php",
          data:{},
          dataType:'JSON',
          success:function(response){
            // $(".mydata").html(response);
            $farrrr="";
            $srno=1;
            $.each(response,function(index,value){
                   $farrrr+='<tr>';
                   $farrrr+='<td>'+$srno+'</td>'
                   $farrrr+='<td>'+value.name+'</td>';
                   $farrrr+='<td>'+value.email+'</td>'
                   $farrrr+='<td>'+value.mobile+'</td>';
                   $farrrr+='<td><button class="btn btn-success">Update</button><button class="btn btn-danger trash" data-ids="'+value.id+'">Trach</button></td>';

                   $farrrr+='</tr>';
                   $srno++;
            });
            $(".mydata").html($farrrr);
          }
        });
    }
    $(document).ready(function(){
          callAllData();
    });
    $(document).on('click','.trash',function(){
      var ids = $(this).attr('data-ids');
        alert(ids);
        var confiram = confirm("Are you sure to Trash...!");
        if (confiram == true){

          $.ajax({
          type:"post",
          url:"data.php",
          data:{id:ids},
          dataType:'JSON',
          success:function(response){
            // $(".mydata").html(response);
            alert(response.message);
            if(response.status==true){
              callAllData();
            }
           
          }
        });

        }
    });
</script>
<body>

<div class="container">            
  <table class="table table-striped">
    <thead>
      <tr>
      <th>Sr.No</th>
      <th>Name</th>
      <th>Email</th>
      <th>Mobile</th>
      <th>Action</th>

      </tr>
    </thead>
    <tbody class="mydata">
      
    </tbody>
  </table>
</div>

</body>
</html>
