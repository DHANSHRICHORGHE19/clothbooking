<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="rentit";
$con=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$con)
{
    die("Connection Failed:" . mysqli_connect_error());
}


?>