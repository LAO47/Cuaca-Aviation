<!DOCTYPE html>
<?php
// include file koneksi database
include_once("config.php");
                    
if(isset($_POST['update']))
{   
    $id = mysqli_real_escape_string($mysqli, $_POST['id']);
    
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
            echo "<font color='red'>cuaca field is empty.</font><br/>";
        }
        if(empty($kecepatan_angin)) {
            echo "<font color='red'>cuaca field is empty.</font><br/>";
        }
        if(empty($arah_angin)) {
            echo "<font color='red'>cuaca field is empty.</font><br/>";
        }
    } 

    else {    
        //update/edit table database
        $result = mysqli_query($mysqli, "UPDATE cuaca_aviation SET bandara='$bandara', kode_icao='$kode_icao', latitude='$latitude', longitude='$longitude',waktu='$waktu',cuaca='$cuaca',suhu='$suhu',visibility='$visibility',kecepatan_angin='$kecepatan_angin', arah_angin='$arah_angin' WHERE id=$id");
        
        //redirect ke halaman awal
        header("Location: datacuaca.php");
    }
}
?>

<?php
// mendapatkan id dari URL
$id = $_GET['id'];

// menampilkan isi database berdasarkan id
$result = mysqli_query($mysqli, "SELECT * FROM cuaca_aviation WHERE id = $id");
while($res = mysqli_fetch_array($result))
{
    $bandara = $res['bandara'];
    $kode_icao = $res['kode_icao'];
    $latitude = $res['latitude'];
    $longitude = $res['longitude'];
    $waktu = $res['waktu'];
    $cuaca = $res['cuaca'];
    $suhu = $res['suhu'];
    $visibility = $res['visibility'];
    $kecepatan_angin = $res['kecepatan_angin'];
    $arah_angin = $res['arah_angin'];
    }
?>


<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TIVENTOT</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Website Tugas 2 Tiventot Raja Hamstermice</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-info-circle fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#"> <!-- ini lo isi aja link IG lo -->
                                <div>
                                    <i class="fa fa-instagram fa-fw"></i> Tiven Sandro Instagram
                                    
                                </div>
                            </a>
                        </li>

                      <!-- Ini kalo lo mau tambahin, copas ini aja, terus tinggal ganti icon atau tulisannya  
                          <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li> -->
                        
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="index.php"><i class="fa fa-power-off fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                    <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            <ul class="nav nav-second-level">
                                <li>
                                <a href="datacuaca.php"><i class="fa fa-table fa-fw"></i> Data Cuaca </a>
                                </li>
                                <li>
                                <a href="eksemel.php"><i class="fa fa-file-code-o fa-fw"></i> XML Database </a>
                                </li>
                                <li>
                                <a href="petacuaca.php"><i class="fa fa-plane fa-fw"></i> Peta Cuaca Penerbangan </a>
                                </li>
                            </ul>
                        </li>
                        
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Data</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Cuaca
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
        <form name="form1" method="post" action="edit.php">
         <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <tr> 
                <td>Bandara</td>
                <td><input type="text" name="bandara" value="<?php echo $bandara;?>"></td>
                </tr>
                <tr> 
                <td>Kode ICAO</td>
                <td><input type="text" name="kode_icao" value="<?php echo $kode_icao;?>"></td>
                </tr>
                <tr> 
                <td>Latitude</td>
                <td><input type="text" name="latitude" value="<?php echo $latitude;?>"></td>
                </tr>
                <tr> 
                <td>Longitude</td>
                <td><input type="text" name="longitude" value="<?php echo $longitude;?>"></td>
                </tr>
                <tr> 
                <td>Waktu</td>
                <td><input type="text" name="waktu" value="<?php echo $waktu;?>"></td>
                </tr>
                <tr> 
                <td>Cuaca</td>
                <td><input type="text" name="cuaca" value="<?php echo $cuaca;?>"></td>
                </tr>
                <tr>
                <td>Suhu</td>
                <td><input type="text" name="suhu" value="<?php echo $suhu;?>"></td>
                </tr>
                <tr>
                <td>Visibility</td>
                <td><input type="text" name="visibility" value="<?php echo $visibility;?>"></td>
                </tr>
                <tr>
                <td>Kecepatan Angin</td>
                <td><input type="text" name="kecepatan_angin" value="<?php echo $kecepatan_angin;?>"></td>
                </tr>
                <tr>
                <td>Arah Angin</td>
                <td><input type="text" name="arah_angin" value="<?php echo $arah_angin;?>"></td>
                </tr>
                <tr> 
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </form>
                            <button><a href="datacuaca.php">&larr; Kembali</a></button>
                            
                         
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>