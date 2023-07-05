<?php
require 'connect.php';
if (isset($_SESSION['user_logged'])) {
    $user = $_SESSION['user_logged'];
    $sql = "SELECT * from customer where user_name='$user'";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $logged_user = $row['user_name'];
    }
    $to = "$logged_user ";
    $subject = "Order Placed";
    $message = "Your booking is successfully done!Stay tuned";
    $headers = [
        "MIME-Version:.1.0",
        "Content-type:text/plain;charset=utf-8",
        "From:17ef6affc0a178a548836fb9d7a83dd5",
        "Cc:17ef6affc0a178a548836fb9d7a83dd5"
    ];
    $headers = implode("\r\n", $headers);
}
if (mail($to, $subject, $message, $headers)) {
    echo "mail sent";
} else {
    echo "Email Failed";
}
?>
