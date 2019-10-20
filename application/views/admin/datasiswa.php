<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>H! Campus | Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('dst/assets/css/bootstrap.css '); ?>" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url('dst/datatables/dataTables.bootstrap4.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('dst/assets/font-awesome/css/font-awesome.css '); ?>" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('dst/assets/css/zabuto_calendar.css '); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('dst/assets/js/gritter/css/jquery.gritter.css '); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('dst/assets/lineicons/style.css '); ?>">    
    
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('dst/assets/css/style.css '); ?>" rel="stylesheet">
    <link href="<?php echo base_url('dst/assets/css/style-responsive.css '); ?>" rel="stylesheet">

    <script src="<?php echo base_url('dst/assets/js/chart-master/Chart.js '); ?>"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>Admin Bedah kampus</b></a>
            <!--logo end-->
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout">Logout</a></li>
              </ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <?php include 'navbar.php'; ?>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
            <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i> Data siswa</h3>
            <div class="row mt">
              <div class="col-lg-12" >
              <p><!-- Example DataTables Card-->
                <div class="card mb-3" style="height: 100%">
                  <div class="card-header" style="padding-bottom: 10px"> </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>ID_siswa</th>
                            <th>nama</th>
                            <th>email</th>
                            <th>tgl lahir</th>
                            <th>tlp</th>
                            <th>join</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($siswa as $row) {
                            echo "<tr>
                            <td>$row->ID_siswa</td>
                            <td>$row->nama</td>
                            <td>$row->email</td>
                            <td>$row->tgl_lhr</td>
                            <td>$row->tlp</td>
                            <td>$row->join</td>
                          </tr>";
                          } ?>
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div></p>
              </div>
            </div>
      
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('dst/assets/js/jquery.js '); ?>"></script>
    <script src="<?php echo base_url('dst/assets/js/jquery-1.8.3.min.js '); ?>"></script>
    <script src="<?php echo base_url('dst/assets/js/bootstrap.min.js '); ?>"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url('dst/assets/js/jquery.dcjqaccordion.2.7.js '); ?>"></script>
    <script src="<?php echo base_url('dst/assets/js/jquery.scrollTo.min.js '); ?>"></script>
    <script src="<?php echo base_url('dst/assets/js/jquery.nicescroll.js '); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('dst/assets/js/jquery.sparkline.js '); ?>"></script>


    <!--common script for all pages-->
    <script src="<?php echo base_url('dst/assets/js/common-scripts.js '); ?>"></script>
    
    <script type="text/javascript" src="<?php echo base_url('dst/assets/js/gritter/js/jquery.gritter.js '); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('dst/assets/js/gritter-conf.js '); ?>"></script>

    <script src="<?php echo base_url('dst/datatables/jquery.dataTables.js'); ?>"></script>
    <script src="<?php echo base_url('dst/datatables/dataTables.bootstrap4.js'); ?>"></script>
    <script src="<?php echo base_url('dst/js/sb-admin-datatables.min.js'); ?>"></script>

    <!--script for this page-->
    <script src="<?php echo base_url('dst/assets/js/sparkline-chart.js '); ?>"></script>    
  <script src="<?php echo base_url('dst/assets/js/zabuto_calendar.js '); ?>"></script>  
  
  

  </body>
</html>
