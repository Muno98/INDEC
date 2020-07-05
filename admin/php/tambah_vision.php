<form method="post">

    <label for="judul">Judul</label><br>
    <input type="text" name="judul"><br>
    <label for="isi">Isi</label><br>
    <textarea name="isi" cols="100" rows="10"></textarea><br>
    <button type="submit" name="simpan">ubah</button>
</form>

<?php if (isset($_POST['simpan'])) {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $simpan = mysqli_query($conn, "INSERT INTO tbl_vision VALUES ('', '$judul' ,'$isi')");
    if ($simpan) {
        echo  "<script>alert('data di simpan')</script>";
        echo  "<script>location='index.php?page=ourvision'</script>";
    }
} ?>