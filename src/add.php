<?php
session_start();
if(!isset($_SESSION["cart"]))
{
    $_SESSION["cart"]=array();
}
if(isset($_SESSION['products']))
{
    foreach($_SESSION['products'] as $key=>$product)
    {
        if($product['id']==$_GET['id'])
        {
            
            if($product['quantity']<1)
            {
                $product['quantity']=1;
                array_push($_SESSION['cart'],$product);
                $_SESSION['products'][$key]['quantity']=1;
            }
            else
            {
                $_SESSION['products'][$key]['quantity'] += 1;
                foreach($_SESSION['cart'] as $k=>$p)
                {
                    if($p['id']==$_GET['id'])
                    $_SESSION['cart'][$k]['quantity'] += 1;
                }

            }
        }
    }
}
echo json_encode($_SESSION['cart']);

?>