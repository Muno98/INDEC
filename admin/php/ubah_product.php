<?php
$no = 1;
$query = "select * from tbl_product where id_product='$_GET[id]'";
$sql = mysqli_query($conn, $query);
while ($hasil = mysqli_fetch_array($sql)) { ?>
    <form enctype="multipart/form-data" method="post">
        <label for="nama">Nama</label><br>
        <input type="text" name="nama" value="<?php echo $hasil['nama'] ?>">
        <input type="hidden" name="gambar_lama" value="<?php echo $hasil['foto'] ?>">
        <input type="hidden" name="id_prods" value="<?php echo $hasil['id_product'] ?>">
        <br>
        <label for="detail">Detail</label><br>
        <textarea name="detail" cols="100" rows="10"><?php echo $hasil['detail'] ?></textarea><br>
        <label for="foto">Foto</label><br>
        <input type="file" name="foto"><br>
        <button type="submit" name="simpan">Simpan</button>
    </form>
<?php } ?>

<?php if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $detail = $_POST['detail'];
    $foto = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    $id = $_POST['id_prods'];
    $foto_lama = $_POST['gambar_lama'];
    if (!empty($foto)) {
        unlink("gambar/" . $foto_lama);
        move_uploaded_file($lokasi, "gambar/$foto");
        $simpan =  mysqli_query($conn, "UPDATE tbl_product SET nama='$nama', detail='$detail', foto='$foto' WHERE id_product='$id'");
        echo $foto;
    } else {
        $simpan =  mysqli_query($conn, "UPDATE tbl_product SET nama='$nama',detail='$detail' WHERE id_product='$id'");
    }
    if ($simpan) {
        echo "<script>alert('data di simpan')</script>";
        echo "<script>location='index.php?page=products'</script>";
    }
}
?>