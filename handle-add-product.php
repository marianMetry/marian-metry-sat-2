<?php  include_once("functions.php") ?>


<?php


if (isset($_POST['submit']))
 {

    //   extract($_POST);
    $productName = $_POST['productName'];
    $disc = $_POST['disc'];
    $price = $_POST['price'];


    $errors=[];

    // productNam → required | string | min:5 | max:255
     if (empty($productName)) {
         $errors[]="product name is required";

     }elseif (! is_string($productName)) {
         $errors[]="product name must be string";
   
     }elseif (strlen($productName) <= 5 ) {

        $errors[]="product name min length = 5 chars";

     }elseif ( strlen($productName) > 25 ) {
        $errors[]="product name max length = 25 chars";
     }

        // description → optional | string 
        if (! is_string($disc)) {
            $errors[]="description must be string";
        }

    // price → required | number | min:0 
    if (empty( $price)) {
        $errors[]="price  is required";

    }elseif (! is_numeric($price)) {
        $errors[]="the price must be number";

    }elseif ($price <= 0 ) {

        $errors[]="the price must be >0";
    }

    if (! empty($errors))
    {
        print_r($errors);
    }
    else{

        echo "product name is :$productName <br>";
        echo "product description is :$disc <br>";
        echo "product price is :$price <br>";
        echo "product price after discount is :".getPriceWithDiscount($price);
        echo"<br>";
    }

    
   
// 
}