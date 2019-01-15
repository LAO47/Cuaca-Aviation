<html>
<head>
    <title>Tambah Data</title>
</head>

<body>
<?php
// include file koneksi database
include_once("config.php");


if(isset($_POST['submit'])) {    
   $bandara = mysqli_real_escape_string($mysqli, $_POST['bandara']);
    $kode_icao = mysqli_real_escape_string($mysqli, $_POST['kode_icao']);
    $latitude = mysqli_real_escape_string($mysqli, $_POST['latitude']);
    $longitude = mysqli_real_escape_string($mysqli, $_POST['longitude']);
    $waktu = mysqli_real_escape_string($mysqli, $_POST['waktu']);
    $cuaca = mysqli_real_escape_string($mysqli, $_POST['cuaca']); 
    $suhu = mysqli_real_escape_string($mysqli, $_POST['suhu']); 
    $visibility = mysqli_real_escape_string($mysqli, $_POST['visibility']); 
     $kecepatan_angin = mysqli_real_escape_string($mysqli, $_POST['kecepatan_angin']); 
 $arah_angin = mysqli_real_escape_string($mysqli, $_POST['arah_angin']); 
    
        
    // cek jika field kosong
    if(empty($bandara) || empty($kode_icao) || empty($latitude) || empty($longitude) || empty($waktu) || empty($cuaca) || empty($suhu) || empty($visibility) || empty($kecepatan_angin)|| empty($arah_angin))  {
                
       if(empty($bandara)) {
            echo "<font color='red'>Bandara field is empty.</font><br/>";
        }
        
        if(empty($kode_icao)) {
            echo "<font color='red'>Kode ICAO field is empty.</font><br/>";
        }
        
        if(empty($latitude)) {
            echo "<font color='red'>Latitude field is empty.</font><br/>";
        }
        if(empty($longitude)) {
            echo "<font color='red'>Longitude field is empty.</font><br/>";
        }

        if(empty($waktu)) {
            echo "<font color='red'>Waktu field is empty.</font><br/>";
        }

        if(empty($cuaca)) {
            echo "<font color='red'>cuaca field is empty.</font><br/>";
        }
        if(empty($visibility)) {
            echo "<font color='red'>Visibility field is empty.</font><br/>";
        }
        if(empty($kecepatan_angin)) {
            echo "<font color='red'>Kecepatan Angin field is empty.</font><br/>";
        }
        if(empty($arah_angin)) {
            echo "<font color='red'>Arah Angin field is empty.</font><br/>";
        }

        // kembali ke page sebelumnya
        echo "<br/><a href='javascript:self.history.back();'>&larr; Kembali</a>";
    } 
    else {    
        // jika field tidak kosong maka insert database   
        $result = mysqli_query($mysqli, "INSERT INTO cuaca_aviation(bandara,kode_icao,latitude,longitude,waktu,cuaca,suhu,visibility,kecepatan_angin,arah_angin) VALUES('$bandara','$kode_icao','$latitude','$longitude','$waktu','$cuaca','$suhu','$visibility','$kecepatan_angin','$arah_angin')");
        
        // tampilan sukses
        echo "<h1>Data berhasil ditambah!</h1>";
        echo "<button><a href='datacuaca.php'>Lihat hasil</a></button>";
    }
} 
?>
</body>
</html>