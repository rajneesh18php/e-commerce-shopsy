<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mobile Products</title>
</head>
<body>
  <div class='container-fluid py-5'>
    <div class='row g-4'>
      <h1 class="text-warning text-center my-3">MOBILE</h1>
      <?php
      include 'config.php';
      $record = mysqli_query($con, "SELECT * FROM `tblproduct`");

      while ($row = mysqli_fetch_array($record)) {
        if ($row['Pcategory'] === 'mobile') {

          echo "
          <div class='col-md-4 col-lg-4 m-auto mb-3'>
            <div class='card m-auto' style='width: 18rem;'>
              <img src='../admin/product/{$row['Pimage']}' class='card-img-top m-auto' style='width: 170px; height:300px;' alt='Product Image'>
              <div class='card-body text-center'>
                <h5 class='card-title fw-bold'>{$row['pname']}</h5>
                <p class='card-text text-muted mb-2'>{$row['Pcategory']}</p>
                <h6 class='text-success fw-bold'>₹{$row['Pprice']}</h6>

                <form method='POST' action='addCart.php'>
                  <input type='hidden' name='pname' value='{$row['pname']}'>
                  <input type='hidden' name='Pprice' value='{$row['Pprice']}'>
                  <input type='number' name='quantity' value='1' min='1' max='20' class='form-control mb-2'>
                  <input type='submit' name='addCart' class='btn btn-warning w-100' value='Add to Cart'>
                </form>
              </div>
            </div>
          </div>";
        }
      }
      ?>
    </div>
  </div>
</body>
</html>
<?php
 include("footer.php");

?>