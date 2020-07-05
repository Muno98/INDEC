<button type="submit"><a href="index.php?page=tambah_product">Tambah</a></button>
<?php
$no = 1;
$query = "select * from tbl_product";
$sql = mysqli_query($conn, $query);
while ($hasil = mysqli_fetch_array($sql)) { ?>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th width="30%">Nama</th>
                <th width="40%">Detail</th>
                <th width="30%">Foto</th>
                <th colspan="2">aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $hasil['nama'] ?></td>
                <td><?php echo $hasil['detail'] ?></td>
                <td><img src="gambar/<?php echo $hasil['foto'] ?>" height="100" width="100"></td>
                <td><a href="index.php?page=ubah_product&id=<?php echo $hasil['id_product'] ?>">Ubah</a></td>
                <td><a href="index.php?page=hapus_product&id=<?php echo $hasil['id_product'] ?>" onclick="return confirm('hapus ?')">hapus</a></td>
            </tr>
        </tbody>
    </table>
<?php } ?>