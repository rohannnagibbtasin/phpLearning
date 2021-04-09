<?php

require_once "namespace.php";
    echo Product\num."<br>";
    Product\dis();
    $obj = new Product\Laptop;

require_once "sub_namespace.php";
    echo Product\BD\NUM."<br>";
    Product\BD\dis();
    $obj = new Product\BD\Laptop;
require_once "multiple_namespace.php";
    echo Product1\NUM."<br>";
    Product1\disp();
    $obj =new Product1\Laptop;

    echo Product2\NUM."<br>";
    Product2\disp();
    $obj = new Product2\Laptop;

require_once "alias_namespace.php";
    echo Pro\NUM."<br>";
    use const Pro\NUM;
    //use const {num};
    echo NUM;
?>