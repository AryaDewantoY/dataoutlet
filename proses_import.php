<?php
 //menggunakan class phpExcelReader
 include "excel_reader2.php";
 
//koneksi ke db mysql
 include_once("config/connect.php");
 
//membaca file excel yang diupload
 $data = new Spreadsheet_Excel_Reader($_FILES['userfile']['tmp_name']);
 //membaca jumlah baris dari data excel
 $baris = $data->rowcount($sheet_index=0);
 
//nilai awal counter jumlah data yang sukses dan yang gagal diimport
 $sukses = 0;
 $gagal = 0;
 
//import data excel dari baris kedua, karena baris pertama adalah nama kolom
 for ($i=2; $i<=$baris; $i++) {
 //membaca data nip (kolom ke-1)
 $nip = $data->val($i,1);
 //membaca data nama depan (kolom ke-2)
 $nama = $data->val($i,2);
 //membaca data nama belakang (kolom ke-3)
 $tanggal = $data->val($i,3);
 //membaca data  (kolom ke-4)
 $tempat = $data->val($i,4);
 //membaca data (kolom ke-5)
 $agama = $data->val($i,5);
 //membaca data (kolom ke-5)
 $notelp = $data->val($i,6);
 //membaca data (kolom ke-5)
 $alamat = $data->val($i,7);
 //membaca data (kolom ke-5)
 $status = $data->val($i,8);
 //membaca data (kolom ke-5)
 $jml1 = $data->val($i,9);
 //membaca data (kolom ke-5)
  $jml2 = $data->val($i,10);
 //membaca data (kolom ke-5)
  $jml3 = $data->val($i,11);
 //membaca data (kolom ke-5)
  $jml4 = $data->val($i,12);
 //membaca data (kolom ke-5)
  $jml5 = $data->val($i,13);
 //membaca data (kolom ke-5)
  $jml6 = $data->val($i,14);
 //membaca data (kolom ke-5)
 
 
 //membaca data (kolom ke-5)
 
 
//setelah data dibaca, sisipkan ke dalam tabel pegawai
 $query = "INSERT INTO data_otlet values ('','$nip','$nama','$tanggal','$tempat','$agama','$notelp','$alamat','$status','$jml1','$jml2','$jml3','$jml4','$jml5','$jml6','','','')";
 $hasil = mysql_query($query);
 
//menambah counter jika berhasil atau gagal
 if($hasil) $sukses++;
 else $gagal++;
 
}
 //tampilkan report hasil import
 echo "<h4> Proses Import Data Selesai</h4>";
 echo "<p>Jumlah data sukses diimport : ".$sukses."<br><br>";
 echo "Jumlah data gagal diimport : ".$gagal."<p>";

 
?>

<a href="./" class="btn btn-warning">Kembali</a>