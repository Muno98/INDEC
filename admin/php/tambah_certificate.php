<form enctype="multipart/form-data" method="post">
    <label for="nama">Nama</label><br>
    <input type="text" name="nama"><br>
    <label for="info">Info</label><br>
    <input type="text" name="info"><br>
    <label for="foto">Certificate</label><br>
    <input type="file" name="foto"><br>
    <button type="submit" name="simpan">Simpan</button>
</form>

<?php if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $info = $_POST['info'];
    $foto = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasi, "gambar/$foto");
    $simpan =  mysqli_query($conn, "INSERT INTO tbl_certificate VALUES ('','$nama','$info','$foto')");
    if ($simpan) {
        echo "<script>alert('data di simpan')</script>";
        echo "<script>location='index.php?page=certification'</script>";
    }
} ?>