<?php
session_start(); 

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['ADD_TO_CART']))
    {
        if(isset($_SESSION['cart']))
        {
            $myitem= array_column($_SESSION['cart'],'Product_name');
            if(in_array($_POST['Product_name'],$myitem))
            {
                echo "<script> 
                alert('Product Already Added');
                window.location.assign('music_home.html');
                </script>";
            }
            else{
            $count=count($_SESSION['cart']);
            $_SESSION['cart'][$count]=array('Product_name' => $_POST['Product_name'],'Product_price'=>$_POST['Product_price'],'Quantity'=>1);
            echo "<script> 
            alert('Product Added');
            window.location.assign('music_home.html');
            </script>";
            }
        }
        else
        {
            $_SESSION['cart'][0]=array('Product_name' => $_POST['Product_name'],'Product_price'=>$_POST['Product_price'],'Quantity'=>1);
            echo "<script> 
            alert('Product Added');
            window.location.assign('music_home.html');
            </script>";
        }
    }
    if(isset($_POST['remove_item']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
            if($value['Product_name']==$_POST['Product_name'])
            {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart']=array_values($_SESSION['cart']);
                echo "<script>
                alert('Product Removed');
                window.location.href='mycart.php';
                </script>";
            }
        }
    }
}
?>