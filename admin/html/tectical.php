<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <tr>
        <td>
            <?php
            $no = 1;
            $query = "select * from tbl_support";
            $sql = mysqli_query($conn, $query);
            while ($hasil = mysqli_fetch_array($sql)) {
                $info = $hasil['info'];
            } ?>
            <p>
                <H2 align="center">Tectical & Application</H2>
            </p>
            <p><?php echo $info ?></>
        </td>
    </tr>
    <br> <br>
</body>

</html>