<?php
session_start();

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css">
  <!--font aweosme-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
  <title>bootstrap</title>
  <style>
    html,
    body {
      min-height: 100%;
    }

    body,
    div,
    form,
    input,
    select,
    p {
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: black;
    }

    h1 {
      margin: 0;
      font-weight: 400;
    }

    h3 {
      margin: 12px 0;
      color: black;
    }

    .main-block {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    form {
      width: 83%;
      padding: 0px;
    }

    .f1 {
      width: 500px;
    }

    input,
    label {
      width: 100%;
    }

    label {
      padding: 0 5px;
      text-align: right;
      vertical-align: middle;
    }

    input {
      padding: 5px;
      vertical-align: middle;
    }

    label {
      width: 40%;
    }

    input {
      width: 60%;
    }
  </style>
</head>

<body>
  <?php require 'headers.php'; ?>
  <?php require 'connect.php'; ?>
  <?php
  $id = $_GET['details_id'];
  $sql = "Select * from clothes where cloth_id=$id";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($result);
  $cloth_id = $row['cloth_id'];
  $cloth_name = $row['cloth_name'];
  $cloth_desc = $row['cloth_desc'];
  $cloth_img = $row['cloth_img'];
  $cloth_price = $row['cloth_price'];
  ?>
  <div class="jumbotron mt-4 ">
    <div class="container-fluid custom-container">
      <h1 class="display-4 text-center "><?php echo $cloth_name; ?></h1>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-sm-12">
            <img src="<?php echo $cloth_img ?>" class="img-fluid" alt="...">
          </div>
          <div class="col-lg-6 col-sm-12">
            <h2 class="text-center text-danger"><?php echo $cloth_name; ?></h2>
            <p><?php echo $cloth_desc; ?></p>
            <p><strong>Price: </strong><?php echo $cloth_price; ?></p>
            <form method="GET" action="#">
              <div class="f1">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <span class="form-label text-white">Check In</span>
                      <input type="date" name="bookdate" class="form-control" required>

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
                      <?php if (!isset($_SESSION['user_name'])) {  ?>
                        <br><br><br>
                        <p><a href="login.php"><input type="submit" class="btn btn-primary" name="continue" value="Continue"></a></p>
                      <?php } else { ?>
                        <br><br><br>
                        <a href="add2.php"><input type="submit" class="btn btn-primary" name="continue" value="Continue"></a></p>
                      <?php }
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
  <?php require 'aboutus.php'; ?>
  <?php require 'footer2.php'; ?>

</body>

</html>
<?php
$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "rentit";

$conn = mysqli_connect($server_name, $username, $password, $database_name);
//now check the connection
if ($conn) {
  echo "connected successfully";
} else {
  die("Connection Failed:" . mysqli_connect_error());
}
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

