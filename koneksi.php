<?php 
date_default_timezone_set('Asia/Jakarta');
  $host ="localhost"; //host server
  $user ="root"; //user login phpMyAdmin
  $pass =""; //pass login phpMyAdmin
  $db ="kasir"; //nama database
  $koneksi = mysqli_connect($host, $user, $pass, $db) or die ("Koneksi gagal");
?>