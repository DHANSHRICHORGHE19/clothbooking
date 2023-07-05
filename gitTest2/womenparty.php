<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <!--font aweosme-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
    <title>bootstrap</title>
  </head>
  <body>
  <?php require 'headers.php';?>
  <?php require 'connect.php';?>
    <div class="jumbotron mt-4 ">
        <div class="container-fluid custom-container">
            <!-- Content here -->
        <div class="row my-4">
                <!--php code-->
                <?php
                    require 'connect.php';
                    $sql="Select * from clothes where cloth_category='womenparty'";
                    $result=mysqli_query($con,$sql);
                    if($result)
                    {
                         // $row=mysqli_fetch_assoc($result);
                        //echo $row['cloth_name'];
                        while($row=mysqli_fetch_assoc($result))
                        {
                            $cloth_id=$row['cloth_id'];
                            $cloth_name=$row['cloth_name'];
                            $cloth_desc=$row['cloth_desc'];
                            $cloth_img=$row['cloth_img'];
                            $cloth_price=$row['cloth_price'];
                            echo '<div class="col-md-4 col-sm-6 col-xm-12 mb-5">
                            <div class="card" style="padding: 20px;">
                                <img src='.$cloth_img.' class="card-img-top" alt="..." style="height:300px;">
                                <div class="card-body">
                                    <h5 class="card-title">'.$cloth_name.'</h5>
                                    <p class="card-text">'.$cloth_desc.'</p>
                                    <p>'.$cloth_price.'</p>
                                    <a href="details.php?details_id='.$cloth_id.'"class="btn btn-primary">Book Now</a>
                                </div>
                            </div>
                            </div>';
                        }
                     }
                ?>
            
        </div>
        </div>
    </div>
    <?php require 'aboutus.php';?> 
    <?php require 'footer2.php';?> 

  </body>
</html>