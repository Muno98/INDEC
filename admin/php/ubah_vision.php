<?php
$no = 1;
$query = "select * from tbl_vision WHERE id_vision='$_GET[id]'";
$sql = mysqli_query($conn, $query);
while ($hasil = mysqli_fetch_array($sql)) { ?>
    <form method="post">

        <label for="judul">Judul</label><br>
        <input type="text" name="judul" value="<?php echo $hasil['judul'] ?>">
        <input type="hidden" name="id" value="<?php echo $hasil['id_vision'] ?>">
        <br>
        <label for="isi">Isi</label><br>
        <textarea name="isi" cols="100" rows="10"><?php echo $hasil['isi'] ?></textarea><br>
        <button type="submit" name="update">ubah</button>
    </form>
<?php } ?>

<?php if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $simpan = mysqli_query($conn, "UPDATE tbl_vision SET judul='$judul' ,isi='$isi' WHERE id_vision='$id'");
    if ($simpan) {
        echo  "<script>alert('data di ubah')</script>";
        echo  "<script>location='index.php?page=ourvision'</script>";
    }
} ?>