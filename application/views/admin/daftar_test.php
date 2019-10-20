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
            <h3><i class="fa fa-angle-right"></i> Data tes</h3> 
            <a class="nav-link" data-toggle="modal" data-target="#exampleModal"> <button class="btn btn-round btn-primary" style="float: right;">Tambah tes</button></a>
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
                            <th>nama tes</th>
                            <th>Tipe</th>
                            <th>start</th>
                            <th>end</th>
                            <th>waktu upload</th>
                            <th>action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($tes as $row) {

                            echo "<tr><td>";?>
                            <a href="dftr_soal?id_tes=<?php echo $row->id_tes; ?>"><?php echo $row->nama_tes; ?></a>
                            <?php 
                            echo "</td>
                            <td>$row->tipe</td>
                            <td>$row->start</td>
                            <td>$row->end</td>
                            <td>$row->waktu_upload</td>
                            <td><a href='updt_tes?id_sl=$row->id_tes'><button class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i></button></a>
                                <a href='del_tes?id_sl=$row->id_tes'><button class='btn btn-danger btn-xs'><i class='fa fa-trash-o ''></i></button></td></a>
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
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah test</h5>
          </div>
          <div class="modal-body" style="height: 240px">
            <form action="inp_tes" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Nama tes</label>
                <div class="col-sm-10" style="margin-bottom: 10px">
                  <input type="text" class="form-control" name="nama">
                </div>
              </div>
              <div class="form-group" >
                <label class="col-sm-2 col-sm-2 control-label">tipe soal</label>
                <div class="col-sm-10" style="margin-bottom: 10px">
                  <select name="tipe" class="form-control" required>
                    <option value="1">Tpa</option>
                    <option value="2">Saintek</option>
                    <option value="3">Soshum</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">waktu mualai</label>
                <div class="col-sm-5" style="margin-bottom: 10px">
                  <input type="date" class="form-control" name="startt">
                </div>
                <div class="col-sm-5" style="margin-bottom: 10px">
                  <input type="time" class="form-control" name="startw">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">waktu berakhir</label>
                <div class="col-sm-5" style="margin-bottom: 10px">
                  <input type="date" class="form-control" name="endt">
                </div>
                <div class="col-sm-5" style="margin-bottom: 10px">
                  <input type="time" class="form-control" name="endw">
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary">input</button>
            </div>
          </form>
        </div>
      </div>
    </div>
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
    <script src="<?php echo base_url('dst/js/sb-admin.min.js'); ?>"></script>     
    <script src="<?php echo base_url('dst/assets/js/zabuto_calendar.js '); ?>"></script>  
  
  

  </body>
</html>
