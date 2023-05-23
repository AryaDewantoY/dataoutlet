<div style="margin:10px; border:1px solid #C6CECB; padding:10px; background-color:#EDF0EF;">
<?php
	
		include "koneksi.php";
		
	include "data.php";
	echo"
	<fieldset>
	<legend>Cari</legend>
	<form action='' method='post'>
	<input type='input' name='cari3' value='$_POST[cari3]' placeholder='No.Digipos' />
	<input type='input' name='cari4' value='$_POST[cari4]' placeholder='No.rs' />
	<input type='input' name='cari' value='$_POST[cari]' placeholder='Nama Outlet' />
	<input type='input' name='cari2' value='$_POST[cari2]' placeholder='Kategori Outlet' />
	<input name='bcari' value='Cari' type='submit'/>
	</form>
	</fieldset>	";
	if(isset($_POST['bcari'])){
		$where="where nama_outlet like '%$_POST[cari]%' and kategori like '%$_POST[cari2]%' and no_digipos like '%$_POST[cari3]%' and no_rs like '%$_POST[cari4]%'";
	}else{
		$where="";
	}
	$batas =  30;
		$halaman = $_GET['halaman'];
		if(empty($halaman)){
			$posisi = 0;
			$halaman = 1;
		}else{
			$posisi = ($halaman - 1) * $batas;
		}
		$sql = mysql_query("select * from data_otlet $where ORDER BY idoutlet DESC limit $posisi, $batas");
		//echo "<a href='#'><button>Tambah Outlet</button></a><br>";
		echo "<br><table border = 1 width=90%>
			<tr>
		
			<th>Nomor Digipos
</th>
			<th>Nomor Rs
</th>
			<th>Cluster
</th>
			<th>Nama Outlet
</th>
			<th>Kategori Outlet
</th>
			<th>Aksi</th>
			</tr>";
		while($data = mysql_fetch_array($sql)){
			
			echo "<tr>
				
				
				<td>$data[no_digipos]</td>
				
				<td>$data[no_rs]</td>
				<td>$data[cluster]</td>
				<td>$data[nama_outlet]</td>
				<td>$data[kategori]</td>
				<td> <a href='hapus_data.php?idoutlet=$data[idoutlet]'><button>Hapus</button></a> </td>
				</tr>";
		}
		echo "</table>";
		
				echo "Halaman : ";
		
		$sqlhal = mysql_query("select * from data_otlet $where");
		$jmldata = mysql_num_rows($sqlhal);
		$jmlhal = ceil($jmldata/$batas);
		
		// Membuat First dan Previous
		if($halaman > 1){
			$previous = $halaman - 1;
			echo "<a href='$_SERVER[PHP_SELF]?halaman=1&pg=list_outlet'><button>&laquo; First</button></a>  
			     <a href='$_SERVER[PHP_SELF]?halaman=$previous&pg=list_outlet'><button>&lsaquo; Prev</button></a>";
		}else{
			echo "&laquo; First | &lsaquo; Prev | ";
		}
			
		//Menampilkan Angka Halaman
		/*for($i=1; $i<=$jmlhal;$i++){
			if($i != $halaman){
				echo " <a href='$_SERVER[PHP_SELF]?halaman=$i'>$i</a> | ";
			}else{
				echo " <b>$i</b> | ";
			}
		}*/
		$angka = ($halaman > 3 ? " ... " : " ");
		
		for($i=$halaman-2; $i<$halaman; $i++){
			if($i < 1)
				continue;
			$angka .= "<a href='$_SERVER[PHP_SELF]?halaman=$i&pg=list_outlet'><button>$i</button></a> ";
		}
		
		$angka .= " <b>$halaman</b> ";
		
		for($i = $halaman+1; $i<($halaman+3); $i++){
			if($i > $jmlhal)
				break;
			$angka .= "<a href='$_SERVER[PHP_SELF]?halaman=$i&pg=list_outlet'><button>$i</button></a> ";
		}
		
		$angka .= ($halaman+2 < $jmlhal ? " ... <a href='$_SERVER[PHP_SELF]?halaman=$jmlhal&pg=list_outlet'><button>$jmlhal</button></a> " : " ");
		
		echo "$angka";
		
		// Membuat Next dan Last
		if($halaman< $jmlhal){
			$next = $halaman + 1;
			echo "<a href='$_SERVER[PHP_SELF]?halaman=$next&pg=list_outlet'><button>Next &rsaquo;</button></a>  
			     <a href='$_SERVER[PHP_SELF]?halaman=$jmlhal&pg=list_outlet'><button>Last &raquo;</button></a>";
		}else{
			echo "Next &rsaquo; | Last &raquo; | ";
		}
		
		echo "<br>Total : $jmldata";
	
	
?></div>
