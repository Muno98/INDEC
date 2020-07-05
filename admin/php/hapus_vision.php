<?php mysqli_query($conn, "DELETE FROM tbl_vision WHERE id_vision='$_GET[id]'");
echo "<script>alert('data di hapus')</script>";
echo "<script>location='index.php?page=ourvision'</script>";
