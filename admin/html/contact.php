<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $no = 1;
    $query = "select * from tbl_support";
    $sql = mysqli_query($conn, $query);
    while ($hasil = mysqli_fetch_array($sql)) {
        $email = $hasil['email'];
        $telepon = $hasil['telepon'];
        $web = $hasil['web'];
        $alamat = $hasil['alamat'];
    } ?>
    <tr>
        <td>
            <p>
                <H2>Indec Diagnostic</H2>
            </p>
            <P>Indec Diagnostic</P>
            <P><?php echo $alamat ?>
                <p>
                    <H2>Email</H2>
                </p>
                <div class="column">
                    <ion-icon name="mail-outline" size="large"></ion-icon>
                    <h2 class="subtitle"><a href="mailto:<?php echo $email ?>"><?php echo $email ?></a></h2>
                </div>
                <p>
                    <H2>No Telpone</H2>
                </p>
                <div class="columns has-text-centered">
                    <div class="column">
                        <ion-icon name="call-outline" size="large"></ion-icon>
                        <h2 class="subtitle"><a href="tel:+62(254)404070"><?php echo $telepon ?></a></h2>
                    </div>
                </div>
                <p>
                    <H2>Website</H2>
                </p>
                <div class="column">
                    <ion-icon name="google-outline" size="large"></ion-icon>
                    <h2 class="subtitle"><a href="<?php echo $web ?>">Indec.Diagnostic</a></h2>
        </td>
    </tr>
</body>

</html>