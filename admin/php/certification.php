<button type="submit"><a href="index.php?page=tambah_certificate">Tambah</a></button>
<?php
$no = 1;
$query = "select * from tbl_certificate";
$sql = mysqli_query($conn, $query);
while ($hasil = mysqli_fetch_array($sql)) { ?>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th width="50%">Nama</th>
                <th width="50%">Info</th>
                <th>Thumbnail</th>
                <th colspan="2">aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $hasil['nama'] ?></td>
                <td><?php echo $hasil['info'] ?></td>
                <td><img src="gambar/<?php echo $hasil['foto'] ?>" width="100" height="100"></td>
                <td><a href="index.php?page=ubah_certificate&id=<?php echo $hasil['id_certificate'] ?>">Ubah</a></td>
                <td><a href="index.php?page=hapus_certificate&id=<?php echo $hasil['id_certificate'] ?>">hapus</a></td>
            </tr>
        </tbody>
    </table>
<?php } ?>