<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>/public/build/images/favicon.ico" />
  <title>Oficina do Zé</title>

  <!-- Bootstrap -->
  <link href="<?php echo base_url(); ?>/public/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?php echo base_url(); ?>/public/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="<?php echo base_url(); ?>/public/vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- bootstrap-progressbar -->
  <link href="<?php echo base_url(); ?>/public/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <!-- bootstrap-daterangepicker -->
  <link href="<?php echo base_url(); ?>/public/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
  <!-- Custom Theme Style -->
  <link href="<?php echo base_url(); ?>/public/build/css/custom.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>/public/build/js/localization/messages_pt_BR.js"></script>
</head>

<body class="nav-md">

  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="/home" class="site_title"><i class="fa fa-car"></i> <span>Oficina do Zé</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <!-- /menu profile quick info -->

          <br />
          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>Menu</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href='/home'>Home</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Cadastrar <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href='/carros/novo'>Carros</a></li>
                    <li><a href='/proprietarios/novo'>Clientes</a></li>
                    <li><a href='/servicos/novo'>Serviços</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-list-ul"></i> Relatórios <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href='/carros'>Carros </a></li>
                    <li><a href='/proprietarios'>Clientes</a></li>
                    <li><a href='/servicos'>Serviços</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="menu_section">
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" href="login/logout" data-original-title="Logout">
              <span class="fa fa-power-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>
      <!-- top navigation -->
      <div class="top_nav">
      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <?php
        if (isset($pagina)) {
          require($pagina);
        }
        ?>
      </div>
      <!-- /page content -->

      <!-- footer content -->
      <footer>
        <div class="pull-right">
          ©2019 All Rights Reserved. Isaac Lopes! Privacy and Terms
        </div>
        <div class="clearfix">
        </div>
      </footer>
    </div>
  </div>

  <!-- jQuery -->
  <script src="<?php echo base_url(); ?>/public/vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?php echo base_url(); ?>/public/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url(); ?>/public/vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="<?php echo base_url(); ?>/public/vendors/nprogress/nprogress.js"></script>
  <!-- Chart.js -->
  <script src="<?php echo base_url(); ?>/public/vendors/Chart.js/dist/Chart.min.js"></script>
  <!-- jQuery Sparklines -->
  <script src="<?php echo base_url(); ?>/public/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  <!-- morris.js -->
  <script src="<?php echo base_url(); ?>/public/vendors/raphael/raphael.min.js"></script>
  <script src="<?php echo base_url(); ?>/public/vendors/morris.js/morris.min.js"></script>
  <!-- gauge.js -->
  <script src="<?php echo base_url(); ?>/public/vendors/gauge.js/dist/gauge.min.js"></script>
  <!-- bootstrap-progressbar -->
  <script src="<?php echo base_url(); ?>/public/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
  <!-- Skycons -->
  <script src="<?php echo base_url(); ?>/public/vendors/skycons/skycons.js"></script>
  <!-- Flot -->
  <script src="<?php echo base_url(); ?>/public/vendors/Flot/jquery.flot.js"></script>
  <script src="<?php echo base_url(); ?>/public/vendors/Flot/jquery.flot.pie.js"></script>
  <script src="<?php echo base_url(); ?>/public/vendors/Flot/jquery.flot.time.js"></script>
  <script src="<?php echo base_url(); ?>/public/vendors/Flot/jquery.flot.stack.js"></script>
  <script src="<?php echo base_url(); ?>/public/vendors/Flot/jquery.flot.resize.js"></script>
  <!-- Flot plugins -->
  <script src="<?php echo base_url(); ?>/public/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
  <script src="<?php echo base_url(); ?>/public/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
  <script src="<?php echo base_url(); ?>/public/vendors/flot.curvedlines/curvedLines.js"></script>
  <!-- DateJS -->
  <script src="<?php echo base_url(); ?>/public/vendors/DateJS/build/date.js"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="<?php echo base_url(); ?>/public/vendors/moment/min/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>/public/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

  <!-- Custom Theme Scripts -->
  <script src="<?php echo base_url(); ?>/public/build/js/custom.min.js"></script>
  <script src="<?php echo base_url(); ?>/public/build/js/jquery.mask.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>/public/build/js/validacampos.js"></script>
</body>

</html>