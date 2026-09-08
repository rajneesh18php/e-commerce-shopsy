<?php
include("header.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-com shop</title>
</head>
<body>
    <div class='container-fluid py-5'>
      
      <div class='row g-4'>
    <h1 class="text-warning text-center my-3">HOME</h1>
    <?php
    include('config.php');
    
   
    $record = mysqli_query($con, "SELECT * FROM `tblproduct`");
     while(   $row =mysqli_fetch_array($record)){
       
    $check_page =$row['Pcategory'] ;   
if(  $check_page === 'home'){
    
echo "


        <div class='col-md-4 col-lg-4 m-auto mb-3 '>
          <form action = 'insercart.php' method ='POST'>

          <div class='card m-auto style='width: 18rem;'>
            <img src='../admin/product/$row[Pimage] ' class='card-img-top m-auto' style= 'width: 170; height:300px' alt='Product Image'>
            <div class='card-body text-center'>
              <h4 class='card-title fw-bold'>{$row['pname']}</h4>
              <p class='card-text text-muted mb-2'>{$row['Pcategory']}</p>
              <h6 class='text-success fw-bold'>₹{$row['Pprice']}</h6>
              <input type='hidden' name='pname' value='$row[pname]' >
              <input type='hidden' name='Pprice' value='$row[Pprice]' >
            <input type='number' name='quantity' value='min='1' max='20'' placeholder='quantity'><br><br>
            <input type='submit' name = 'addCart' class = 'btn btn-warning text-yellow w-100 ' value='Add to Cart'> 
            </div>
          </div>
          </form>
        </div>
        ";
    }
}
    ?>
  </div>
</div>




</body>
</html>
<?php include("footer.php");?>




