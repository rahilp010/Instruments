<?php
$UserName = $_POST['UserName'];
$password = $_POST['password'];
$conn =mysqli_connect("localhost","root","")or die ("error");
$db =mysqli_select_db($conn,"music_login");
$query="select * from admin where UserName='$UserName' and password='$password' ";
$result1=mysqli_query($conn,$query);
$number1=mysqli_num_rows($result1);

if($number1==1){
   echo "<script>
   alert('successfully Login');
   </script>"
   ;
}
?>