<?php
$no = 1;
$id = $_GET['id'];
$query = "select * from tbl_group where id_group='$id'";
$sql = mysqli_query($conn, $query);
while ($hasil = mysqli_fetch_array($sql)) { ?>
    <form enctype="multipart/form-data" method="post">
        <label for="isi">Isi</label><br>
        <textarea name="isi" cols="100" rows="10"><?php echo $hasil['isi'] ?></textarea>><br>
        <input type="hidden" name="id_group" value="<?php echo $hasil['id_group'] ?>">
        <input type="hidden" name="gambar_lama" value="<?php echo $hasil['logo'] ?>">
        <label for="alamat">alamat</label><br>
        <textarea name="alamat" cols="100" rows="10"><?php echo $hasil['alamat'] ?></textarea><br>
        <label for="email">email</label><br>
        <input type="text" name="email" value="<?php echo $hasil['email'] ?>"><br>
        <label for="web">web</label><br>
        <input type="text" name="web" value="<?php echo $hasil['web'] ?>"><br>
        <label for="logo">logo</label><br>
        <img src="gambar/<?php echo $hasil['logo'] ?>" height="100" width="100"><br>
        <input type="file" name="logo"><br>
        <button type="submit" name="simpan">Simpan</button>
    </form>
<?php } ?>
<?php if (isset($_POST['simpan'])) {
    $id = $_POST['id_group'];
    $gambarlama = $_POST['gambar_lama'];
    $isi = $_POST['isi'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $web = $_POST['web'];
    $logo = $_FILES['logo']['name'];
    $lokasi = $_FILES['logo']['tmp_name'];
    if (!empty($logo)) {
        unlink("gambar/" . $gambarlama);
        move_uploaded_file($lokasi, "gambar/" . $logo);
        $simpan = mysqli_query($conn, "UPDATE tbl_group set isi='$isi',alamat='$alamat',email='$email',web='$web',logo='$logo' WHERE id_group='$id'");
    } else {
        $simpan = mysqli_query($conn, "UPDATE tbl_group set isi='$isi',alamat='$alamat',email='$email',web='$web' WHERE id_group='$id'");
    }
    if ($simpan) {
        echo "<script>alert('data di simpan')</script>";
        echo "<script>location='index.php?page=ourgroup'</script>";
    }
} ?>