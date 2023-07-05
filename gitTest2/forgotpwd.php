<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot password</title>
    <!--font aweosme-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
    <!--bootstrap css link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="./css/forgotpass.css">
</head>
<body>
    <?php require 'connect.php';?>  
    <?php require 'headers.php';?>
        <div class="container d-flex align-items-center justify-content-center">
            <div class="card text-center" style="width:400px; height:450px;">
                <div class="card-header h5 text-white bg-primary">Password Reset</div>
                <div class="card-body px-5">
                    <p class="card-text py-2">
                        Enter your email address and reset your password.
                    </p>
                    <div class="form-outline">
                        <form method="post" action="#">
                        <input type="email" id="typeEmail" name="mail" class="form-control my-3" />
                        <label class="form-label" for="typeEmail">Email input</label>

                        <input type="password" id="typeEmail" name="newpwd" class="form-control my-3" />
                        <label class="form-label" for="typeEmail">Enter new password</label>
                    </div>
                    <a href="#" class="btn btn-primary w-100">Reset password</a>
                    <div class="d-flex justify-content-between mt-4">
                        <a class="" href="login.php">Login</a>
                        <a class="" href="Register.php">Register</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    
</body>
</html>
<!-- <?php

require 'connect.php';

$mail = mysqli_real_escape_string($con, $_POST['mail']);

$password = md5(md5(mysqli_real_escape_string($con, $_POST['password'])));

$user_authentication_query = "SELECT * FROM customer WHERE user_name='$mail'";
$result = mysqli_query($con, $user_authentication_query);
// if ($result) {
//     echo "hii";
// }
while ($row = mysqli_fetch_assoc($result)) {
    // if ($row) {
    //     echo "done";
    // }
    $idfromdb=$row['c_id'];
    // echo $idfromdb;
    $fnfromdb=$row['first_name'];
    $nmfromdb = $row['user_name'];
    // echo $nmfromdb;
    $pwfromdb = $row['pass_word'];
    // echo $pwfromdb;
    // echo $row['pass_word'];

    if ($pwfromdb = $password) 
    {
        $_SESSION['user_logged'] = $mail;
        $_SESSION['user_id']=$idfromdb;
        $_SESSION['first_name']=$fnfromdb;
        header('location: index.php');
    }
    else{
    ?>
        <script>
            alert("Wrong username or password");
        </script>
        <meta http-equiv="refresh" content="1;url=login.php" />
    <?php
    }
}
?> -->