<?php
include"koneksi.php";
$sql_hapus = mysql_query("DELETE FROM data_otlet WHERE idoutlet='$_GET[idoutlet]'");
if($sql_hapus){
echo"<script>
alert('Data Sudah Dihapus');
window.location.href='index.php?pg=list_outlet';
</script>";
}
?>




