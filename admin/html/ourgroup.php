<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        P {
            width: 30%;
            padding-left: 10px;
            background: rgb(239, 239, 239);
        }
    </style>
</head>

<body>
    <h2 align="center">Our Group</h2>
    <hr>
    <?php
    $no = 1;
    $query = "select * from tbl_group";
    $sql = mysqli_query($conn, $query);
    while ($hasil = mysqli_fetch_array($sql)) { ?>

        <p>
            <img width="350" height="200" src="admin/gambar/<?php echo $hasil['logo'] ?>">
        </p>
        <p>
            <?php echo $hasil['isi'] ?>
        </p>
        <p>Alamat <?php echo $hasil['alamat'] ?></p>
        <p>Email : <?php echo $hasil['email'] ?></p><br>
        <p>Web : <?php echo $hasil['web'] ?></p>
        <hr>
    <?php } ?>

</body>

</html>