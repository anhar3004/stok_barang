<?php
session_start();

    if(!isset($_SESSION["status_admin"])){
        echo "
        <script>
        alert('Anda Harus Login Terlebih Dahulu');
        window.location = '../login.php'
        </script>
        ";
        exit;
    }
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Dashboard Admin</title>

    <!-- Favicons -->
    <link href="../Template/img/favicon.png" rel="icon">
    <link href="../Template/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="../Template/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="../Template/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../Template/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="../Template/lib/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="../Template/lib/bootstrap-fileupload/bootstrap-fileupload.css" />
    <link rel="stylesheet" type="text/css" href="../Template/lib/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="../Template/lib/bootstrap-daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" type="text/css" href="../Template/lib/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="../Template/lib/bootstrap-datetimepicker/datertimepicker.css" />


    <!-- Custom styles for this template -->
    <link href="../Template/css/style.css" rel="stylesheet">
    <link href="../Template/css/style-responsive.css" rel="stylesheet">
    <script src="../Template/lib/chart-master/Chart.js"></script>

    <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
    <section id="container">
        <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
        <!--header start-->
        <header class="header black-bg">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>DASH<span>BOARD</span></b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->

                <!--  notification end -->
            </div>
            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="../logout.php">Logout</a></li>
                </ul>
            </div>
        </header>
        <!--header end-->
        <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->

                <ul class="sidebar-menu" id="nav-accordion">
                    <p class="centered"><a href="profile.html"><img src="./Admin/picture/<?php echo $_SESSION['picture']?>"
                                class="img-circle" width="80px"></a></p>
                    <h5 class="centered"><?php echo $_SESSION['nama_admin']?></h5>
                    <li class="sub-menu ">
                        <a class="menu1 " href="index.php">
                            <i class="fa fa-dashboard"></i>
                            Beranda
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a class="menu1" href="javascript:;">
                            <i class="fa fa-desktop"></i>
                            Data Master
                        </a>
                        <ul class="sub">
                            <li><a href="?hal=dataKategori"><i class="fa fa-tags"></i>Data Kategori</a></li>
                            <li><a href="?hal=dataBarang"><i class="fa fa-bars"></i>Data Barang</a></li>
                            <li><a href="?hal=dataAdmin"><i class="fa fa-user"></i>Data Admin</a></li>
                            <li><a href="?hal=dataDepartement"><i class="fa fa-building"></i>Data Departement</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a class="menu1 " href="">
                            <i class="fa fa-cogs"></i>
                            <span>Transaksi</span>
                        </a>
                        <ul class="sub">
                            <li><a href="?hal=dataPenerimaan"><i class="fa fa-backward"></i>Penerimaaan Barang</a></li>
                            <li><a href="?hal=dataPengeluaran"><i class="fa fa-forward"></i>Pengeluaran Barang</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a class="menu1 " href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Laporan</span>
                        </a>
                        <ul class="sub">
                            <li><a href="?hal=laporanPenerimaanBarang"><i class="fa fa-backward"></i>Peneriman
                                    Barang</a></li>
                            <li><a href="?hal=laporanPengeluaranBarang"><i class="fa fa-forward"></i>Pengeluaran Barang</a></li>
                        </ul>
                    </li>

                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>

        <?php
        include "../connect.php";
        include "isi.php";
    ?>


    </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../Template/lib/jquery/jquery.min.js"></script>

    <script src="../Template/lib/bootstrap/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="../Template/lib/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../Template/lib/jquery.scrollTo.min.js"></script>
    <script src="../Template/lib/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="../Template/lib/jquery.sparkline.js"></script>
    <!--common script for all pages-->
    <script src="../Template/lib/common-scripts.js"></script>
    <script type="text/javascript" src="../Template/lib/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="../Template/lib/gritter-conf.js"></script>
    <!--script for this page-->
    <script src="../Template/lib/sparkline-chart.js"></script>
    <script src="../Template/lib/zabuto_calendar.js"></script>
    <script type="text/javascript" src="../Template/lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
    <script type="text/javascript" src="../Template/lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="../Template/lib/bootstrap-daterangepicker/date.js"></script>
    <script type="text/javascript" src="../Template/lib/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script type="text/javascript" src="../Template/lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="../Template/lib/bootstrap-daterangepicker/moment.min.js"></script>
    <script type="text/javascript" src="../Template/lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
    <script src="../Template/lib/advanced-form-components.js"></script>
    <script type="text/javascript">
    // $(document).ready(function() {
    //   var unique_id = $.gritter.add({
    //     // (string | mandatory) the heading of the notification
    //     title: 'Welcome to Dashio!',
    //     // (string | mandatory) the text inside the notification
    //     text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
    //     // (string | optional) the image to display on the left
    //     image: '../Template/img/ui-sam.jpg',
    //     // (bool | optional) if you want it to fade out on its own or just sit there
    //     sticky: false,
    //     // (int | optional) the time you want it to be alive for before fading out
    //     time: 8000,
    //     // (string | optional) the class name you want to apply to that specific message
    //     class_name: 'my-sticky-class'
    //   });

    //   return false;
    // });
   


    // });
    </script>
    <script type="application/javascript">
     $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
    </script>
   
</body>

</html>