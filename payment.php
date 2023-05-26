<?php
$ProductName=$_POST["ProductName"];
$PhoneNo=$_POST["PhoneNo"];
$Address=$_POST["Address"];
$PaymentMethod=$_POST["PaymentMethod"];

$conn= new mysqli('localhost','root','','music_login');
if($conn->connect_error){
    die("error".$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into payment (YourProduct,PhoneNo,Address,PaymentMethod) values(?,?,?,?)");
    $stmt->bind_param("ssss",$ProductName,$PhoneNo,$Address,$PaymentMethod);
    $stmt->execute();
    echo "<script>
    alert('Payment successfully');
    window.location.assign('music_home.html');
    </script>";
    $stmt->close();
    $conn->close();
}
?>

