<?php
include("config.php");
foreach($products as $key=>$product)
{
    echo "<div id='product-".$product['id']."' class=\"product\">
    <img src=".$product['img'].">
    <h3 class=\"title\"><a href=\"#\">Product ".$product['id']." </a></h3>
    <span>Price:  $".$product['price']." </span>
    <a class=\"add-to-cart\" data-id=".$product['id'].">Add To Cart</a>
</div>";
}
?>