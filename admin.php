
<?php
session_start();
$conn =mysqli_connect("localhost","root","")or die ("error");
$db =mysqli_select_db($conn,"music_login"); 
$query = "SELECT * FROM review";
$data = mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($data);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
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
    <div class="part">
        <div class="part1">
            <div class="compo1">
                <p class="logo">HarmonyHaven</p>
                <p class="logo2">Admin</p>
                <hr>
                <div class="compo2">
                    <p class="m1">Review Details</p>
                </div>
            </div>
        </div>
        <div class="part2">
            <div class="compo3">
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
                                    <td style='border:1px solid;text-align:center'>$result[uname]</td>
                                    <td style='border:1px solid;text-align:center'>$result[rating]</td>
                                    <td style='border:1px solid;'>$result[feedback]</td>
                                    <td><a href=delete.php?id=$result[id]><input class='delete' type='submit' value='Delete'></a></td>
                                    </tr>";
                                }
                            ?>
                </table>
            </div>
         </div>
</body>

</html>

