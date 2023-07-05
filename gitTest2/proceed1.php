
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
    <title>proceed1</title>
</head>

<body>
    <?php require 'headers.php'; ?>
    <?php require 'connect.php'; ?>
    <div class="product-cart-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 clearfix">
                    <h2 class="section-head">My Cart</h2>
                    <?php
                    $id = $_GET['pid'];
                    $sql = "Select * from clothes where cloth_id=$id";
                    $result = mysqli_query($con, $sql);
                    $row = mysqli_fetch_assoc($result);
                    $cloth_id = $row['cloth_id'];
                    $cloth_name = $row['cloth_name'];
                    $cloth_desc = $row['cloth_desc'];
                    $cloth_img = $row['cloth_img'];
                    $cloth_price = $row['cloth_price'];
                    ?>
                    <form action="proceeddata1.php" method="POST">
                    <table class="table table-bordered">
                        <thead>
                            <th width="90px">Product Image</th>
                            <th width="40px">Product Name</th>
                            <th width="40px">Product Price</th>
                            <th width="80px">Check in</th>
                            <th width="80px">Size</th>
                            <th width="80px">No of days</th>
                            <th width="80px">Sub Total</th>
                            
                        </thead>
                        <tbody>
                            <tr class="item-row">
                                <td width="70px" align="center"><img src="<?php echo $cloth_img; ?>" width="90px" /></td>

                                <td><?php echo $row['cloth_name']; ?></td>

                                <td><span class="product-price"><?php echo $row['cloth_price']; ?></span></td>

                                <td width="40px"><span><input type="date" name="bookdate" class="form-control" required></span></td>

                                <td width="70px">
                                    <select class="form-control" name="size" required>
                                        <option value="" selected hidden>Select Size</option>
                                        <option>S</option>
                                        <option>M</option>
                                        <option>L</option>
                                        <option>XL</option>
                                    </select>
                                </td>
                                <td>
                                    <input class="form-control item-qty"name="nofd" type="number" id="nof" value="1" onclick="add()">
                                    <input type="hidden" class="item-id" value="<?php echo $row['cloth_id']; ?>" />
                                    <input type="hidden" class="item-price" id="p1" value="<?php echo $row['cloth_price']; ?>" />
                                </td>
                                <td><span class="sub-total" id="res"></span></td>
                            </tr>
                            <tr>
                                <td colspan="6" align="right"><b>TOTAL AMOUNT</b></td>
                           
                                <td class="total-price" id="res2"></td>
                            </tr>
                        </tbody>
                    </table>
                    

                        <input type="hidden" name="product_id" value="<?php echo $cloth_id; ?>">
                        <!-- <input type="hidden" name="total_price" value="" id="res3"> -->
                        <input type="submit" name="proceed" class="btn btn-md btn-success" value="Proceed to Checkout">
                    </form>

<!--script-->
<script>
    function add()
    {
    //    alert("working"); 
    var n1=parseInt(document.getElementById("nof").value);
    var n2=parseInt(document.getElementById("p1").value);
    var sum=n1*n2;
    document.getElementById("res").innerHTML=sum;
    document.getElementById("res2").innerHTML=sum;
    document.cookie="total="+sum;
    
    }
</script>

</body>

</html>
