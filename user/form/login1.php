<?php



$name  = $_POST['name'];
$Password = $_POST['password'];

$con=mysqli_connect('localhost','root','','ecommerce');


$result = mysqli_query($con," SELECT * FROM `tbluser` WHERE  username = '$name'  ");
// $result1 = mysqli_query($con," SELECT * FROM `tbluser` WHERE  password = '$password'   ");
// -- or email = '$name' ) AND ( password = '$password' )  and ( password = '$password')


session_start();

if(mysqli_num_rows($result )){

    $_SESSION['user'] = $name ;
    echo "
    <script>
    alert('SUCCESSFULLY LOGIN');
    window.location.href = '../index.php';
    </script>
    ";
}
else{

    
    echo "
    <script>
    alert('incorrect email/password/ password');
   
    </script>
    ";
}

?>