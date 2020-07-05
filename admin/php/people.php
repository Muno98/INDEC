<?php
$no = 1;
$query = "select * from tbl_about";
$sql = mysqli_query($conn, $query);
while ($hasil = mysqli_fetch_array($sql)) { ?>
    <form method="post" enctype="multipart/form-data">
        <img src="gambar/<?php echo $hasil['foto'] ?>"><br>
        <label for="judul">Foto</label><br>
        <input type="hidden" name="id_about" value="<?php echo $hasil['id_about'] ?>">
        <input type="hidden" name="gambar_lama" value="<?php echo $hasil['foto'] ?>">
        <input type="file" name="foto"><br>
        <label for="isi">Isi</label><br>
        <textarea name="isi" cols="100" rows="10"><?php echo $hasil['isi'] ?></textarea><br>
        <button type="submit" name="update">ubah</button>
    </form>
<?php } ?>

<?php if (isset($_POST['update'])) {
    $id = $_POST['id_about'];
    $foto = $_FILES['foto']['name'];
    $tempat = $_FILES['foto']['tmp_name'];
    $gambarlama = $_POST['gambar_lama'];
    move_uploaded_file($tempat, "gambar/$foto");
    $isi = $_POST['isi'];
    if (!empty($foto)) {
        unlink("gambar/" . $gambarlama);
        $simpan = mysqli_query($conn, "UPDATE tbl_about SET isi='$isi', foto='$foto' WHERE id_about='$id'");
    } else {
        $simpan = mysqli_query($conn, "UPDATE tbl_about SET isi='$isi' WHERE id_about='$id'");
    }
    if ($simpan) {
        echo  "<script>alert('data di ubah')</script>";
        echo  "<script>location='index.php?page=ourpeople'</script>";
    }
} ?>