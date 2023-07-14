<!DOCTYPE html>
<html lang="en">
<head>
  <title>My Blog Pages</title>
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
            "title"=>"Blog1",
            "image"=>"./images/img1.jpeg",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pretium urna placerat mauris rhoncus congue. Morbi vel mi a enim pretium sollicitudin non ultricies risus. Pellentesque vel mattis ex. Integer pretium tortor odio, et semper nisi finibus id. Aenean elementum a felis in pharetra...."

        ],
        [
            "title"=>"Blog2",
            "image"=>"./images/img1.jpeg",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pretium urna placerat mauris rhoncus congue. Morbi vel mi a enim pretium sollicitudin non ultricies risus. Pellentesque vel mattis ex. Integer pretium tortor odio, et semper nisi finibus id. Aenean elementum a felis in pharetra...."

        ],
        [
            "title"=>"Blog3",
            "image"=>"./images/img1.jpeg",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pretium urna placerat mauris rhoncus congue. Morbi vel mi a enim pretium sollicitudin non ultricies risus. Pellentesque vel mattis ex. Integer pretium tortor odio, et semper nisi finibus id. Aenean elementum a felis in pharetra...."

        ],
        [
            "title"=>"Blog4",
            "image"=>"./images/img1.jpeg",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pretium urna placerat mauris rhoncus congue. Morbi vel mi a enim pretium sollicitudin non ultricies risus. Pellentesque vel mattis ex. Integer pretium tortor odio, et semper nisi finibus id. Aenean elementum a felis in pharetra4...."

        ],
        
        [
            "title"=>"Blog5",
            "image"=>"./images/img1.jpeg",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pretium urna placerat mauris rhoncus congue. Morbi vel mi a enim pretium sollicitudin non ultricies risus. Pellentesque vel mattis ex. Integer pretium tortor odio, et semper nisi finibus id. Aenean elementum a felis in pharetra4...."

        ]
        

 ];

 
?>

  
<div class="container">
    
    <div class="row main-row">
       
 
   <?php 
    foreach($blogArray as $blogArrayss):
   ?> 

        <div class="col-sm-4">
           <div class="row customblogs" >
                <div class="col-sm-12">
                   <span class="title-span"><?= $blogArrayss['title']?></span>
                </div>
                <div class="col-sm-12">
                   <img class="img-responsive" src="<?= $blogArrayss['image']?>">
                </div>

                <div class="col-sm-12">
                   <p class="content-tags"><?php echo $blogArrayss['description'];  ?></p>
                </div>

            </div>
        </div>
    <?php endforeach ?>
       
    </div>

</div>

</body>
</html>