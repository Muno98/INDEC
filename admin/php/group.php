<button type="submit"><a href="index.php?page=tambah_group">Tambah</a></button>
<?php
$no = 1;
$query = "select * from tbl_group";
$sql = mysqli_query($conn, $query);
while ($hasil = mysqli_fetch_array($sql)) { ?>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th width="50%">web</th>
                <th width="50%">email</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $hasil['web'] ?></td>
                <td><?php echo $hasil['email'] ?></td>
                <td><a href="index.php?page=ubah_group&id=<?php echo $hasil['id_group'] ?>">Ubah</a></td>
                <td><a href="index.php?page=hapus_group&id=<?php echo $hasil['id_group'] ?>">hapus</a></td>
            </tr>
        </tbody>
    </table>
<?php } ?>