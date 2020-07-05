<button type="submit"><a href="index.php?page=tambah_vision">Tambah</a></button>
<?php
$no = 1;
$query = "select * from tbl_vision";
$sql = mysqli_query($conn, $query);
while ($hasil = mysqli_fetch_array($sql)) { ?>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th width="20%">Judul</th>
                <th>Isi</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $hasil['judul'] ?></td>
                <td><?php echo $hasil['isi'] ?></td>
                <td><a href="index.php?page=edit_vision&id=<?php echo $hasil['id_vision'] ?>">Ubah</a></td>
                <td><a href="index.php?page=hapus_vision&id=<?php echo $hasil['id_vision'] ?>">hapus</a></td>
            </tr>
        </tbody>
    </table>
<?php } ?>