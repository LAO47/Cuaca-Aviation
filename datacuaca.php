<!DOCTYPE html>

<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM cuaca_aviation ORDER BY id DESC");
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
    <style>
        .navbar-brand {
            padding: 5px 0px 5px 15px;
        }
        .navbar-brand img {
            height: 100%;
            /* color: red; */
        }
    </style>
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
                <!-- <img src="logo_atass.png" height="6%" width="6%" > -->
                <a class="navbar-brand" href="datacuaca.php" ><img src="logo_atass.png"></a>
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
                    <h1 class="page-header">Data Cuaca Aviasi</h1>
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
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                <th> No </th>
                                <th> Bandara </th>
                                <th> Kode ICAO </th>
                                <th> Latitude </th>
                                <th> Longitude </th>
                                <th> Waktu </th>
                                <th> Cuaca </th>
                                <th> Suhu </th>
                                <th> Visibility </th>
                                <th> Kecepatan Angin </th>
                                <th> Arah Angin </th>
                                <th> Pilihan </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $x = 1;
                                    while($res = mysqli_fetch_array($result)) {         
                                        echo "<tr>";
                                        echo "<td>". $x . ". </td>";
                                        echo "<td>".$res['bandara']."</td>";
                                        echo "<td>".$res['kode_icao']."</td>";
                                        echo "<td>".$res['latitude']."</td>";
                                        echo "<td>".$res['longitude']."</td>";
                                        echo "<td>".$res['waktu']."</td>";
                                        echo "<td>".$res['cuaca']."</td>";
                                        echo "<td>".$res['suhu']."</td>";
                                        echo "<td>".$res['visibility']."</td>";
                                        echo "<td>".$res['kecepatan_angin']."</td>";
                                        echo "<td>".$res['arah_angin']."</td>";
                                        echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"hapus.php?id=$res[id]\" onClick=\"return confirm('Apakah kamu yakin data ini dihapus?')\">Hapus</a></td>";   
                                        echo "</tr>"; 
                                        $x++;  
                                    }
                                ?>
                                </tbody>
                            </table>
                            <button><a href="tambahin.php">Tambah Data</a></button>
                            
                         
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

    <footer>
          <p class="text-center">Copyright @ Andrian 2019 </p>
      </footer>


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
