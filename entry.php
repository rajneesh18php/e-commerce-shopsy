<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>E-Commerce Portal</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
    
}

body{
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(135deg,#6a11cb,#2575fc);
    overflow:hidden;
}

/* Background Circles */
body::before,
body::after{
    content:"";
    position:absolute;
    border-radius:50%;
    filter:blur(20px);
}

body::before{
    width:250px;
    height:250px;
    background:#00e5ff;
    top:60px;
    left:120px;
}

body::after{
    width:300px;
    height:300px;
    background:#ff4081;
    bottom:50px;
    right:100px;
}

/* Glass Card */
.glass-card{
    width:420px;
    padding:45px;
    text-align:center;
    background:rgba(255,255,255,.12);
    backdrop-filter:blur(18px);
    -webkit-backdrop-filter:blur(18px);
    border:1px solid rgba(255,255,255,.25);
    border-radius:25px;
    box-shadow:0 8px 32px rgba(0,0,0,.35);
    z-index:10;
}

.glass-card h1{
    color:#fff;
    font-weight:bold;
    margin-bottom:10px;
}

.glass-card p{
    color:#f2f2f2;
    margin-bottom:35px;
}

/* Buttons */

.btn-glass{
    display:block;
    width:100%;
    text-decoration:none;
    padding:15px;
    margin:18px 0;
    border-radius:50px;
    font-size:20px;
    font-weight:bold;
    color:#fff;
    background:rgba(255,255,255,.18);
    border:1px solid rgba(255,255,255,.35);
    transition:.4s;
}

.btn-glass:hover{
    background:#fff;
    color:#2575fc;
    transform:translateY(-5px);
}

.footer{
    margin-top:30px;
    color:#fff;
    font-size:14px;
}

</style>

</head>

<body>

<div class="glass-card">

    <h1>🛒 E-Commerce</h1>

    <p>Select Your Portal</p>

    <a href="user/form/login.php" class="btn-glass">
    👤 Enter your Website
</a>


   

    <div class="footer">
        &copy Developed by <a href="admin/form/login.php" class="btn">
         <b>⚙️ Rajneesh Kumar</b>
    </a>
    </div>

</div>

</body>
</html>

<!-- <h4 class=" text-white  bg-black fs-4 px-5"><php echo strtoupper($_SESSION['user']) ?></h4> -->
<!--  -->