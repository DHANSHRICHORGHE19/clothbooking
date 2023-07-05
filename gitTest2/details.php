
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
        <table class="table">
          <tbody>
            <tr>
              <td class="p-4" align="center"><img src="<?php echo $cloth_img ?>" class="img-fluid" width="300px" alt="..."></td>
              <td>
                <div class="card" style="width: 450px;height: 550px; background:transparent;border:none">
                  <br>
                  <div class="card-body">
                    <h2 class="card-title text-danger">Product Code <span class="text-dark ml-4"><?php echo $cloth_id; ?></span></h2>
                    <h2 class="card-title text-danger">Product Name <span class="text-dark ml-4"><?php echo $cloth_name; ?></span></h2>
                    <p class="card-text"><?php echo $cloth_desc; ?></p>
                    <p class="card-text"><?php echo $cloth_price; ?></p>
                    <?php if (!isset($_SESSION['user_logged'])) {  ?>

                    <p><a href="login.php"><input type="submit" class="btn btn-primary" name="login" value="Continue"></a></p>
                    <?php } else { ?>

                    <a href="proceed1.php?pid=<?php echo $row['cloth_id']; ?>"><input type="submit" class="btn btn-primary" name="continue" value="Continue"></a></p>
                    <?php }
                    ?>
                    <br>
                    <p class="card-text">* In case of outfit booking: rent is for outfit only, accessories are not included.<br><br>
                    <span style="font-weight: 600;">
                    Refundable Deposit Amount:</span>
                    <br><br>
                    1. Security deposit to be paid at the time of pick up and will be returned after a thorough quality check & on receiving necessary clearances<br>
                    2. If outfit is damaged or has stains security amount will be deducted.<br>
                   
                  </div>
                </div>
              </td>

            </tr>
          </tbody>
        </table>
      </div>
      <div>
        <?php require 'aboutus.php'; ?>
        <?php require 'footer2.php'; ?>
      </div>
</body>

</html>
