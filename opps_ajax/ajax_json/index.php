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
  function getAllData() {
    $.ajax({
      type: "POST",
      url: "mydata.php",
      data: {},
      dataType: "JSON",
      success: function (response) {
        $dataappend = "";
        $srno = 1;
        $.each(response, function (index, value) {
          $dataappend += '<tr>';
          $dataappend += '<td>' + $srno + '</td>';
          $dataappend += '<td>' + value.name + '</td>';
          $dataappend += '<td>' + value.email + '</td>';
          $dataappend += '<td><button type="button" class="btn btn-success" >Update</button><button type="button" class="btn btn-danger del" data-user="' + value.id + '">Trash</button></td>';


          $dataappend += '</tr>';
          $srno++;


        })
        $(".appensdata").html($dataappend);
      }
    });
  }
  $(document).ready(function () {
    getAllData();
  });
  $(document).on('click', '.del', function () {
    var user = $(this).attr('data-user');
    //  alert()
    var conf = confirm("Are you sure for delete..!");
    if (conf == true) {
      $.ajax({
        type: "POST",
        url: "delete_data_ajax.php",
        data: { id: user },
        dataType: "JSON",
        success: function (response) {
          alert(response.message);
          if (response.status == true) {
            getAllData();
          }
        }
      });
    }
  });

  $(document).on('click','.aadbtn',function(){
    $("#myModal").modal('show');
    
  });
  $(document).on('click','.addnew',function() {
    $.ajax({
        type: "POST",
        url: "add_data_ajax.php",
        data: $("#myform").serialize(),
        dataType: "JSON",
        success: function (response) {
          alert(response.message);
          if (response.status == true) {
            getAllData();
          }
        }
      });
  })
</script>

<body>

  <div class="container">
  <button class="btn btn-info aadbtn">Add</button>

    <table class="table table-striped">
      <thead>
        <tr>
          <th>SrNo</th>
          <th>Name</th>
          <th>Email</th>
          <!-- <th>village</th> -->
          <th>Action</th>
        </tr>
      </thead>
      <tbody class="appensdata">

      </tbody>
    </table>
  </div>
  <!-- Trigger the modal with a button -->
  <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

  <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <form id="myform">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" name="name" id="name" placeholder="Enter Name" class="form-control">
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" name="email" id="email" placeholder="Enter Email" class="form-control" id="pwd">
            </div>
            <div class="form-group">
              <label for="village">Village:</label>
              <input type="text" name="village"  placeholder="Enter Village" class="form-control" id="village">
            </div>
            <button type="button" class="btn btn-info addnew">Submit</button>
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