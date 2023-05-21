<?php
session_start();
$uname = $_POST["uname"];
$rating = $_POST["rating"];
$feedback = $_POST["feedback"];
$conn =mysqli_connect("localhost","root","")or die ("error");
$db =mysqli_select_db($conn,"music_login"); 
$query = "INSERT INTO review (uname,rating,feedback) VALUES ('$uname','$rating','$feedback')";
    if (mysqli_query($conn, $query))
    {
        echo "<script>
        alert ('Review Added Successfully') 
        window.location.assign('music_home.html')
        </script>";
    }
    else
    {
        echo"<script>
        alert ('Plaese Try again later !!') 
        </script>";
    }
    mysqli_close($conn);
?>