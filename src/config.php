<?php
session_start();
$products=array(array("id"=>"101","name"=>"Football","img"=>"images/football.png","class"=>"product","price"=>150.00,"quantity"=>0),
                  array("id"=>"102","name"=>"Tennis","img"=>"images/tennis.png","class"=>"product","price"=>120.00,"quantity"=>0),
                  array("id"=>"103","name"=>"Basketball","img"=>"images/basketball.png","class"=>"product","price"=>90.00,"quantity"=>0),
                  array("id"=>"104","name"=>"Table Tennis","img"=>"images/table-tennis.png","class"=>"product","price"=>110.00,"quantity"=>0),
                  array("id"=>"105","name"=>"Soccer","img"=>"images/soccer.png","class"=>"product","price"=>80.00,"quantity"=>0)
);
if(!isset($_SESSION["products"]))
{
    $_SESSION["products"]=$products;
}

?>