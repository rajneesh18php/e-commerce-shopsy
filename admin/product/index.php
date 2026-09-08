<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add post</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-5">
    <form action="insert.php" method="POST" enctype="multipart/form-data">

    <div class="md-3">
        <p class="text-center fw-bold fs-3 text-warning"> Product Details: </p>
        
    </div>
     <div class="md-3">
        <label class="form-label">product name</label>
        <input type="text" name="pname" class="form-control" placeholder="enter product name"> 
</div>
     <div class="md-3">
        <label class="form-label">product price</label>
        <input type="number" name="Pprice" class="form-control" placeholder="enter product price"> 
</div>
     <div class="md-3">
        <label class="form-label">add product image</label>
        <input type="file" name="Pimage" class="form-control" > 
</div>
<div class="md-3">
        <label class="form-label">select page category</label>
        <select name="pages" class="form-select" aria-label="Default select e"> 
            <option value="home">home</option>
            <option value="laptop">laptop</option>
            <option value="bag">bag</option>
            <option value="mobile">mobile</option>
</select>

</div>
<button type="submit" name="submit" class="form-control bg-primary fs-4 fw-bold my-3 text-white">Upload</button>
</form>
</div>
        </div>
    </div>

    <!-- fetch data -->
     <div class="container">
        <div class="row">
            <div class="col-md-10  m-auto">

<table class="table border border-warning  table-hover border my-5">
    <thead class="bg-dark text-white fs-5 font-monospace tect-center">
        <th>id </th>
        <th>name</th>
        <th>Price </th>
        <th>Image </th>
        <th>category </th>
        <th>delete </th>
</thead>
<tbody class="text-center">
<?php include 'config.php' ;
$Record = mysqli_query($con,"SELECT * FROM `tblproduct`");

 
while($row = mysqli_fetch_array($Record))
    echo"
<tr>
<td>$row[id]</td>
<td>$row[pname]</td>
<td>$row[Pprice]</td>
<td><img src='$row[Pimage]' width='80px' height='80px' style='object-fit:cover;'></td>

<td>$row[Pcategory]</td>
           <td>
                    <a href='delete.php?id={$row['id']}  style='color:black; ' >Delete</a>
                </td>



" ;



?>

</tbody>

</table>
</div>
</div>
</div>
</body>
</html>