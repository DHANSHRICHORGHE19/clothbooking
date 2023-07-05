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
    <link rel="stylesheet" href="./css/book1.css">
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
                    <div class="booking-form"> 
                    <div class="row"> 
                        <div class="col-md-6"> 
                            <div class="form-group">
                                <span class="form-label text-white">Check In</span>                                 
                            <input class="form-control" type="date" required> 
                             
                        </div> 
                    </div> 
                    <div class="col-md-6"> 
                        <div class="form-group">
                        <span class="form-label text-white">Check Out </span> 
                        <input class="form-control" type="date" required>     
                        </div> 
                    </div> 
                </div> 
                    <!--second field-->
                    <div class="row"> 
                            <div class="col-md-4"> 
                                <div class="form-group">
                                <span class="select-arrow"></span> 
                                    <span class="form-label text-white">Size Range</span>  
                                    <select class="form-control" required> 
                                        <option value="" selected hidden>Select Size</option> 
                                        <option>S</option> 
                                        <option>M</option> 
                                        <option>L</option>
                                        <option>XL</option> 
                                    </select> 
                                </div> 
                            </div>  
                        </div>    
                    </form> 
                </div> 
                <!-- button-->
                    <div class="form-group ">
                        <input type="cancel" name=cancel value="Cancel" class="btn btn-block register_btn">
                    </div>
                    <div class="form-group ">
                        <input type="submit" name=rentnow value="Rent now" class="btn btn-block register_btn">
                    </div>
                </form>
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


<form method="GET" action="cart_add.php" >
                        <div class="f1">
                            <div class="row"> 
                                <div class="col-lg-6"> 
                                    <div class="form-group">
                                        <span class="form-label text-white">Check In</span>                                 
                                        <input type="date"  name="bookdate" class="form-control" required>

                                        <span class="form-label text-white">Check Out </span> 
                                        <input type="date" name="returndate" class="form-control" required>

                                        <span class="select-arrow"></span> 
                                        <span class="form-label text-white">Size Range</span>  
                                        <select class="form-control" name="size" required> 
                                            <option value="" selected hidden>Select Size</option> 
                                            <option>S</option> 
                                            <option>M</option> 
                                            <option>L</option>
                                            <option>XL</option> 
                                        </select>
                                        </div> 
                                </div>
                            </div>
                        </div>    
                      </form>