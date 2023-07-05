<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce website</title>
    <link rel="stylesheet" href="./css/headers.css">
    <!--font aweosme-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
    <!--bootstrap css link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>

<body>
    <!--navbar sewction-->
    <nav class="navbar navbar-expand-sm sticky-top navbar_custom">
        <div class="container-fluid">
            <a href="index.php" class="navbar-brand">
                <img src="./images/logos/logo3.webp" style="width: 82px;" alt="" class="navbar_logo">
            </a>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="navbarlist">|||</button>
            <div class="collapse navbar-collapse " id="navbarlist">
                <ul class="navbar-nav me-auto navbar_menu">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link nav_custom_text"><button class="btn nav_custom_btn">
                                <h5>Home</h5>
                            </button></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav_custom_text" href="index.php" data-bs-toggle="dropdown">
                            <button class="btn nav_custom_btn">
                                <h5>Category</h5>
                            </button></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="men.php">MEN</a></li>
                            <li><a class="dropdown-item" href="women.php">WOMEN</a></li>
                            <li><a class="dropdown-item" href="womenparty.php">WOMEN'S PARTYWEAR</a></li>
                            <li><a class="dropdown-item" href="children.php">ACCESSORIES</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="contactus.php" class="nav-link nav_custom_text"><button class="btn nav_custom_btn">
                                <h5>Contact</h5>
                            </button></a>
                    </li>
                    <li class="nav-item">
                        <a href="aboutus.php" class="nav-link nav_custom_text"><button class="btn nav_custom_btn">
                                <h5>About</h5>
                            </button></a>
                    </li>
                </ul>
                <?php
                require 'connect.php';
                if (isset($_SESSION['user_logged'])) {
                    $user=$_SESSION['user_logged'];
                    $sql="SELECT * from customer where user_name='$user'";
                    $result=mysqli_query($con,$sql);
                    while($row=mysqli_fetch_assoc($result))
                    {
                        $logged_user=$row['first_name'];
                    
                ?>
                    <div>
                        <a href="" style="font-size: 1.2rem;color:black;text-decoration:none;margin-left: auto;"><span><i class="fa-solid fa-user"></i><?php echo " Welcome ".$logged_user; ?></a></span>
                        <a href="logout.php" style="font-size: 1.2rem;color:black;text-decoration:none;margin-left: 1em;"><span><i class="fa-solid fa-right-to-bracket"></i> Logout</a></span>

                    </div>
                <?php
                }} else {
                ?>
                    <a href="admin.php" style="font-size: 1.2rem;color:black;text-decoration:none;margin-left: auto;"><span><i class="fa-solid fa-user"></i> Admin</a></span>
                    <a href="login.php" style="font-size: 1.2rem;color:black;text-decoration:none;margin-left: 1em;"><span><i class="fa-solid fa-right-to-bracket"></i> Login</a></span>
                    <!-- <script>
                alert("Logged out.Please login again to continue shopping");
                </script> -->
                <?php
                }
                ?>
            </div>
        </div>
    </nav>
    <!--navbar sewction ends here-->
</body>

</html>