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

    <!-- Ini library leaflet.js -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>

     <!-- ini script js dari leaflet.js nya -->
    <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js" integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg==" crossorigin=""></script>

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

    <style type="text/css">
    #mapid { width: 1098px;
             height: 566px; }

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
                <!-- <img src="logoBMKG.png" height="3%" width="3%" vspace="5"> -->
                <a class="navbar-brand" href="datacuaca.php"><img src="logo_atass.png"></a>
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

        <!-- Page Content -->
        <div id="page-wrapper" style = "padding-left: 0px">
            <div class="container-fluid">
                <div class="row">
                <!--    <div class="col-lg-12">
                        <h1 class="page-header">  </h1>
                    </div> -->
                    <div id="mapid"></div>
                    <script type="text/javascript">
                        var map = L.map('mapid').setView([-2.548926, 118.0148634], 5.3);
                        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
                            attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
                            maxZoom: 18,
                            id: 'mapbox.streets',
                            accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
                        }).addTo(map);

                <?php $result = mysqli_query($mysqli, "SELECT * FROM cuaca_aviation"); ?>
                <?php while ($res = mysqli_fetch_array($result)) { ?>
                <?php echo "var marker = L.marker([".  $res['latitude'] . ", ".  $res['longitude'] . " ]).addTo(map).bindPopup('Bandara: ".  $res['bandara'] . " <br> Waktu: ". $res['waktu']." <br> Cuaca: ". $res['cuaca']."  <br> Suhu: ". $res['suhu']." <br> Visibilty: ". $res['visibility']." <br> Kecepatan Angin: ". $res['kecepatan_angin']."  <br> Arah Angin: ". $res['arah_angin']." ');" ?>
                <?php } ?>
                     
                        //var point = [-6.97871, 	110.379];
                        //var marker = L.marker(point).addTo(map);
                        //marker.bindPopup('Ini informasinya').openPopup();
                        
                    	//var geojsonLayer = new L.GeoJSON.AJAX("geojson.json");       
                        //geojsonLayer.addTo(map); 
                    </script>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
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
