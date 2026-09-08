<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin home page</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<?php

session_start();
if(!$_SESSION['admin']){
    header("location:form/login.php");
}
?>


<body>
    <nav class="navbar navbar-light bg-dark">
        <div class="container-fluid text-white">
            <a class="navbar-brand text-white">my store</a>
            <!-- <form class="d-flex">
                <input class="form-control me-2" type="serch" placeholder="serch" arial-label=""search>
                <button class="btn btn-outline-success" type="submit">search </button>
</form> -->
<span>
    <h4>Hello,<?php echo $_SESSION['admin']; ?> </h4>
<a href="form/logout.php" class="text-decoration-none text-white">Logout </a>
<a href="../user/index.php"  class="text-decoration-none text-white">User panel</a>
</span>
</div>
</nav>
<div>


<h2 class="text-center">dashboard</h2>
</div>
<div class="col-md-6 bg-primary text-center m-auto">
    <a href="product/index.php" class="text-white text-decoration-none fs-4 fw-bold px-5 mx-2">Add post</a>
    <a href="user.php" class="text-white text-decoration-none fs-4 fw-bold px-5">Users</a>

</div>
</body>
</html>