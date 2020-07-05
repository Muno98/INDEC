<?php
$data = mysqli_query($conn, "SELECT * FROM tbl_certificate WHERE id_certificate='$_GET[id]'");
$gambar = mysqli_fetch_assoc($data);
$hpsgambar = $gambar['foto'];
unlink("gambar/" . $hpsgambar);
$hapus = mysqli_query($conn, "DELETE FROM tbl_certificate WHERE id_certificate='$_GET[id]'");
if ($hapus) {

    echo "<script>alert('data di hapus')</script>";
    echo "<script>location='index.php?page=ourgroup'</script>";
}
