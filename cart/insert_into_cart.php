<?php
session_start();
// session_destroy();
if (isset($_GET)) {
    if(isset($_SESSION['cart']) && in_array($_REQUEST['productId'],$check_product=array_column($_SESSION['cart'],'productId'))){
        echo "Product already added";
    }else{
        if($_REQUEST['productQunatity']=='')
        $_REQUEST['productQunatity']=1;
        $_SESSION['cart'][] = array(
            'productId' => $_REQUEST['productId'],
            'productName' => $_REQUEST['productName'],
            'productPrice' => $_REQUEST['productPrice'],
            'productQuantity' => $_REQUEST['productQunatity'],
            'image_address' => $_REQUEST['image_address']
        );
                
              echo  "Product  added";
    }
}

                ?>