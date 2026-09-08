<?php
// include './user/form/header1.php';

include('C:\wamp64\www\e-commerce\user\form\header1.php');

$con=mysqli_connect('localhost','root','','ecommerce');
?>



<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>Sr.</th>
            <th>Username</th>
            <th>Email</th>
            <th>Contact</th>
        </tr>
    </thead>

    <tbody>

    <?php
    $result = mysqli_query($con, "SELECT * FROM tbluser");

    while($row = mysqli_fetch_assoc($result))
    {
    ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['contact']; ?></td>
        </tr>
    <?php
    }
    ?>

    </tbody>
</table>

  