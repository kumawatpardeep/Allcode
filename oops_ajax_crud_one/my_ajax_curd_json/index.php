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
    function dataAll() {
        $.ajax({
            type: "post",
            url: "mydata.php",
            data: {},
            dataType: "JSON",
            success: function (response) {
                $aapnddata = "";
                $srno = 1;

                $.each(response, function (index, value) {
                    $aapnddata += '<tr>';

                    $aapnddata += '<td>' + $srno + '</td>';
                    $aapnddata += '<td>' + value.name + '</td>';
                    $aapnddata += '<td>' + value.email + '</td>';
                    $aapnddata += '<td>' + value.mobile + '</td>';
                    $aapnddata += '<td>' + value.village + '</td>';
                    $aapnddata += '<td><button class="btn btn-info">Edit</button> <button class="btn btn-danger trim" data-user="' + value.id + '">Delete</button></td>';


                    $aapnddata += '</tr>';
                    $srno++;

                })
                $(".appenddata").html($aapnddata);
            }
        });
    }
    $(document).ready(function () {
        dataAll();
    })
    $(document).on('click', '.trim', function () {
        var user = $(this).attr("data-user");
        var confiram = confirm("are you sure for delete");
        if (confiram) {
            $.ajax({
                type: "post",
                url: "mydata_delete.php",
                data: { id: user },
                dataType: "JSON",
                success: function (response) {
                    alert(response.message);
                    if (response.status == true) {
                        dataAll();
                    }
                }
            });
        }
    })
    $(document).on('click', '.add', function () {
        $("#myModal").modal('show');
    })
    $(document).on('click', '.addnew', function () {
        // alert()
        var myform = $("#myform");
        $.ajax({
            type: "post",
            url: "mydata_add.php",
            data: myform.serialize(),
            dataType: "JSON",
            success: function (response) {
                alert(response.message);
                if (response.status == true) {
                    dataAll();
                    $("#myModal").modal('hide');

                }
            }
        });
    })
</script>

<body>

    <div class="container">
        <button class="btn btn-info add">Add</button>
        <table class="table">
            <thead>
                <tr>
                    <th>SrNo</th>

                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>village</th>
                    <th>Action</th>


                </tr>
            </thead>
            <tbody class="appenddata">

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
                            <label for="name">Name :</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="mobile">Mobile:</label>
                            <input type="text" class="form-control" id="mobile" name="mobile">
                        </div>
                        <div class="form-group">
                            <label for="village">Village:</label>
                            <input type="text" class="form-control" id="village" name="village">
                        </div>

                        <button type="button" class="btn btn-info addnew">Add</button>
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