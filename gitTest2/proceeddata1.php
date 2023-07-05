<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <!--bootstrap font link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!--bootstrap script link-->

    <!--bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/payment.css">
</head>

<body>
    <tbody>
        <tr class="item-row">
            <td>
                <div class="container d-lg-flex">
                    <div class="box-1 bg-light user">
                        <div class="d-flex align-items-center mb-3">
                            <p class="ps-1 "></p>
                        </div>
                        <div class="box-inner-1 pb-3 mb-3 ">
                            <div class="d-flex justify-content-between mb-3 userdetails">
                                <p class="fw-bold">Bebeautiful Presents</p>
                                <p class="fw-lighter"><span><i class="fa-sharp fa-solid fa-indian-rupee-sign"></i></span><?php
                                                                                                                            require 'connect.php';
                                                                                                                            $sel = "select * from customer";
                                                                                                                            $query = mysqli_query($con, $sel);
                                                                                                                            $result = mysqli_fetch_assoc($query);


                                                                                                                            if (isset($_POST['proceed'])) {
                                                                                                                                $cid = $result['c_id'];
                                                                                                                                $bookc_id = $_POST['product_id'];
                                                                                                                                $date = $_POST['bookdate'];
                                                                                                                                $size = $_POST['size'];
                                                                                                                                $cookie = $_COOKIE['total'];
                                                                                                                                $cookie = $_COOKIE['total'];
                                                                                                                                echo " " . $cookie;
                                                                                                                            ?></p>
                            </div>
                            <div class="carousel-inner">

                                <img src="./images/payment.jpeg" class="d-block w-100">
                            </div>

                        </div>
                        <br>
                        <p class="dis info my-3">Scan the above code and make your Payment
                        </p>
                    </div>
            </td>
            <td>
                <div class="container d-lg-flex">
                    <div class="box-2">
                        <div class="box-inner-2">
                            <div>
                                <p class="fw-bold">Payment Details</p>
                                <p class="dis mb-3">Complete your purchase by providing your payment details:</p>
                            </div>
                            <form action="">
                                <div class="mb-3">
                                    <p class="dis fw-bold mb-2">Email address</p>
                                    <input class="form-control" type="email" value="<?php require 'connect.php';
                                                                                                                                if (isset($_SESSION['user_logged'])) {
                                                                                                                                    $user = $_SESSION['user_logged'];
                                                                                                                                    $sql = "SELECT * from customer where user_name='$user'";
                                                                                                                                    $result = mysqli_query($con, $sql);
                                                                                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                                                                                        $logged_user = $row['user_name'];
                                                                                                                                    }

                                                                                                                                    echo $logged_user;
                                                                                                                     } ?>" disabled>
                                </div>
                                <div>
                                    <div class="d-flex flex-column dis">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <p class="fw-bold">Total</p>
                                            <p class="fw-bold"><span><i class="fa-sharp fa-solid fa-indian-rupee-sign"></i></span><?php echo " " . $cookie; ?></p>
                                        </div>
                                        <form target="_blank" action="mail.php" method="POST">
                                            <input type="button" name="submit" class="btn btn-primary mt-2" onclick="myFunction()" value="<?php echo "Pay " . $cookie; ?>">
                                    </div>
                            </form>

                        </div>
                    </div>
                </div>
                </form>
                </div>
                </div>
                </div>
            </td>
        </tr>
    </tbody>
<?php } ?>
<script>
    function myFunction() {
        alert("booking has done successfully!");
    }
</script>
</body>

</html>



<?php
require 'connect.php';
$sel = "select * from customer";
$query = mysqli_query($con, $sel);
$result = mysqli_fetch_assoc($query);


if (isset($_POST['proceed'])) {
    $cid = $result['c_id'];
    $bookc_id = $_POST['product_id'];
    $date = $_POST['bookdate'];
    $size = $_POST['size'];
    $cookie = $_COOKIE['total'];
    // echo "<br>";
    // echo $date;
    // echo "<br>";
    // echo $size;
    // echo "<br>";
    // echo $cookie;
    // echo "<br>";
    //For inserting the values to mysql database 
    $sql_query = "INSERT INTO booking (c_id,bookcloth_id,b_date,size,total_amt)
    VALUES ('$cid','$bookc_id','$date','$size','$cookie')";

    if (!mysqli_query($con, $sql_query)) {
        echo "Error: " . $sql . "" . mysqli_error($con);
    }
    mysqli_close($con);
}
?>