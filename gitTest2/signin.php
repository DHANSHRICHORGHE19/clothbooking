<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <!--font aweosme-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
    <!--bootstrap css link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="./css/register.css">

</head>
<body>
    <div class="container d-flex align-items-center justify-content-center">
        <div class="card signin_card">
            <!--card header-->
            <div class="card-header">
                <h3 class="text-center">Sign In
                </h3>
            </div>
            <!--card body-->
            <div class="card-body">
                <form action="./php/signin.php" method="post">
                    <!--first field-->
                    <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="Enter your username" name="username" required="required" autocomplete="off" aria-label="Username" aria-describedby="basic-addon1" >
                    </div>
                    <!--second field-->
                    <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                    <input type="password" class="form-control" placeholder="Enter your password" name="password" required="required" autocomplete="off" aria-label="password" aria-describedby="basic-addon1">
                    </div>
                    
                    <!--signup button-->
                    <div class="form-group ">
                        <input type="submit" name=signin value="Sign In" class="btn signup_btn">
                    </div>
                </form>
            </div>
            <!--card footer-->
            <div class="card-footer text-center text-dark signup">
            <b>Don't hava an account? <a href="register.php">Sign in</b></a>
            </div>
            
            
        </div>
    </div>
</body>
</html>