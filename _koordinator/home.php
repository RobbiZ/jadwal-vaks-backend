<?php
session_start();
$username = $_SESSION['username'];
$uid      = $_SESSION['uid'];
$role     = $_SESSION['role'];

// cek apakah user sudah login
if($_SESSION['login'] == false){
    header('Location: ./index.php');
}
?>

<html style="zoom: 0.9;">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Sistem Penjadwalan Vaksinasi</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="../css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="../js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <link href="../css/plugins/dataTables/datatables.min.css" rel="stylesheet">

    <link href="../css/plugins/touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet">

    <link href="../css/plugins/datapicker/datepicker3.css" rel="stylesheet">

</head>

<body>
<div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> 
                        <span>
                            <img alt="image" class="img-circle" src="../img/user1.png" />
                        </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold"><?php echo substr($username, 0, 30);?></strong>
                            </span>
                            <span class="text-muted text-xs block">Koordinator</span>
                        </span>
                        </a>
                    </div>
                    <div class="logo-element">MAB</div>
                </li>
                <li id="overview">
                    <a href="home.php?hal=overview"><i class="fa fa-database"></i> <span class="nav-label">Overview</span></a>
                </li>
                <li id="vaksinasi-data">
                    <a href="home.php?hal=vaksinasi-data"><i class="fa fa-eyedropper"></i> <span class="nav-label">Jadwal Vaksinasi</span></a>
                </li>
                <li id="realisasi-data">
                    <a href="home.php?hal=realisasi-data"><i class="fa fa-check"></i> <span class="nav-label">Realisasi Vaksinasi</span></a>
                </li>
                <li id="plasma-data">
                    <a href="home.php?hal=plasma-data"><i class="fa fa-cogs"></i> <span class="nav-label">Data Plasma</span></a>
                </li>
                <li>
                    <a href="../logout.php" onclick="return confirm('Apakah Anda Mau Keluar?')"><i class="fa fa-sign-out" ></i> <span class="nav-label">Logout</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg dashbard-1" style="padding: 0">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-minimalize minimalize-styl-2 btn btn-default " href="#"><i class="fa fa-bars"></i> </a>    
            </div>
        </nav>
        </div>

        <div class="wrapper wrapper-content" style="padding-top: 0">
            <?php
                error_reporting(0);
                $halaman = $_GET['hal'];
                switch ($halaman) {
                    case ''                     : include 'overview.php'; break;
                    case 'overview'             : include 'overview.php'; break;
                    case 'plasma-data'          : include 'plasma-data.php'; break;
                    case 'plasma-tambah'        : include 'plasma-tambah.php'; break;
                    case 'plasma-simpan'        : include 'plasma-simpan.php'; break;
                    case 'plasma-edit'          : include 'plasma-edit.php'; break;
                    case 'plasma-hapus'         : include 'plasma-hapus.php'; break;
                    case 'vaksinasi-data'       : include 'vaksinasi-data.php'; break;
                    case 'vaksinasi-tambah'     : include 'vaksinasi-tambah.php'; break;
                    case 'vaksinasi-simpan'     : include 'vaksinasi-simpan.php'; break;
                    case 'vaksinasi-edit'       : include 'vaksinasi-edit.php'; break;
                    case 'vaksinasi-hapus'      : include 'vaksinasi-hapus.php'; break;
                    case 'realisasi-data'       : include 'realisasi-data.php'; break;
                    case 'realisasi-edit'       : include 'realisasi-edit.php'; break;
                    case 'realisasi-simpan'     : include 'realisasi-simpan.php'; break;
                }
            ?>
        </div>

        <div class="footer">
            <div class="pull-right">&nbsp;&nbsp;R.Z&nbsp;~&nbsp;STMIK AKAKOM <strong>&copy;</strong> 2018</div>
        </div>
    </div>

</div>

<!-- Mainly scripts -->
<script src="../js/jquery-2.1.1.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="../js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Flot -->
<script src="../js/plugins/flot/jquery.flot.js"></script>
<script src="../js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="../js/plugins/flot/jquery.flot.spline.js"></script>
<script src="../js/plugins/flot/jquery.flot.resize.js"></script>
<script src="../js/plugins/flot/jquery.flot.pie.js"></script>

<!-- Peity -->
<script src="../js/plugins/peity/jquery.peity.min.js"></script>
<script src="../js/demo/peity-demo.js"></script>

<!-- Custom and plugin javascript -->
<script src="../js/inspinia.js"></script>
<script src="../js/plugins/pace/pace.min.js"></script>

<!-- jQuery UI -->
<script src="../js/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- GITTER -->
<script src="../js/plugins/gritter/jquery.gritter.min.js"></script>

<!-- Sparkline -->
<script src="../js/plugins/sparkline/jquery.sparkline.min.js"></script>

<!-- Sparkline demo data  -->
<script src="../js/demo/sparkline-demo.js"></script>

<!-- ChartJS-->
<script src="../js/plugins/chartJs/Chart.min.js"></script>

<!-- Toastr -->
<script src="../js/plugins/toastr/toastr.min.js"></script>

<script src="../js/plugins/dataTables/datatables.min.js"></script>

<script src="../js/plugins/datapicker/bootstrap-datepicker.js"></script>

<script src="../js/plugins/touchspin/jquery.bootstrap-touchspin.min.js"></script>

<script type="text/javascript">
    $('.input-group.date').datepicker({
        todayBtn: "linked",
        keyboardNavigation: false,
        forceParse: false,
        calendarWeeks: true,
        autoclose: true, format:"yyyy-mm-dd"
    });
</script>

<script>
    $(document).ready(function(){
        $('.dataTables-examples').DataTable({
            dom: '<"html5buttons"B>lTfgitp',
            order: [],
            buttons: [
                {extend: 'copy'},
                {extend: 'csv'},
                {extend: 'excel', title: 'ExampleFile'},
                {extend: 'print',
                    customize: function (win){
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');
                        $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
                    }
                }
            ]
        });

        $(".touchspin3").TouchSpin({
            verticalbuttons: true,
            buttondown_class: 'btn btn-white',
            min: 1,
            max: 1000000,
            buttonup_class: 'btn btn-white'
        });
    });
</script>

</body>

</html>