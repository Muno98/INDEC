<form method="post">
    <label for="negara">Negara</label><br>
    <input type="text" name="negara"><br>
    <label for="nama">Nama</label><br>
    <input type="text" name="nama"><br>
    <label for="detail">Detail</label><br>
    <textarea name="detail" cols="100" rows="10"></textarea><br>
    <button type="submit" name="simpan">Simpan</button>
</form>
<?php if (isset($_POST['simpan'])) {
    $negara = $_POST['negara'];
    $nama = $_POST['nama'];
    $detail = $_POST['detail'];

    $simpan = mysqli_query($conn, "INSERT INTO tbl_distributor VALUES ('','$negara','$nama','$detail')");
    if ($simpan) {
        echo "<script>alert('data di simpan')</script>";
        echo "<script>location='index.php?page=distributor'</script>";
    }
} ?>