<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        hr {
            width: 30%;
            padding-left: 10px;
            background: rgb(239, 239, 239);
        }
    </style>
</head>

<body>
    <h2 align="center">OurVision</h2>
    <?php
    $no = 1;
    $query = "select * from tbl_vision";
    $sql = mysqli_query($conn, $query);
    while ($hasil = mysqli_fetch_array($sql)) { ?>
        <strong><?php echo $hasil['judul'] ?></strong>
        <p><?php echo $hasil['isi'] ?></p>
    <?php } ?>
    </table>
    <br>
</body>

</html>