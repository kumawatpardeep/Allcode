
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="./css/style.css"> 
</head>
<body>
  <?php
  $blogArray=[
    [
      "title"=>"p run1",
      "image"=>"monu.jpeg",
      "description"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been  ever since..."
    ],
    [
      "title"=>"p run2",
      "image"=>"Ravi.webp",
      "description"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been  ever since..."
    ],
    [
      "title"=>"p run3",
      "image"=>"raj.webp.crdownload",
      "description"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry...."
    ]
    
    ];
    ?>



<div class="container">
    
    <div class="row ">
      <?php
      foreach($blogArray as $blogArrayss):
        ?>
     <div class=col-sm-4>
      <div class="row pardeep">
        <div class="col-sm-12">
          <span class="title-span"><?=$blogArrayss['title']?></span>
        </div>
        <div class="col-sm-12">
          <img class="img-responsive" src="./images/<?=$blogArrayss['image']?>">
        </div>
        <div class="col-sm-12">
          <p class="content-tags"><?=$blogArrayss['description']?></p>
          
        </div>
      </div>
      
     </div>
      <?php endforeach ?>
    </div>
      
</div>

</body>
</html>
