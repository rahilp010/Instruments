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
    <div class="container">
        <h1>Musical Cart</h1>
        <div class="contant">
            <table style=''>
                <tr>
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
                        $total=$total + $value['Product_price'];
                        echo 
                        "<tr style='text-align:center'>
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
            <div class="contant1">
                <p class="txt1">Total :</p>
                <p class="sign">₹</p>
                <p class="txt2"><?php echo $total ?></p>
                <form action="">
                <p class="method"><input type="radio"  name="delivery" id="d1" required>Cash on Delivery</p>
                <p class="method"><input type="radio"  name="delivery" id="d2" required>UPI/GPay/Paytm </p>
                </form>
                <input type="submit" class="payment" value="Make Payment" id="payment" onclick="payment()">
                
            </div>
    </div>
    <script src="music.js"></script>
</body>
</html>

