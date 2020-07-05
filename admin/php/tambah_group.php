<form enctype="multipart/form-data" method="post">
    <label for="isi">Isi</label><br>
    <input type="text" name="isi"><br>
    <label for="alamat">alamat</label><br>
    <textarea name="alamat" cols="100" rows="10"></textarea><br>
    <label for="email">email</label><br>
    <input type="text" name="email"><br>
    <label for="web">web</label><br>
    <input type="text" name="web"><br>
    <label for="logo">logo</label><br>
    <input type="file" name="logo"><br>
    <button type="submit" name="simpan">Simpan</button>
</form>

<?php if (isset($_POST['simpan'])) {
    $isi = $_POST['isi'];
    $alamat = $_POST['alamat'];
    $email = $_POST['isi'];
    $web = $_POST['web'];
    $logo = $_FILES['logo']['name'];
    $lokasi = $_FILES['logo']['tmp_name'];
    move_uploaded_file($lokasi, "gambar/" . $logo);
    $simpan = mysqli_query($conn, "INSERT INTO tbl_group VALUES('','$isi','$alamat','$email','$web','$logo')");
    if ($simpan) {
        echo "<script>alert('data di simpan')</script>";
        echo "<script>location='index.php?page=ourgroup'</script>";
    }
} ?>