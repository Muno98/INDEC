<?php
$no = 1;
$query = "select * from tbl_support";
$sql = mysqli_query($conn, $query);
while ($hasil = mysqli_fetch_array($sql)) { ?>
    <form method="post">
        <label for="alamat">Alamat</label><br>
        <textarea name="alamat" cols="100" rows="10"><?php echo $hasil['alamat'] ?></textarea><br>
        <label for="email">Email</label><br>
        <input type="text" name="email" value="<?php echo $hasil['email'] ?>"><br>
        <label for="telepon">Telepon</label><br>
        <input type="text" name="telepon" value="<?php echo $hasil['telepon'] ?>"><br>
        <label for="web">Web</label><br>
        <input type="text" name="web" value="<?php echo $hasil['web'] ?>"><br>
        <label for="maps">Maps</label><br>
        <input type="text" name="maps" value="<?php echo $hasil['maps'] ?>"><br>
        <label for="info">Info</label><br>
        <textarea name="info" cols="100" rows="10"><?php echo $hasil['info'] ?></textarea><br>
        <button type="submit" name="simpan">Simpan</button>
    </form>

<?php } ?>
<?php if (isset($_POST['simpan'])) {
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $web = $_POST['web'];
    $maps = $_POST['maps'];
    $info = $_POST['info'];

    $simpan = mysqli_query($conn, "UPDATE tbl_support SET alamat='$alamat', email='$email',telepon='$telepon',web='$web',maps='$maps',info='$info'");
    if ($simpan) {
        echo  "<script>alert('data di ubah')</script>";
        echo  "<script>location='index.php?page=support'</script>";
    }
} ?>