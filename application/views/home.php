<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Node Mcu</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Template/admin/plugins/font-awesome/css/font-awesome.min.css') ;?>">
  <!-- Ionicons
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">-->
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Template/admin/dist/css/adminlte.min.css') ;?> ">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Template/admin/plugins/iCheck/flat/blue.css');?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Template/admin/plugins/morris/morris.css') ;?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Template/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css') ;?>">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Template/admin/plugins/datepicker/datepicker3.css') ;?>">
  <!-- DataTables -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Template/admin/plugins/datatables/jquery.datatables.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/Template/admin/plugins/datatables/dataTables.bootstrap4.min.css') ;?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Template/admin/plugins/daterangepicker/daterangepicker-bs3.css') ;?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Template/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ;?>">
  <!-- Google Font: Source Sans Pro -->
  <!--<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">-->
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url()?>" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div> 
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-comments-o"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo base_url('assets/Template/admin/dist/img/user1-128x128.jpg');?>" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo base_url('assets/Template/admin/dist/img/user8-128x128.jpg');?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo base_url('assets/Template/admin/dist/img/user3-128x128.jpg');?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-bell-o"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fa fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url('assets/Template/admin/dist/img/AdminLTELogo.png');?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">MQ-2</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Dashboard MQ2
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('sensor_gas/tabel')?>" class="nav-link">
                  <i class="fa fa-table nav-icon"></i>
                  <p>Table</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('sensor_gas/grafik')?>" class="nav-link">
                  <i class="fa fa-pie-chart nav-icon"></i>
                  <p>Chart</p>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url('sensor_gas/grafik2')?>" class="nav-link">
                  <i class="fa fa-pie-chart nav-icon"></i>
                  <p>Chart 2</p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Sensor MQ_2</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url('Login/logout');?>">Logout</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <?php $this->load->view($page);?>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2018 <a href="http://adminlte.io">Hahaha</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.0-alpha
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/Template/admin/plugins/jquery/jquery.min.js') ;?>"></script>
<!-- jQuery UI 1.11.4 
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/Template/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') ;?>"></script>
<!-- Morris.js charts -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>-->
<script src="<?php echo base_url('assets/Template/admin/plugins/morris/morris.min.js') ;?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/Template/admin/plugins/sparkline/jquery.sparkline.min.js') ;?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('assets/Template/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ;?>"></script>
<script src="<?php echo base_url('assets/Template/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ;?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/Template/admin/plugins/knob/jquery.knob.js') ;?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/Template/admin/plugins/daterangepicker/daterangepicker.js') ;?>"></script>
<!-- datepicker -->
<script src="<?php echo base_url('assets/Template/admin/plugins/datepicker/bootstrap-datepicker.js') ;?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url('assets/Template/admin/plugins/slimScroll/jquery.slimscroll.min.js') ;?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/Template/admin/plugins/fastclick/fastclick.js') ;?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/Template/admin/dist/js/adminlte.js') ;?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/Template/admin/dist/js/demo.js') ;?>"></script>
<script src="<?php echo base_url('assets/Template/admin/plugins/datatables/jquery.dataTables.min.js') ;?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/Template/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ;?>"></script>
<script>
  $(document).ready(function (){

    var total=0;

    $("#example1").DataTable();

    setInterval(tampil_data,1500);

    function tampil_data(){
      $.ajax({
        url:'<?php echo base_url('sensor_gas/get_data_sensor')?>',
        dataType:'json',
        success:function(data){
          var index_ter=data.length-1;

          if(data.length>total){
            total=data.length;
            $('#data_sensor').text(data[index_ter].sensor_gas);
            $('.tbody').append('<tr>'+
                                    '<td>'+data[index_ter].id+'</td>'+
                                    '<td>'+data[index_ter].sensor_gas+'</td>'+
                                    '<td>'+data[index_ter].waktu+'</td>'+
                               '</tr>')
          }
        }
      }); 
    }
  });
</script>
</body>
</html>
