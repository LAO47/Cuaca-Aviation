<?php
// include file koneksi database
include_once("config.php");

// mendapatkan id dari baris yang akan dihapus
$id = $_GET['id'];

// hapus baris dari table database
$result = mysqli_query($mysqli, "DELETE FROM cuaca_aviation WHERE id=$id");

//redirect ke halaman awal
header("Location:datacuaca.php");
?>
