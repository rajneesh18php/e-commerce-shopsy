<?php
include 'header.php';
// session_start();

// echo "<pre>";
// print_r($_SESSION['cart']);
// echo "</pre>";
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center bg-light mb-5 rounded">
            <h1 class="text-warning">MY CART</h1>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row justify-content-around">
        <div class="col-sm-12 col-md-6 col-lg-9">
            <table class="table table-bordered text-center">
                <thead class="bg-warning fs-4">
                    <tr>
                        <th>Index</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $total = 0;
                    $ptotal = 0;
                    if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
                        foreach ($_SESSION['cart'] as $index => $val) {
                            if (is_array($val)) { // ✅ ensure $val is array
                                $total = $val['productprice'] * $val['productquantity'];
                                $ptotal += $val['productprice'] * $val['productquantity'];   $total = $val['productprice'] * $val['productquantity'];
                                echo "
                           
                                <tr>
                                    <td>{$index}</td>
                                    <td>{$val['productname']}</td>
                                    <td>{$val['productprice']}</td>
                                    <td>{$val['productquantity']}</td>
                                    <td>{$total}</td>
                                  
                                    <td><a href='update.php.php?index={$index}' class='btn btn-warning btn-sm'>Update</a></td>
                                    <td><a href='delete.php?index={$index}' class='btn btn-danger btn-sm'>Delete</a></td>
                                </tr>
                                
                               ";
                            }
                        }
                    } else {
                        echo "<tr><td colspan='7' class='text-danger'>Your cart is empty!</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="col-lg-3 text-center">
            <h3>TOTAL
                </h3>
                <H1 class="bg-black text-white"><?php echo number_format($ptotal,2)?>
            </H1>
        </div>
    </div>
</div>
