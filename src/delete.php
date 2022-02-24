<?php
session_start();
foreach($_SESSION['cart'] as $key=>$value)
{
    if($value['id']==$_GET['id'])
    {
        array_splice($_SESSION['cart'], $key,1);

    }


}
foreach($_SESSION['products'] as $k=>$p)
{
    if($p['id']==$_GET['id'])
    $_SESSION['products'][$k]['quantity'] = 0;
}
echo json_encode($_SESSION['cart']);
?>