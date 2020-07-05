<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <tr>

        <?php
        $no = 1;
        $query = "select * from tbl_certificate";
        $sql = mysqli_query($conn, $query);
        while ($hasil = mysqli_fetch_array($sql)) { ?>

            <td>
                <p align="center"><?php echo $hasil['nama'] ?></p>
                <p align="center"><?php echo $hasil['info']; ?></p>
                <p align="center">
                    <img width="30%" src="admin/gambar/<?php echo $hasil['foto']; ?>">
                </p>
                <br>
            </td>
    </tr>
<?php } ?>

</body>

</html>