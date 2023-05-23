<?php
session_start();
include 'koneksi.php';

$username=$_POST['username'];
$password=$_POST['password'];

$query=mysql_query("select * from admin where username='$username' and password='$password'");
$xxx=mysql_num_rows($query);
if ($xxx==TRUE) {
$data = mysql_fetch_array($query);
  $_SESSION['username']=$username;
  $_SESSION['password']=$password;
  $_SESSION['nama']=$data['namalengkap'];
  $_SESSION['id_user']=$data['idadmin'];
  echo "<script>
  location='index.php';</script>";
}
else{
  echo "<script> alert ('username atau password salah');
  location='login.php';</script>";
  # code...
}
?>