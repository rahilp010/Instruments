<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCart</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">
</head>

<?php
$email=$_SESSION['email'];
if($email==true){

}
else{
    header('location:login.html');
}
?>
<body>
    <div class="container" style=" margin-bottom: 29px;">
        <h1>Musical Cart</h1>
        <div class="contant">
            <table style=''>
                <tr>
                <th>Sr.NO</th>
                <th>Product</th>
                <th>Price</th>
                <th></th>
                </tr>
                <?php
                $total=0;
                if(isset($_SESSION['cart']))
                {
                    foreach($_SESSION['cart'] as $key => $value)
                    {
                        $sr=$key+1;
                        $total=$total + $value['Product_price'];
                        echo 
                        "<tr style='text-align:center'>
                        <td>$sr</td>
                        <td style='border:1px solid ; padding: 15px;'>$value[Product_name]</td>
                        <td style='border:1px solid;'>$value[Product_price]</td>
                        <td><form action='cart.php' method='post'>
                         <input class='r1' name='remove_item' type='submit' value='Remove'> 
                         <input type='hidden' name='Product_name' value='$value[Product_name]'> 
                        </form>
                         </td>
                        </tr>";
                    }
                }
                ?>
            </table>
        </div>
        <a href="#payment1">
            <div class="contant1">
                <p class="txt1">Total Cost</p>
                <p class="txt2"><?php echo"₹";echo $total ?></p>
                <p class="txt3">Tap to Pay</p>
            </div>
        </a>
    </div>
    <div class="container2" id="payment1">
        <p class="pay">Payment GateWay</p>
        <form class="f12" action="payment.php" method="post">
            <label for="">Your Product :</label><br>
            <input type="text" name="ProductName" value="<?php  foreach($_SESSION['cart'] as $key => $value)
                    {
                        echo $value['Product_name'];echo', ';
                        }?>"
            >
            <label for="" style="position:relative;top:-20px;left:70px;">PhoneNo :</label>
            <input type="text" name="PhoneNo" required pattern="[0-9]{10}" maxlength="10">
            <label for="" style=" position: relative;top: 30px;">Address :</label><br>
            <textarea name="Address" id="address" cols="44" rows="5" required></textarea>
            <span>
            <input type="radio" name="PaymentMethod" id="gpay" value="Gpay" required><span style="margin-left:5%;">UPI/</span>
            <i class="fa-brands fa-google-pay fa-2xl" style="color: #4b5677;"></i>
            </span>
            <span>
            <input type="radio" name="PaymentMethod" id="gpay1" value="Cash on Delivery" required><span style="margin-left:-9.5%;position:relative;top:16%;">Cash On Delivery</span>
            <i class="fa-duotone fa-person-carry-box fa-xl" style="margin-left:1%;position:relative;top:16%;"></i>
            </span>
            <input id="pay1" type="submit" value="Payment">
        </form>
    </div>
    <script src="music.js"></script>
</body>
</html>

