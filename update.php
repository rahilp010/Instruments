<?php

$conn =mysqli_connect("localhost","root","")or die ("error");
$db =mysqli_select_db($conn,"music_login"); 
$id = $_GET['id'];
$query = "SELECT * FROM review where id='$id'";
$data = mysqli_query($conn,$query);
$row = mysqli_fetch_array($data);

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">
</head>
<body>
    
<div class="box1">
     <form action="" method="post">
         <label class="us1">UserName :</label><br><br>
     <input class="us2"  value="<?php echo $row['uname']; ?>" type="text" name="uname" required><br>
           <label class="us1">Rating :</label><br><br>
           <input class="us2" value="<?php echo $row['rating']; ?>" type="number" name="rating" min="1" max="5" required><br>
           <label class="us1">Review :</label><br><br>
           <textarea class="us2" value="<?php echo $row['feedback']; ?>" name="feedback" cols="35" rows="5" required></textarea>
           <input class="bt" name="update" type="submit" value="Update">
       </form>
   </div>

</body>
</html>


<?php
$conn =mysqli_connect("localhost","root","")or die ("error");
$db =mysqli_select_db($conn,"music_login"); 
if(isset($_POST['update'])){
$uname = $_POST['uname'];
$rating = $_POST["rating"];
$feedback = $_POST['feedback'];
$update = "UPDATE review SET uname='$uname',rating='$rating',feedback='$feedback' where id='$id'";
$data=mysqli_query($conn,$update);
if($data){
    echo "<script>
    alert ('Review Updated Successfully') ;
    window.location.assign('review_1.php');
    </script>";
}
mysqli_close($conn);
}
?>