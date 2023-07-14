<?php
include "Connection.php";

class Curd extends Connection{

    private $data;
    private $array_pardeep=[];
    public function getAllData(){
         $this->data=$this->conne->query("select * from kumawatboy");
         while($ajaysss=$this->data->fetch_assoc()){
            $array_pardeep[]=$ajaysss;
         }
         return $array_pardeep;
    }
    public function getDataSingle(){
        $this->data=$this->conne->query("select * from kumawatboy");
        $fetchdata=$this->data->fetch_assoc();

        
    }
}
$obj=new Curd();
$monu=$obj->getAllData();
// echo "<pre>";
// print_r($monu);


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
<body>

<div class="container">
    <h1>OOPS LIST</h1>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Sr.no</th>
        <th>Name</th>
        <th>Email</th>
        <th>village</th>

      </tr>
    </thead>
    <tbody>
        <?php 
        $srno=1;
        foreach ($monu as $monuss){
        ?>
      <tr>
        <td><?= $srno?></td>
        <td><?= $monuss['name']?></td>
        <td><?= $monuss['email']?></td>
        <td><?= $monuss['village']?></td>
      </tr>
      <?php
      $srno++;
        }
      ?>
    </tbody>
  </table>
</div>

</body>
</html>
