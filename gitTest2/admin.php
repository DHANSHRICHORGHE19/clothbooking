<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin login</title>
    <link rel="stylesheet" href="./css/register.css">
    
     <!--font aweosme-->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
    <!--bootstrap css link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
</head>
<body>
<div class="container d-flex align-items-center justify-content-center">
        <div class="card signin_card">
            <!--card header-->
            <div class="card-header">
                <h3 class="text-center">Log In
                </h3>
            </div>
            <!--card body-->
            <div class="card-body">
                <form action="./php/signin.php" method="post">
                    <!--first field-->
                    <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="Enter your username" name="username" required="required" autocomplete="off">
                    </div>
                    <!--second field-->
                    <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                    <input type="password" class="form-control" placeholder="Enter your password" name="password" required="required" autocomplete="off">
                    </div>
                    
                    <!--signup button-->
                    <div class="form-group ">
                        <input type="submit" name=login value="Log In" class="btn signup_btn "style="width:100%;">
                    </div>
                </form>
            </div>
            <!--card footer-->
            <div class="card-footer text-center text-dark signup">
            <b>Don't hava an account?<a href="admin_reg.php">Register</b></a>
            </div>
            
            
        </div>
    </div>
    
</body>
</html>