<?php mysqli_query($conn, "DELETE FROM tbl_distributor WHERE id_distributor='$_GET[id]'");
echo "<script>alert('data di hapus')</script>";
echo "<script>location='index.php?page=distributor'</script>";
