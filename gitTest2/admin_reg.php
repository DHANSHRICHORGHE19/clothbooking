<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--font aweosme-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
    <!--bootstrap css link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="./css/register.css">
</head>
<body>
 
    <div class="container d-flex align-items-center justify-content-center">
        <div class="card register_card">
            <!--card header-->
            <div class="card-header">
                <h2 class="text-center text-white">Register</h2>
            </div>
            <!--card body-->
            <div class="card-body">
                <form action="#" method="post">
                    <!--first field-->
                    <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Enter your name" name="first_name" required autocomplete="off" aria-label="firstname" aria-describedby="basic-addon1" >
                    
                    </div>
                    <!--second field-->
                    
                    <!--third field-->
                    <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1 username "><i class="fa-solid fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="Username" name="user_name" required autocomplete="off" aria-label="username" aria-describedby="basic-addon1" >
                    </div>
                    <!--fourth field-->
                    <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                    <input type="password" class="form-control" placeholder="Password" name="pass_word" required="required" aria-label="password" aria-describedby="basic-addon1">
                    </div>
                    <!--fifth field-->
                    <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-sharp fa-solid fa-location-dot"></i></span>
                    <input type="text" class="form-control" placeholder="Enter Address" name="email" required="required" aria-label="email" aria-describedby="basic-addon1">
                    </div>
                    <!--sixth field-->
                    <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-phone"></i></span>
                    <input type="text" class="form-control" placeholder="Enter Phone no" name="phone_no" required="required" autocomplete="off" aria-label="phone" aria-describedby="basic-addon1">
                    </div>
                    <!-- button-->
                    <div class="form-group ">
                        <input type="submit" name=register value="Register" class="btn btn-block register_btn"style="width:100%;">
                    </div>
                </form>
            </div>
            <!--card footer-->
            <div class="card-footer text-center text-dark signup">
            <b><h4>Already have an account? <a href="admin.php">Log in</h4></b></a>
            </div>
            
            
        </div>
    </div>

</body>
</html>
<?php
    
        $server_name="localhost";
        $username="root";
        $password="";
        $database_name="rentit";
        
        $conn=mysqli_connect($server_name,$username,$password,$database_name);
        //now check the connection
        if($conn)
        {
            echo "connected successfully";
        }
        else
        {
            die("Connection Failed:" . mysqli_connect_error());
        }
        if(isset($_POST['register']))
        {
            $firstname = $_POST['first_name'];
            $lastname = $_POST['last_name'];
            $username = $_POST['user_name'];
            $password = $_POST['pass_word'];
            $email = $_POST['email'];
            $phone = $_POST['phone_no'];
        
            //For inserting the values to mysql database 
            $sql_query = "INSERT INTO customer (first_name,last_name,user_name,pass_word,e_mail,phone_no)
            VALUES ('$firstname','$lastname','$username','$password','$email','$phone')";
        
            if (mysqli_query($conn, $sql_query))
            {
            echo "New Details Entry inserted successfully !";
            }
            else
            {
            echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
        
    ?> 