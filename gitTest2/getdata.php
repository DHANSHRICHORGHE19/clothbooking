
<?php
    include 'details.php';
  $server_name = "localhost";
  $username = "root";
  $password = "";
  $database_name = "rentit";
  
  $conn = mysqli_connect($server_name, $username, $password, $database_name);
  //now check the connection
  if ($conn) 
  {
    echo "connected successfully";
  } else 
  {
    die("Connection Failed:" . mysqli_connect_error());
  }
  echo $cloth_id;
// <!-- <?php

// if(isset($_POST['signin']))
// {
//     $username = $_POST['username'];
//     $password = $_POST['password'];
//     // $gender = $_POST['gender'];
//     // $email = $_POST['email'];
//     // $phone = $_POST['phone'];

//     //For inserting the values to mysql database 
//     $sql_query = "INSERT INTO sign_details (user_name,pass_word)
//     VALUES ('$username','$password')";

//     if (mysqli_query($conn, $sql_query))
//     {
//     echo "New Details Entry inserted successfully !";
//     }
//     else
//     {
//     echo "Error: " . $sql . "" . mysqli_error($conn);
//     }
//     mysqli_close($conn);
// }
 ?> 




