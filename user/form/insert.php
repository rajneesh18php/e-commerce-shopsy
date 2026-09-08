<?php


$con=mysqli_connect('localhost','root','','ecommerce');




if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];



$dup_email = mysqli_query($con, " SELECT * FROM `tbluser` WHERE email = '$email' ");
$dup_username = mysqli_query($con, " SELECT * FROM `tbluser` WHERE username = '$name' ");


if(mysqli_num_rows($dup_email)){

    echo "
    <script>
    alert('THIS EMAIL IS ALREADY TAKEN');
    window.location.href = 'register.php';
    </script>
    ";
}

if(mysqli_num_rows($dup_username)){

    echo "
    <script>
    alert('THIS USERNAME IS ALREADY TAKEN');
    window.location.href = 'register.php';
    </script>
    ";
}
else{
    mysqli_query($con,"  INSERT INTO `tbluser`( `username`, `email`, `contact`, `password`) VALUES ('$name',' $email ',' $contact',' $password')");

 echo "
    <script>
    alert('REGISTER SUCCESSFULLY ');
    window.location.href = 'login.php';
    </script>
    ";

}


}
?>