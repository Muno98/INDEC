<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <h3 align="center">Products</h3>

    <h2 align="center"></h2>
    <?php
    $no = 1;
    $query = "select * from tbl_product";
    $sql = mysqli_query($conn, $query);
    while ($hasil = mysqli_fetch_array($sql)) { ?>
        <hr>
        <p>
            <img width="200" height="100" alt="" src="admin/gambar/<?php echo $hasil['foto'] ?>" style="padding-right:20px;float:left;">
        </p>
        <h3><?php echo $hasil['nama'] ?></h3>
        <p><?php echo $hasil['detail'] ?></p>
        <br> <br>
        <hr>
        <p>
        <?php } ?>
</body>

</html>