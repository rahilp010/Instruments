<?php
session_start();
$conn =mysqli_connect("localhost","root","")or die ("error");
$db =mysqli_select_db($conn,"music_login"); 
$query = "SELECT * FROM review";
$query1 = "SELECT * FROM payment";
$data = mysqli_query($conn,$query);
$data1 = mysqli_query($conn,$query1);
$result = mysqli_fetch_assoc($data);
$result1 = mysqli_fetch_assoc($data1);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">
    <style>
        body{   
        margin: 0;
        padding: 0;
        }
    </style>
</head>

<body>
        <p class="logo">HarmonyHaven - Admin</p>
        <a href="logout.php"><input class="logout" type="submit" value="SignOut"></a>
    <nav class="menu" >
        <ul style="margin-left:16%;">
            <li class="a1"><a href="#review">Reviews</a></li>
            <li class="a1"><a href="#payment">Payment</a></li>
            <li><a href="">About us</a></li>
            <li><a href="">Contact</a></li>
        </ul>
    </nav>
    <div class="part">
        <div class="compo3" id="review">
            <p class="logo2">Reviews</p>
            <table>
                <tr class='tr1'>
                    <th>UserName</th>
                    <th>Rating</th>
                    <th>Feedback</th>
                    <th></th>
                </tr>
                <?php
                    while($result = mysqli_fetch_assoc($data)){
                        echo 
                        "<tr style='text-align:justify'>
                        <td style='border:1px solid #ccc;text-align:center'>$result[uname]</td>
                        <td style='border:1px solid #ccc;text-align:center'>$result[rating]</td>
                        <td style='border:1px solid #ccc;'>$result[feedback]</td>
                        <td><a href=delete.php?id=$result[id]><input class='delete' type='submit' value='Delete'></a></td>
                        </tr>";
                    }
                ?>
            </table>
        </div>
        <div class="compo3" id="payment">
            <p class="logo2">Payment</p>
            <table style="width:100%">
                <tr class='tr1'>
                    <th>ProductName</th>
                    <th>PhoneNo</th>
                    <th>Address</th>
                    <th>PaymentMethod</th>
                    <th></th>
                </tr>
                <?php
                     while($result1 = mysqli_fetch_assoc($data1)){
                         echo 
                         "<tr style='text-align:justify'>
                         <td style='border:1px solid #ccc;text-align:center'>$result1[YourProduct]</td>
                         <td style='border:1px solid #ccc;text-align:center'>$result1[PhoneNo]</td>
                         <td style='border:1px solid #ccc;text-align:center'>$result1[Address]</td>
                         <td style='border:1px solid #ccc;text-align:center'>$result1[PaymentMethod]</td>
                         <td><a href=delete1.php?id=$result1[id]><input class='delete' type='submit' value='Delete'></a></td>
                         </tr>";
                     }
                ?>
            </table>
        </div>
    </div>
</body>

</html>

