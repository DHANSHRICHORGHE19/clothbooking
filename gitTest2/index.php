
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce website</title>
    <link rel="stylesheet" href="./css/style.css">
    <!--font aweosme-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
    <!--bootstrap css link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
</head>
<body>
    <!--adding header and footer files-->
    <?php require 'connect.php';?>
    <?php require 'headers.php';?>
    
    <!--carousel section-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./images/carousel/caro3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-2 carousel_custom_caption_text">Be Beautiful with Us</h1>
                    <p class="carousel_custom_caption_para"> Welcome to our Store</p>
                    <a href="register.html"><button class="btn btn-lg btn-outline-light  text-dark caption_btn">Register here</button></a>
                    
                </div>
            </div>
            <div class="carousel-item">
                <img src="./images/carousel/car2.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-2 carousel_custom_caption_text">Be Beautiful with Us</h1>
                    <p class="carousel_custom_caption_para"> Welcome to our Store</p>
                    <a href="register.html"><button class="btn btn-lg btn-outline-light  text-dark caption_btn">Register here</button></a>
                    
                </div>
            </div>
            <div class="carousel-item">
                <img src="./images/carousel/carousel1.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-2 carousel_custom_caption_text">Be Beautiful with Us</h1>
                    <p class="carousel_custom_caption_para"> Welcome to our Store</p>
                    <a href="register.html"><button class="btn btn-lg btn-outline-light  text-dark caption_btn">Register here</button></a>
                    
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
</div>
<!--Next section-->
<div class="container-fluid">
    <img src="./images/4steps.png" class="img-fluid" alt="Responsive image">
</div>
<!--Next section ends here-->
<!--carousel section ends here-->
    <div class="container">
      <!-- Content here -->
        <div class="row my-4">
                <!--php code-->
                <?php
                    require 'connect.php';
                    $sql="Select * from clothes where cloth_category='women'";
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
                                    <a href="details.php?details_id='.$cloth_id.'" class="btn btn-primary">Book Now</a>
                                </div>
                            </div>
                            </div>';
                        }
                     }
                ?>
            
        </div>
    
    </div>
<!--Next section-->
<div class="container">
    <img src="./images/carousel/c1.png" class="img-fluid" alt="Responsive image">
</div>
<br><br>
<div class="container-fluid">
    <img src="./images/about.png" class="img-fluid" alt="Responsive image">
</div>

<!--Next section ends here-->
<?php require 'aboutus.php';?> 
<?php require 'footer2.php';?> 
<!-- js bootstrap  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js">

</script>

</body>
</html>