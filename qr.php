<?php
include"fungsi/phpqrcode-master/qrlib.php";
	
QRcode::png("dumet-school","image.png","L",4,4);
echo"<table><tr><td><img src='image.png'></td></tr></table>";
?>