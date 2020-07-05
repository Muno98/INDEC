<?php
$no = 1;
$query = "select * from tbl_distributor where id_distributor='$_GET[id]'";
$sql = mysqli_query($conn, $query);
while ($hasil = mysqli_fetch_array($sql)) { ?>
    <form method="post">
        <label for="negara">Negara</label><br>
        <input type="text" name="negara" value="<?php echo $hasil['negara'] ?>">
        <input type="hidden" name="id_disrti" value="<?php echo $hasil['id_distributor'] ?>">
        <br>
        <label for="nama">Nama</label><br>
        <input type="text" name="nama" value="<?php echo $hasil['nama'] ?>"><br>
        <label for="detail">Detail</label><br>
        <textarea name="detail" cols="100" rows="10"><?php echo $hasil['detail'] ?></textarea><br>
        <button type="submit" name="simpan">Simpan</button>
    </form>
<?php } ?>
<?php if (isset($_POST['simpan'])) {
    $negara = $_POST['negara'];
    $nama = $_POST['nama'];
    $detail = $_POST['detail'];

    $simpan = mysqli_query($conn, "UPDATE  tbl_distributor SET negara='$negara',nama='$nama',detail='$detail' WHERE id_distributor='$_POST[id_disrti]'");
    if ($simpan) {
        echo "<script>alert('data di update')</script>";
        echo "<script>location='index.php?page=distributor'</script>";
    }
} ?>