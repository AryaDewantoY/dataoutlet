<?php
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
	</fieldset><br/>	";
	if(isset($_POST['bcari'])){
		$where="where nama_outlet like '%$_POST[cari]%' and kategori like '%$_POST[cari2]%' and no_digipos like '%$_POST[cari3]%' and no_rs like '%$_POST[cari4]%'";
	}else{
		$where="";
	}
$sqlproduk = mysql_query("SELECT * FROM data_otlet $where");
	while($rproduk = mysql_fetch_array($sqlproduk)){
	$x = substr($rproduk['nama_outlet'], 0, 9);
?>
<div class="prod_box">
        <div class="center_prod_box">
          <span class="tooltip" onmouseover="tooltip.pop(this, '<h1><u><?php echo"$rproduk[nama_outlet]"; ?></u></h1><br/><p><?php echo"$rproduk[deskripsi]"; ?></p>')">
          <div class="product_img"><a href="<?php echo"index.php?pg=3&idoutlet=$rproduk[idoutlet]"; ?>"><img src="images/simpati.png" alt="" border="1" width="160" height="120"/></a></div>
        </span></div>
  <div class="prod_details_tab">
       <div class="tengah"><b><?php echo"$x..."; ?></b></div><div class="kanan"><a href="<?php echo"index.php?pg=3&idoutlet=$rproduk[idoutlet]"; ?>" style="text-decoration:none;"><img src="images/view.gif" width="20" height="20" title="View"></a></div>
        </div>
      </div>
<?php
	}
?>