<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{URL::asset('assets/bootstrap/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{URL::asset('assets/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{URL::asset('assets/dist/css/skins/_all-skins.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{URL::asset('assets/plugins/iCheck/flat/blue.css')}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{URL::asset('assets/plugins/morris/morris.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{URL::asset('assets/plugins/datepicker/datepicker3.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{URL::asset('assets/plugins/datatables/dataTables.bootstrap.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{URL::asset('assets/plugins/daterangepicker/daterangepicker-bs3.css')}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{URL::asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('assets/dist/css/custom.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>G</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Soil</b>Gate</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
 <a href="{{ url('/logout') }}" class="pull-right" style="color:white;font-size: 17px;    line-height: 3;    padding-right: 44px;"><i class="fa fa-btn fa-sign-out"></i>Logout</a>
      
    </nav>

  </header>
  <!-- Left side column. contains the logo and sidebar -->
  
   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    @yield('content')

    </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>SoliGate</b> 1.1.0
    </div>
    <strong>Copyright &copy; 2016-2017  All rights reserved.
  </footer>


  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="{{URL::asset('assets/plugins/jQuery/jQuery-2.2.0.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="{{URL::asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>

<!-- Sparkline -->
<script src="{{URL::asset('assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{URL::asset('assets/plugins/knob/jquery.knob.js')}}"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{URL::asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{URL::asset('assets/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{URL::asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- DataTables -->
<script src="{{URL::asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{URL::asset('assets/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{URL::asset('assets/plugins/fastclick/fastclick.js')}}"></script>

<!-- AdminLTE App -->
<script src="{{URL::asset('assets/dist/js/app.min.js')}}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{URL::asset('assets/dist/js/demo.js')}}"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
     $("#datatable1").DataTable();
  });
</script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
      $('#myModal').on('show', function() {
        var link = $(this).data('link'),
        removeBtn = $(this).find('.danger');
    })

    $('.btn-trash').on('click', function(e) {
      e.preventDefault();

      var link = $(this).attr('href');
      $('#myModal').data('link', link).modal('show');
    });

    $('#btnYes').click(function() {
      // handle deletion here
      var link = $('#myModal').data('link');      
      window.location.href= link;
    });
  });
</script>
</body>
</html>

