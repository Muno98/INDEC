<?php
$no = 1;
$id = $_GET['id'];
$query = "select * from tbl_certificate where id_certificate='$id'";
$sql = mysqli_query($conn, $query);
while ($hasil = mysqli_fetch_array($sql)) { ?>
    <form enctype="multipart/form-data" method="post">
        <label for="nama">Nama</label><br>
        <input type="text" name="nama" value="<?php echo $hasil['nama'] ?>">
        <input type="hidden" name="id_certi" value="<?php echo $hasil['id_certificate'] ?>">
        <input type="hidden" name="foto_lama" value="<?php echo $hasil['foto'] ?>">
        <br>
        <label for="info">Info</label><br>
        <input type="text" name="info" value="<?php echo $hasil['info'] ?>"><br>
        <img src="gambar/<?php echo $hasil['foto'] ?>" width=" 100" height="100">
        <br>
        <label for="foto">Certificate</label><br>
        <input type="file" name="foto"><br>
        <button type="submit" name="simpan">Simpan</button>
    </form>
<?php } ?>

<?php if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $info = $_POST['info'];
    $foto = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    $id = $_POST['id_certi'];
    $foto_lama = $_POST['foto_lama'];
    if (!empty($foto)) {
        unlink("gambar/" . $foto_lama);
        move_uploaded_file($lokasi, "gambar/$foto");
        $simpan =  mysqli_query($conn, "UPDATE tbl_certificate SET nama='$nama', info='$info', foto='$foto' WHERE id_certificate='$id'");
        echo $foto;
    } else {
        $simpan =  mysqli_query($conn, "UPDATE tbl_certificate SET nama='$nama',info='$info' WHERE id_certificate='$id'");
    }
    if ($simpan) {
        echo "<script>alert('data di simpan')</script>";
        echo "<script>location='index.php?page=certification'</script>";
    }
} ?>