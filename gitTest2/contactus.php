<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!--bootstrap font link-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!--bootstrap script link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!--bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    <!--Section: Contact v.2-->
    <section id="contact">
        <div class="container mt-4" style="padding-right: var(--bs-gutter-x,4.75rem);
    padding-left: var(--bs-gutter-x,5.75rem); background-image: url(./images/background/bg1.webp);
      background-size:cover;">
            <h1 class="display-5 fw-bold text-center">Contact us</h1>
            <form target="_blank" action="https://formsubmit.co/9876.bebeautiful@gmail.com" method="POST">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                        </div>
                        <div class="col mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <textarea placeholder="Your Message" class="form-control" name="message" rows="6"
                        required></textarea>
                </div>
                <button type="submit" class="btn btn-lg btn-dark w-100 mb-4 mt-2">Submit Form</button>
            </form>
        </div>
    </section>  
    <!--Section: Contact v.2-->
    
</body>
</html>