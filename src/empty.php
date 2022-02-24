<?php
session_start();
array_splice($_SESSION['cart'], 0);
foreach($_SESSION['products'] as $k=>$p)
{
    $_SESSION['products'][$k]['quantity'] = 0;
}
echo json_encode($_SESSION['cart']);
?>