<button type="submit"><a href="index.php?page=tambah_distributor">Tambah</a></button>
<?php
$no = 1;
$query = "select * from tbl_distributor";
$sql = mysqli_query($conn, $query);
while ($hasil = mysqli_fetch_array($sql)) { ?>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th width="30%">Negara</th>
                <th width="30%">Nama</th>
                <th width="40%">Alamat</th>
                <th colspan="2">aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $hasil['negara'] ?></td>
                <td><?php echo $hasil['nama'] ?></td>
                <td><?php echo $hasil['detail'] ?></td>
                <td><a href="index.php?page=ubah_distributor&id=<?php echo $hasil['id_distributor'] ?>">Ubah</a></td>
                <td><a href="index.php?page=hapus_distributor&id=<?php echo $hasil['id_distributor'] ?>" onclick="return confirm('hapus ?')">hapus</a></td>
            </tr>
        </tbody>
    </table>
<?php } ?>