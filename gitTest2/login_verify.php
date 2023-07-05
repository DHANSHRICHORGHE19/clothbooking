<?php
session_start();
require 'connect.php';

$mail = mysqli_real_escape_string($con, $_POST['username']);

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
?>