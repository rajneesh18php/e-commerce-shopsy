<?php
include("header1.php");?>
<div class="container center">
 <div class="row">
    <div class="col-md-6 mt-5 bg-white   shadow  border border-info">

<p class="text-primary  text-center fs-3 fw-bold my-3 ">USER  LOGIN</p>

<form action="login1.php" method="POST">
<div class="md-3 mt-3">
    <label for="">Username</label>
    <input type="text" name="name" class="form-control" placeholder="Enter your name">


</div>
<!-- <div class="md-3 mt-3">
    <label for="">UserEmail</label>
    <input type="email" name="email" class="form-control" placeholder="Enter your email">


</div> -->

<div class="md-3 mt-3">
    <label for="">Password</label>
    <input type="password" name="password" class="form-control" placeholder="Enter your name">


</div>
<div class="mb-3 justufy-content-center align-item-center ">
    <button name="login" class="form-control bg-primary fs-4 fw-bold my-3 text-white">LOGIN</button>
</div>
<div class="mb-3 justufy-content-center align-item-center ">
    <button class="form-control bg-warning fs-7 my-3 text-white "><a href="register.php" class="text-decoration-none" > NEW REGISTRATION <a></button>
</div>

</form>

    </div>
 </div>
</div>