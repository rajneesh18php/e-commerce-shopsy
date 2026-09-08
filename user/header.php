<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-com shop</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="bootstrap.css">
    <script src="https://kit.fontawesome.com/8bce49fcd8.js" crossorigin="anonymous"></script>
    <style>

body{

background:

radial-gradient(circle at 10% 10%,#d8b4fe55 0%,transparent 25%),
radial-gradient(circle at 90% 20%,#60a5fa55 0%,transparent 30%),
radial-gradient(circle at 50% 100%,#f9a8d455 0%,transparent 30%),
linear-gradient(135deg,#ffffff,#f8fbff);

background-attachment:fixed;

}

/* body{

background:

radial-gradient(circle at 15% 20%,rgba(255,140,0,.30),transparent 22%),

radial-gradient(circle at 85% 15%,rgba(0,150,255,.28),transparent 25%),

radial-gradient(circle at 50% 90%,rgba(255,0,128,.20),transparent 28%),

linear-gradient(135deg,#ffffff,#f7fbff,#ffffff);

background-attachment:fixed;

} */


      .navbar{
    background: linear-gradient(90deg,
    #0f172a,
    #4c1d95,
    #db2777,
    #f59e0b);

    padding: 10px 15px;
    border-radius: 0 0 15px 15px;
    box-shadow: 0 8px 25px rgba(0,0,0,.25);
}

.navbar-brand,
.nav-link{
    color:#fff !important;
    font-weight:600;
    transition:.3s;
}

.nav-link:hover{
    color:#ffe082 !important;
    transform:translateY(-2px);
}
.card-top-img{
  height: 20vh;
  width: 30vw;
  overflow: hidden;
}
    </style>
</head>



<body>
  <?php
  session_start();
   $count=0;
if(isset($_SESSION['cart'])){

  $count = count($_SESSION['cart']);
}

?>

    <script src="https://kit.fontawesome.com/8bce49fcd8.js" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-white bg-white shadow color-blue ">
  <div class="container">
    <a class="navbar-brand fw-bold text-warning" href="index.php">E-com shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
      data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
      <li class="nav-item fs-5"><a class="nav-link" href="index.php"> <i class="fa-solid fa-house"> </i>Home</a></li>

     

        <li class="nav-item"><a class="nav-link" href="viewcart.php"><i class="fa-solid fa-cart-shopping"></i>Cart (<?php   echo $count ; ?>)</a></li>
<?php
if(isset($_SESSION['user'])){

    echo '    <li class="nav-item text-warning"><a class="nav-link" href="./form/logout.php"><i class="fa-solid fa-users"></i>Logout</a></li>';

}else{
    echo '    <li class="nav-item text-warning"><a class="nav-link" href="./form/login.php"><i class="fa-solid fa-users"></i>Login</a></li>';

}

?>


        <!-- <li class="nav-item text-warning"><a class="nav-link" href="./form/login.php"><i class="fa-solid fa-users"></i>Login</a></li> -->
        <li class="nav-item text-warning"><a class="nav-link" href="../admin/mystore.php"><i class="fa-solid fa-user-secret"></i>Admin</a></li>

      </ul>
      <!-- Example single danger button -->

    </div>
  </div>
</nav>
<!-- <div class="container my-5"> -->



<div class="container bg-warning sticky-top font-monospace">
    <ul class="list-unstyled d-flex justify-content-center">
        <li><a href="laptop.php" class="text-decoration-none text-white  bg-black  fs-4 px-5">LAPTOP</a></li>
        <li><a href="mobile.php" class="text-decoration-none text-white bg-black  fs-4 px-5">MOBILE</a></li>
        <li><a href="bag.php" class="text-decoration-none text-white  bg-black fs-4 px-5">BAG</a></li>
    </ul>
</div>
<div>



</div>
</body>
