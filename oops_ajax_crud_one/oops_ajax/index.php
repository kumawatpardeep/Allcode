<!DOCTYPE html>
<html>
<head>
    <style>
            
      .loader {
        border: 16px solid #f3f3f3; /* Light grey */
        border-top: 16px solid #3498db; /* Blue */
        border-radius: 50%;
        width: 120px;
        height: 120px;
        animation: spin 2s linear infinite;
      }

      @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
      }
      label.error.formmessage.error2 {
    float: right;
}
    </style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
  function callAjaxForIndex(){

  

      $.ajax({
          
          beforeSend:function(){

              $(".loader").show();
          },
          type:"POST",//get or post
          url:"http://localhost/oops_ajax/my_data.php",//my_data.php
          data:{},
          dataType:'JSON',
          success:function(result){

            $myappenddata='';
            $srno=1;
            $.each(result,(index, value)=>{
              
              // console.log(index+' '+value.name);
                $myappenddata+='<tr>';
                $myappenddata+='<td>'+$srno+'</td>';
                $myappenddata+='<td>'+value.name+'</td>';
                
                $myappenddata+='<td>'+value.addess+'</td>';
                $myappenddata+='<td>'+value.city+'</td>';
                $myappenddata+='<td>'+value.salary+'</td>';
                $myappenddata+='<td><button class="btn btn-success">Edit</button>&nbsp;&nbsp;<button class="btn btn-danger trash" data-ids="'+value.id+'" >Trash</button></td>';
                $myappenddata+='</tr>';
                $srno++;
            });

            $(".myDataAppend").html($myappenddata);
            //  console.log($myappenddata);

          
          },
          complete:function(){

              $(".loader").hide();
          }


      });
  }

$(document).ready(function(){
  
    callAjaxForIndex();
   
});

$(document).on('click','.addbtn',function(){

  $("#myModal").modal('show');

});

$(document).on('click','.addbtnnow',function(){
        var myForm=$("#myForm");
        $.ajax({
            beforeSend:function(){
                $(".loader").show();
            },
            type:"POST",//get or post
            url:"http://localhost/oops_ajax/my_data_add.php",//my_data_add.php
            data:myForm.serialize(),
            dataType:'JSON',
            success:function(result){

          $('.formmessage').remove();
          if (result.errors && !result.errors == '') {

              $.each(result.errors,(key, value)=>{

                var msg = '<label class="error formmessage error2"  style="color:red">' + value + '</label>';


                 myForm.find('input[name="' + key + '"], select[name="' + key + '"], select[name="' + key + '[]"],textarea[name="' + key + '"]').after(msg);

              });

           }
           else{

              alert(result.Msg);
              if(result.Status==true){
                callAjaxForIndex();
                $("#myModal").modal('hide');
              }

           }

              
            },
            complete:function(){
                $(".loader").hide();
            }

        });
  

});

$(document).on('click','.trash',function(){

   var ids=$(this).attr('data-ids');
   
   var confirms=confirm("Are You Sure To Trash..!");
   if(confirms==true){
    $.ajax({
          
          beforeSend:function(){

              $(".loader").show();
          },
          type:"POST",//get or post
          url:"http://localhost/oops_ajax/my_data_delete.php",//my_data_delete.php
          data:{id:ids},
          dataType:'JSON',
          success:function(result){
            alert(result.Msg);
            if(result.Status==true){

              callAjaxForIndex();
            }
           
          },
          complete:function(){

              $(".loader").hide();
          }


      });
      
   }



});




</script>
</head>
<body>

<div class="loader" style="display:none;"></div>

<div class="container">
    <div class="row">

    <h3>User's List</h3>
    <button    style="float:right;margin-bottom:10px;" class="btn btn-info addbtn">Add User</button>

<table class="table table-bordered">
    <thead>
      <tr>
        <th>Sr.No</th>
        <th>Name</th>
        <th>Address</th>
        <th>City</th>
        <th>Salary</th>
        <th>Action</th>
      </tr>
    </thead>

    <tbody class="myDataAppend">
      
    </tbody>


</table>

</div>
</div>



<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add User</h4>
      </div>
      <div class="modal-body">
       
      <form id="myForm">
        <div class="form-group">
          <label for="email">Name:</label>
          <input type="text" maxlength="30" name="name" class="form-control" id="name">
        </div>
        <div class="form-group">
          <label for="pwd">Email:</label>
          <input type="text" name="email" maxlength="150" class="form-control" id="email">
        </div>

        <!-- <div class="form-group">
          <label for="pwd">City:</label>
         <select name="city"  id="city" class="form-control">
          <option value="">Select</option>
          <option>Jaipur</option>
          <option>Ajmer</option>
         </select>
        </div> -->

        <div class="form-group">
          <label for="pwd">Mobile:</label>
          <input type="text" name="mobile"  class="form-control" id="mobile">
        </div>
     
        <button type="button" class="btn btn-info addbtnnow">Add</button>
      </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

</body>
</html>
