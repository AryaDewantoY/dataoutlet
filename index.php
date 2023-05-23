<?php
session_start();
error_reporting(0);
include "koneksi.php";

if (empty($_SESSION['username']) AND empty($_SESSION['password'])) {
	echo "<script>window.location=('login.php')</script>";
}else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link href="themes/1/tooltip.css" rel="stylesheet" type="text/css" />
    <script src="themes/1/tooltip.js" type="text/javascript"></script>
    
<link  href="images/logo.png" rel="shortcut icon" type="image/jpg" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data Outlet</title>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<script src="SpryAssets/SpryAccordion.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
<link rel="stylesheet" href="js/style.css" type="text/css" media="all" />
<link href="SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>
<script src="js/jquery.tools.min.js" type="text/javascript"></script>
<script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>
<script src="js/jquery-func.js" type="text/javascript"></script>
</head>

<body onload="MM_preloadImages('images/logo.png')" tracingsrc="images/logo.jpg" tracingopacity="30">
<div id="header">
  <div id="batasheader">
    <div id="bataskiri"><a href="index.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','logo.png',1)"><img  src="images/logo.png" alt="Home" width="164" height="50" id="Image2"/></a></div>
    <div id="batastengah">
    <?php
    if(!empty($_SESSION['user1'])){
		?>
        <p style="color:#FFF"><b>Selamat Datang <br/><font size="+1"><?php echo $_SESSION[user1]; ?></font></b></p>
        <?php
		}
	?>
   	  <ul id="MenuBar1" class="MenuBarHorizontal2">
   	    <li>
   	     <span class="muncul"><form></form></span>
        </li>
   	  </ul>
    </div>
<div id="bataskanan">
  <div id="menu">
      <ul id="MenuBar1" class="MenuBarHorizontal">
        <?php include"menu.php"; ?>
      </ul>
    </div>
  </div>
    
  </div>	
</div>

        <div id="content">
      <div id="slider" class="box">
        <div id="slider-holder">
          <ul>
		   <li><a href="#"><img src="images/shop.jpg" alt="" width="1030" height="252"/></a></li>
            <li><a href="#"><img src="images/a.jpg" alt="" width="1030" height="252"/></a></li>
            
           
           
          </ul>
        </div>
        <div id="slider-nav"> <a href="#" class="active">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> </div>
      </div>
    </div>
<div id="body">
  <div id="konten">
	<div id="konten-kanan">
    
    <p>
    <div id="pg">
	<?php
    	if(empty($_GET['pg'])){
		
			include"produk-kat.php";
			}else{
		//----------------------
				if($_GET['pg']=='1'){
					include"data.php";
					}
				else if($_GET['pg']=='2'){
					include"proses_import.php";
					}
					else if($_GET['pg']=='3'){
					include"outletdetail.php";
					}
				else if($_GET['pg']=='list_outlet'){
					include"listoutlet.php";
					}
					
				
				
		//----------------------
				
					else{
						echo"tidak ada";
						}
				}
	?>
    </div>
    </p>
    </div>
   
    <div id="konten-kiri" style="margin-top:10px;">
    <div id="Accordion1" class="Accordion" tabindex="0">
      <div class="AccordionPanel">
       
        <div class="AccordionPanelContent">
          
		    <img src="images/1.jpg" alt="" width="225" height="400"/><br><br>
			
        </div>
      </div>
     
    </div>

    </div>
  </div>
    
	
	
	<div id="bebas">
	<?php 
	if(empty($_GET['pg'])){
	echo"&nbsp;";
	}else{
		echo"<p align='center'>
<font size='+1'> <br/>
</font>
</p>
";}
	?>    
	</div>
    <div>&nbsp;</div>
</div>
<div>&nbsp;</div>
</div>
<div id="footer" style="color:#FFFFF;"><b><a href="admin" style="text-decoration:none;"> Copyright &copy; - 2018</a></b></marquee></div>

<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var TabbedPanels2 = new Spry.Widget.TabbedPanels("TabbedPanels2");
var TabbedPanels3 = new Spry.Widget.TabbedPanels("TabbedPanels3");
var TabbedPanels4 = new Spry.Widget.TabbedPanels("TabbedPanels4");
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
var TabbedPanels5 = new Spry.Widget.TabbedPanels("TabbedPanels5");
</script>
</body>
</html>
<?php } ?>