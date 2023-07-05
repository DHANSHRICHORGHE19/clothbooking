<?php
    
    $server_name="localhost";
    $username="root";
    $password="";
    $database_name="rentit";
    
    $conn=mysqli_connect($server_name,$username,$password,$database_name);
    //now check the connection
    if(!$conn)
    {
        die("Connection Failed:" . mysqli_connect_error());
    }
    session_start();
    if(isset($_POST['register']))
    {
        $firstname= mysqli_real_escape_string($conn,$_POST['first_name']);
        //$firstname = $_POST['first_name'];
        $lastname= mysqli_real_escape_string($conn,$_POST['last_name']);
        //$lastname = $_POST['last_name'];
        $username=mysqli_real_escape_string($conn,$_POST['user_name']);
        //$username = $_POST['user_name'];

        $regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
                    if(!preg_match($regex_email,$username))
                    {
                        echo "Incorrect email. Redirecting you back to registration page...";
?>
        <meta http-equiv="refresh" content="2;url=register.html" />
                <?php
                    }
                
                    $password=md5(md5(mysqli_real_escape_string($conn,$_POST['pass_word'])));
                    $password = $_POST['pass_word'];
                    if(strlen($password)<6)
                    {
                        echo "Password should have atleast 6 characters. Redirecting you back to registration page...";
                ?>
        <meta http-equiv="refresh" content="2;url=register.html" />
                <?php
                    }
                    $phone = $_POST['phone_no'];
                    $duplicate_user_query="select c_id from customer where user_name='$username'";
                    $duplicate_user_result=mysqli_query($conn,$duplicate_user_query) or die(mysqli_error($conn));
                    $rows_fetched=mysqli_num_rows($duplicate_user_result);
                    if($rows_fetched>0)
                    {
                        //duplicate registration
                        //header('location: signup.php');
                ?>
                        <script>
                            alert("Email already exists in our database!");
                        </script>
                        <meta http-equiv="refresh" content="1;url=register.html" />
                <?php
                    }else
                    {
                    //For inserting the values to mysql database 
                    $sql_query = "INSERT INTO customer (first_name,last_name,user_name,pass_word,phone_no)
                    VALUES ('$firstname','$lastname','$username','$password','$phone')";
                
                    if (mysqli_query($conn, $sql_query))
                    {
                        // echo "New Details Entry inserted successfully !";
                        // $_SESSION['user_logged']=$username;
                        // $_SESSION['user_id']=mysqli_insert_id($con);
                ?>
            <meta http-equiv="refresh" content="3;url=login.php" />
<?php
        }
        else
        {
        echo "Error: " . $sql . "" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
}
    
?> 