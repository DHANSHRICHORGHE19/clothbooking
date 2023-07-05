<html>
<head>
<script src="./jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="./bootstrap.min.js"></script>
<script src="./actions.js"></script>
<!--okzoom Plugin-->
<script src="./okzoom.min.js" type="text/javascript"></script>
<!--owl carousel plugin-->
<script type="text/javascript" src="./owl.carousel.js"></script>
<script>
    $(document).ready(function(){

        $('#product-img').okzoom({
            width: 200,
            height: 200,
            scaleWidth: 800
        });

        $('.banner-carousel').owlCarousel({
            loop: true,
            margin: 0,
            responsiveClass: true,
            navText : ["",""],
            responsive: {
                0: {
                    items: 1,
                    nav: true

                },
                600: {
                    items: 1,
                    nav: true
                },
                1000: {
                    items: 1,
                    nav: true,
                    loop: false,
                    margin: 10
                }
            }
        });

        $('.popular-carousel').owlCarousel({
            loop: true,
            margin: 0,
            responsiveClass: true,
            navText : ["",""],
            responsive: {
                0: {
                    items: 1,
                    nav: true

                },
                600: {
                    items: 2,
                    nav: true
                },
                800: {
                    items: 4,
                    nav: true
                },
                1000: {
                    items: 5,
                    nav: true,
                    loop: false,
                    margin: 10
                }
            }
        });

        $('.latest-carousel').owlCarousel({
            loop: true,
            margin: 0,
            responsiveClass: true,
            navText : ["",""],
            responsive: {
                0: {
                    items: 1,
                    nav: true

                },
                600: {
                    items: 2,
                    nav: true
                },
                800: {
                    items: 3,
                    nav: true
                },
                1000: {
                    items: 4,
                    nav: true,
                    loop: false,
                    margin: 5
                }
            }
        });
    });

</script>
</head>
<body>
<div id ="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
            
                <h3><?php echo 'site_name'; ?></h3>
                <p><?php echo 'site_desc'; ?></p>
            </div>
            <div class="col-md-3">
                <h3>Categories</h3>
                
            </div>
            <div class="col-md-3">
                <h3>Useful Links</h3>
                <ul class="menu-list">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">All Products</a></li>
                    <li><a href="#">Latest Products</a></li>
                    <li><a href="#">Popular Products</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3>Contact Us</h3>
                <!--hers the code check further in footer file-->
                <ul class="menu-list">
                    <?php if(!empty($footer[0]['contact_address'])){ ?>
                        <li><i class="fa fa-home" ></i><span>: <?php echo 'contact_address'; ?></span></li>
                    <?php } ?>
                    <?php if(!empty($footer[0]['contact_phone'])){ ?>
                        <li><i class="fa fa-phone" ></i><span>: <?php echo 'contact_phone'; ?></span></li>
                    <?php } ?>
                    <?php if(!empty($footer[0]['contact_email'])){ ?>
                        <li><i class="fa fa-envelope" ></i><span>: <?php echo 'contact_email'; ?></span></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-md-12">
                <center>
                <span ><?php echo 'footer_text' ?> | Created by <a href="#" target="_blank">Bebeautiful</a></span>
                </center>
            </div>
        </div>
    </div>
</div>
</body>
</html>