<div style="margin:10px; border:1px solid #C6CECB; padding:10px; background-color:#EDF0EF;">
<?php
	include "koneksi.php";
	$sql = mysql_query("select * from data_otlet where idoutlet='$_GET[idoutlet]'");
	
	//--------------------------------------------
	
	//---------------------------------------------

	include"fungsi/phpqrcode-master/qrlib.php";
	
	echo "<table width='100%' border='0' >";
	$rpro = mysql_fetch_array($sql);
	?>
	
	<tr><td rowspan="40" width="200" valign="top" style="padding-right:5px;">
	<img border="1" src="images/simpati.png" width="200">
	<br/>
	<br/>
	<center>
	<?php 
	//echo bar128(stripslashes("$rpro[no_digipos]")); 
	QRcode::png("$rpro[no_digipos]","fungsi/image_$rpro[no_digipos].png","L",4,4);
	echo"<img src='fungsi/image_$rpro[no_digipos].png'>";
	?>
	</center>
	<br/>
	<style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
	<div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: <?php echo $rpro['lat']; ?>, lng: <?php echo $rpro['long']; ?>};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key= AIzaSyCSLPq4MMfgowXnR5lATFlVEfeOtbVNIlY&callback=initMap">
    </script>

	</td>
		      <td><b>Nomor Digipos</b></td><td>: <?php echo"$rpro[no_digipos]"; ?></td> </tr>
		      <td><b>Nomor Rs</b></td><td>: <?php echo"$rpro[no_rs]"; ?></td> </tr>
		      <td><b>Cluster</b></td><td>: <?php echo"$rpro[cluster]"; ?></td> </tr>
		      <td> <b>Nama SF</b></td><td>: <?php echo"$rpro[nama]"; ?></td> </tr>
		      <td> <b>DigiPOS</b></td><td>: <?php echo"$rpro[digipos]"; ?></td> </tr>
		      <td><b>Exclusive</b></td><td>: <?php echo"$rpro[exclusive]"; ?></td> </tr>
			  <td><b>Nama Outlet</b></td><td>: <?php echo"$rpro[nama_outlet]"; ?> </td> </tr>
			   <td><b>Kategori Outlet</b></td><td>: <?php echo"$rpro[kategori]"; ?> </td> </tr>
			    <td><b>Jenis Lokasi Outlet</b></td><td>: <?php echo"$rpro[jenis_lokasi]"; ?> </td> </tr>
				 <td><b>Alamat Outlet</b></td><td>: <?php echo"$rpro[alamat]"; ?> </td> </tr>
				  <td><b>Kelurahan</b></td><td>: <?php echo"$rpro[kelurahan]"; ?> </td> </tr>
				   <td><b>Kecamatan</b></td><td>: <?php echo"$rpro[kecamatan]"; ?> </td> </tr>
				    <td><b>Kabupaten</b></td><td>: <?php echo"$rpro[kabupaten]"; ?> </td> </tr>
					 <td><b>Provinsi</b></td><td>: <?php echo"$rpro[provinsi]"; ?> </td> </tr>
				  <td><b>Cluster</b></td><td>: <?php echo"$rpro[cluster2]"; ?> </td> </tr>
				   <td><b>Long</b></td><td>: <?php echo"$rpro[long]"; ?> </td> </tr>
				    <td><b>Lat</b></td><td>: <?php echo"$rpro[lat]"; ?> </td> </tr>
					 <td><b>Nama Pemilik</b></td><td>: <?php echo"$rpro[nama_pemilik]"; ?> </td> </tr>
					  <td><b>Jenis Kelamin</b></td><td>: <?php echo"$rpro[jk]"; ?> </td> </tr>
					   <td><b>Pekerjaan Pemilik</b></td><td>: <?php echo"$rpro[pekerjaan]"; ?> </td> </tr>
					    <td><b>No. Hp Pemilik 1</b></td><td>: <?php echo"$rpro[nohp1]"; ?> </td> </tr>
						 <td><b>No. Hp Pemilik 2</b></td><td>: <?php echo"$rpro[nohp2]"; ?> </td> </tr>
						  <td><b>Email Pemilik
</b></td><td>: <?php echo"$rpro[email]"; ?> </td> </tr>
						   <td><b>Nama Frontliner
</b></td><td>: <?php echo"$rpro[nama_f]"; ?> </td> </tr>
						    <td><b>Jenis Kelamin
</b></td><td>: <?php echo"$rpro[jk_f]"; ?> </td> </tr>
							 <td><b>No. Hp Frontliner
</b></td><td>: <?php echo"$rpro[nohp_f]"; ?> </td> </tr>
							  <td><b>Tempat Lahir
</b></td><td>: <?php echo"$rpro[tmp]"; ?> </td> </tr>
							   <td><b>Tanggal Lahir
</b></td><td>: <?php echo"$rpro[tgl]"; ?> </td> </tr>
							    <td><b>Agama
</b></td><td>: <?php echo"$rpro[agama]"; ?> </td> </tr>
								 <td><b>Suku
</b></td><td>: <?php echo"$rpro[suku]"; ?> </td> </tr>
			  
			  </table>
              </div>
             