<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    
</head>
<body>

 <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-5">
    <form action="login1.php" method="POST" >

    <div class="md-3">
        <p class="text-center fw-bold fs-3 text-warning"> LOGIN FORM </p>
        
    </div>
     <div class="md-3">
        <label class="form-label">Name</label>
        <input type="text" name="username" class="form-control" placeholder="enter your name"> 
</div>
     <!-- <div class="md-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" placeholder="enter valid email"> 
</div> -->
<div class="md-3">
    <label class="form-label">Password</label>
    <input type="password" name="password" class="form-control" placeholder="enter password"> 
</div>
<!-- <div class="md-3">
   <label class="form-label">Upload image</label>
   <input type="file" name="Pimage" class="form-control" > 
</div> -->

<button type="submit" name="submit" class="form-control bg-primary fs-4 fw-bold my-3 text-white">LOGIN</button>
</form>
</div>
        </div>
    </div>
    
</body>
</html>