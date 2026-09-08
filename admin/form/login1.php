<?php
$con=mysqli_connect('localhost','root','','ecommerce');

$a_name= $_POST['username'];
$a_password= $_POST['password'];

$result=mysqli_query($con,"SELECT * FROM `admin` WHERE username = '$a_name' AND password = '$a_password' ");


session_start();

if(mysqli_num_rows($result)){


$_SESSION['admin'] = $a_name;

    echo "  
    
    <script>
    alert('login successfully');   
    window.location.href='../mystore.php';

    </script>
    ";

}
else{
     echo "  
    
    <script>
    alert('Invali username/password'); 
     window.location.href='login.php';   
    </script>
    ";
}


?>