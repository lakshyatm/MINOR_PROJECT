<?php

require ("database/DBController.php");
require ("database/product.php");
require ("database/cart.php");

$db=new DBController();
$product= new Product($db);
$product_shuffle=$product->getdata();

 
$cart=new Cart($db);

