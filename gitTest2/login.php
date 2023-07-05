
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <!--bootstrap font link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!--bootstrap script link-->
    
    <!--bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/login.css">

</head>
<body>
     <!--adding header and footer files-->
     <?php require 'headers.php';?>
   
    
<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="./images/logos/logo3.webp"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">We are The Bebeautiful Team</h4>
                </div>

                <form action="login_verify.php" method="post" name="form">
                  <p>Please login to your account</p>

                  <div class="form-outline mb-4">
                    <input type="email" id="form2Example11" class="form-control" name="username" placeholder="Enter your email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" />
                    <label class="form-label" for="form2Example11">Username</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example22" class="form-control" name="password" />
                    <label class="form-label" for="form2Example22">Password</label>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                  <input type="submit" name="login" value="LogIn" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"> 
                  <a class="text-muted" href="#!">Forgot password?</a>
                  </div>
                  
                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <a href="register.php"><button type="button" class="btn btn-outline-danger">Create new</button></a>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">We are more than just a company</h4>
                <p class="small mb-0">BeBeautiful with us offers premium fashion rental services at delightful prices. Be it weddings, brunch parties, pre wedding shoots or themed fashion shows - rent your choice and say goodbye to month-long waiting for sales and discounts on your favourite brands. Our charming collections includes designer outfits from premium brands and fashion giants like Sabyasachi, Ridhi Mehra, Sonam Parmar and Kora - all at a mere fragment of their respective market prices! </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
        $(document).ready(function() {
            $("form").submit(function() {
                alert("successfully login!");
            });
        });
    </script>
</body>
</html>