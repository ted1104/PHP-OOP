<?php
    require 'product.php';    
    require 'test.php';

    use test\Test;
    use pro\Product;


    $obj = new Test();
    $obj1 = new Product();

    $obj1->listProduct();
    echo '<br>';

    $obj->first()->second()->third();

    


?>