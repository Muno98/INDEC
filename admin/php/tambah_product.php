<form enctype="multipart/form-data" method="post">
    <label for="nama">Nama</label><br>
    <input type="text" name="nama"><br>
    <label for="detail">Detail</label><br>
    <textarea name="detail" cols="100" rows="10"></textarea><br>
    <label for="foto">Foto</label><br>
    <input type="file" name="foto"><br>
    <button type="submit" name="simpan">Simpan</button>
</form>

<?php if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $detail = $_POST['detail'];
    $foto = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasi, "gambar/$foto");
    $simpan =  mysqli_query($conn, "INSERT INTO tbl_product VALUES ('','$nama','$detail','$foto')");
    if ($simpan) {
        echo "<script>alert('data di simpan')</script>";
        echo "<script>location='index.php?page=products'</script>";
    }
} ?>