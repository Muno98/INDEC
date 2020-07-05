<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2 align="center"></h2>
    <?php
    $no = 1;
    $query = "select * from tbl_about";
    $sql = mysqli_query($conn, $query);
    while ($hasil = mysqli_fetch_array($sql)) {

        $gambar = $hasil['foto'];
        $isi = $hasil['isi'];
    } ?>
    <tr>
        <td>
            <p>
                <H2 align="center">Our People</H2>
            </p>
            <p align="center"><img width="80%" height="" src="admin/gambar/ourpeople.jpg"g<?php echo $gambar ?>></p>
            <br>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <?php echo $isi ?>
            </p>
        </td>
    </tr>
</body>

</html>