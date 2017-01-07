<?php
$host='localhost';
$user='root';
$pass=''; //---- Password root ----
$db='kapal'; // ------ Nama database --
$ok=mysqli_connect($host,$user,$pass) or die ('gagal konek'.mysqli_error());
mysqli_select_db($db,$ok);
?>