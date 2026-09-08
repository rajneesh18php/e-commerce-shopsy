<?php
include 'config.php'; // database connection

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // SQL delete query
    $query = "DELETE FROM `tblproduct` WHERE id = '$id'";

    $result = mysqli_query($con, $query);

    if ($result) {
        echo "<script>
                alert('Record deleted successfully!');
                window.location.href='index.php'; // 🔁 change this to your display page name
              </script>";
    } else {
        echo "<script>
                alert('Error deleting record: " . mysqli_error($con) . "');
                window.location.href='index.php'; // change this also
              </script>";
    }
} else {
    echo "<script>
            alert('Invalid Request');
            window.location.href='index.php';
          </script>";
}
?>
