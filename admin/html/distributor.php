<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=p, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $no = 1;
    $query = "select * from tbl_distributor";
    $sql = mysqli_query($conn, $query);
    while ($hasil = mysqli_fetch_array($sql)) { ?>
        <tr>
            <td>
                <p>
                    <H2><?php echo $hasil['negara'] ?></H2>
                </p>
                <P><?php echo $hasil['nama'] ?></P>
                <p><?php echo $hasil['detail'] ?></p>

        </tr>
    <?php } ?>
</body>
</body>

</html>