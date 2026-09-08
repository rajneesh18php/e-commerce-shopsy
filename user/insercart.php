<?php


session_start();
if(isset($_SESSION['user'])){


$productname = $_POST['pname'];
        $productprice  = $_POST['Pprice'];
        $productquantity = $_POST['quantity'];

// if (isset($_POST['addCart'])) {

// $check_product = array_column(  $_SESSION['cart'],'productname');
// if(in_array($productname,$check_product )){

//     echo  "
//     <script>
//     alert('product already added');
//     window.location.href = 'index.php'
//         </script>
//     ";
// }else{



    $product = array(
        'productname' => $_POST['pname'],
        'productprice' => $_POST['Pprice'],
        'productquantity' => $_POST['quantity']
    );

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();  // make an empty array if none
    }

    $_SESSION['cart'][] = $product; // push product into the cart



    // Add product to session cart array
    // if (!isset($_SESSION['cart'])) {
    //     $_SESSION['cart'] = array(); // create cart if not exists
    // }

    // $_SESSION['cart'][] = $product; // add new product
 
        header("location:viewcart.php");
  // echo "<pre>";
    // print_r($_SESSION['cart']);
    // echo "</pre>";


}
else{
    header("location:form/login.php");
}



?>
