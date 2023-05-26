<?php
session_start();
$conn =mysqli_connect("localhost","root","")or die ("error");
$db =mysqli_select_db($conn,"music_login"); 
$query = "SELECT * FROM payment";
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
</head>
<body>
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
                        <td style='border:1px solid #ccc;text-align:center'>$result[PhoneNo]</td>
                        <td style='border:1px solid #ccc;text-align:center'>$result[rating]</td>
                        <td style='border:1px solid #ccc;'>$result[feedback]</td>
                        <td><a href=delete.php?id=$result[id]><input class='delete' type='submit' value='Delete'></a></td>
                        </tr>";
                    }
                ?>
            </table>
</body>
</html>
                   
            