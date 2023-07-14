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
    function dataAppend() {
        $.ajax({
            type: "post",
            url: "data.php",
            data: {},
            dataType: "JSON",
            success: function (result) {
                $future = "";
                $inbpox = 1;

                $.each(result, function (index, value) {
                    $future += '<tr>';
                    $future += '<td>' + $inbpox + '</td>';

                    $future += '<td>' + value.name + '</td>';
                    $future += '<td>' + value.email + '</td>';
                    $future += '<td>' + value.mobile + '</td>';
                    $future += '<td>' + value.village + '</td>';
                    $future += '<td><button class="btn btn-info editnew" data-ids="' + value.id + '"data-name="' + value.name + '"data-email="' + value.email + '"data-mobile="' + value.mobile + '"data-village="' + value.village + '">Edit</button></td>';
                    $future += '<td><button class="btn btn-danger trsh" data-user="' + value.id + '">Delete</button></td>';




                    $future += '</tr>';
                    $inbpox++;

                })
                $(".appenddata").html($future);
            }
        });
    }
    $(document).ready(function () {
        dataAppend();
    })
    $(document).on('click', '.trsh', function () {
        var user = $(this).attr("data-user");
        var confiram = confirm("are you sure for delete");

        if (confiram) {
            $.ajax({
                type: "post",
                url: "data_delete.php",
                data: { id: user },
                dataType: "JSON",
                success: function (result) {
                    alert(result.message);
                    if (result.status == true) {
                        dataAppend();

                    }
                }
            });
        }
    });

    $(document).on('click', '.add', function () {
        $("#myModal").modal('show');
    });
    $(document).on('click', '.addnew', function () {
        var myform = $("#myform");
        $.ajax({
            type: "post",
            url: "data_add.php",
            data: myform.serialize(),
            dataType: "JSON",
            success: function (result) {
                alert(result.message);
                if (result.status == true) {
                    dataAppend();
                    $("#myModal").modal('hide');

                }
            }
        });
    });

    $(document).on('click', '.editnew', function () {
        var currant = $(this);
        var name = $(currant).attr('data-name');
        var email = $(currant).attr('data-email');
        var mobile = $(currant).attr('data-mobile');
        var village = $(currant).attr('data-village');
        var id = $(currant).attr('data-ids');

        $("#myModalEdit").modal('show');

   $("#nameEdit").val(name);
   $("#emailEdit").val(email);
   $("#mobileEdit").val(mobile);
   $("#villageEdit").val(village);
   $("#hidden_id").val(id);

        // alert(id);
    })
    $(document).on('click','.newEdit',function(){
        var myformEdit=$("#myformEdit");
        $.ajax({
            type: "post",
            url: "data_edit.php",
            data: myformEdit.serialize(),
            dataType: "JSON",
            success: function (result) {
                alert(result.message);
                if (result.status == true) {
                    dataAppend();
                    $("#myModalEdit").modal('hide');

                }
            }
        });
    })
</script>

<body>

    <div class="container">
        <button class="btn btn-info add">Add</button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>SrNo</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>mobile</th>
                    <th>village</th>
                    <th>Edit</th>
                    <th>Delete</th>



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
                            <label for="name">name:</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">email:</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="mobile">mobile:</label>
                            <input type="text" class="form-control" name="mobile" id="mobile">
                        </div>
                        <div class="form-group">
                            <label for="village">village:</label>
                            <input type="text" class="form-control" name="village" id="village">
                        </div>

                        <button type="button" class="btn btn-default addnew">add</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>


     <!-- Modal -->
     <div id="myModalEdit" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <form id="myformEdit">
                        <input type="hidden" name="hidden_id" id="hidden_id">
                        <div class="form-group">
                            <label for="name">name:</label>
                            <input type="text" name="name" id="nameEdit" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">email:</label>
                            <input type="email" class="form-control" name="email" id="emailEdit">
                        </div>
                        <div class="form-group">
                            <label for="mobile">mobile:</label>
                            <input type="text" class="form-control" name="mobile" id="mobileEdit">
                        </div>
                        <div class="form-group">
                            <label for="village">village:</label>
                            <input type="text" class="form-control" name="village" id="villageEdit">
                        </div>

                        <button type="button" class="btn btn-default newEdit">add</button>
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