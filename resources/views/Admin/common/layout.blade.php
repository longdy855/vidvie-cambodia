<!DOCTYPE html>
<html>
  <head>
	
    <!-- Favico ICon All Tablet -->
  <link rel="apple-touch-icon" sizes="57x57" href="{{url('assets/frontend/icon-favico/apple-icon-57x57.png')}}">
  <link rel="apple-touch-icon" sizes="60x60" href="{{url('assets/frontend/icon-favico/apple-icon-60x60.png')}}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{url('assets/frontend/icon-favico/apple-icon-72x72.png')}}">
  <link rel="apple-touch-icon" sizes="76x76" href="{{url('assets/frontend/icon-favico/apple-icon-76x76.png')}}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{url('assets/frontend/icon-favico/apple-icon-114x114.png')}}">
  <link rel="apple-touch-icon" sizes="120x120" href="{{url('assets/frontend/icon-favico/apple-icon-120x120.png')}}">
  <link rel="apple-touch-icon" sizes="144x144" href="{{url('assets/frontend/icon-favico/apple-icon-144x144.png')}}">
  <link rel="apple-touch-icon" sizes="152x152" href="{{url('assets/frontend/icon-favico/apple-icon-152x152.png')}}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{url('assets/frontend/icon-favico/apple-icon-180x180.png')}}">
  <link rel="icon" type="image/png" sizes="192x192"  href="{{url('assets/frontend/icon-favico/android-icon-192x192.png')}}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{url('assets/frontend/icon-favico/favicon-32x32.png')}}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{url('assets/frontend/icon-favico/favicon-96x96.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{url('assets/frontend/icon-favico/favicon-16x16.png')}}">
  <link rel="manifest" href="{{url('assets/frontend/icon-favico/manifest.json')}}">
  <!-- Meta Device -->
  <meta name="csrf-token" content="{{ csrf_token()}}" />
  <meta name="csrf-param" content="_token" />
  <meta http-equiv="Content-Type" content="{{HTTP_EQUIV_CONTENT_TYPE}}" />
  <meta name="viewport" content="{{MATA_VIEW_REPORT}}">
  <meta name="description" content="{{META_DESCRIPTION}}" />
  <meta name="keywords" content="{{META_KEYWORDS}}" />  
  <!-- Medta Icon -->
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="{{url('assets/frontend/icon-favico/ms-icon-144x144.png')}}">
  <meta name="theme-color" content="#ffffff">
        
    <title>{{SITE_NAME}}</title>
    
      <!-- ########################### Admin Style ############################-->
      
      <!-- Theme style -->
      <link rel="stylesheet" href="{{url('css/custome.css')}}">
      <link rel="stylesheet" href="{{url('lib/AdminLTE/dist/css/AdminLTE.css')}}">
      <link rel="stylesheet" href="{{url('lib/AdminLTE/dist/css/AdminLTE.min.css')}}">
      <!-- AdminLTE Skins. Choose a skin from the css/skins
           folder instead of downloading all of them to reduce the load. -->
      <link rel="stylesheet" href="{{url('lib/AdminLTE/dist/css/skins/_all-skins.min.css')}}">
       <!-- ########################### Admin Style ############################-->
      <!-- Bootstrap 3.3.5 -->
      <link rel="stylesheet" href="{{url('lib/AdminLTE/bootstrap/css/bootstrap.min.css')}}">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">
      <!-- DataTables -->
      <link rel="stylesheet" href="{{url('lib/AdminLTE/plugins/datatables/dataTables.bootstrap.css')}}">
      <!-- Bootstrap Color Picker -->
      <link rel="stylesheet" href="{{url('lib/AdminLTE/plugins/colorpicker/bootstrap-colorpicker.min.css')}}">
      <!-- Bootstrap time Picker -->
      <link rel="stylesheet" href="{{url('lib/AdminLTE/plugins/timepicker/bootstrap-timepicker.min.css')}}">
      <!-- Date Picker -->
      <link rel="stylesheet" href="{{url('lib/AdminLTE/plugins/datepicker/datepicker3.css')}}">
      <!-- Daterange picker -->
      <link rel="stylesheet" href="{{url('lib/AdminLTE/plugins/daterangepicker/daterangepicker-bs3.css')}}">
      <!-- tab -->
      <link href="{{url('assets/backend/fileman/css/jquery-ui.css')}}" rel="stylesheet">
      
    <!-- jQuery 2.1.4 -->
    <script src="{{url('lib/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
  
    <!-- Use for deleting by tag <a> -->
    <script src="{{url('js/rails.js')}}"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="{{url('js/html5shiv.min.js')}}"></script>
      <script src="{{url('js/respond.min.js')}}"></script>
    <![endif]-->

    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>

  <script>
        var nowDate = new Date();
        var today = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(), 0, 0, 0, 0);

        $('.date-picker').datepicker({ 
        format: 'yyyy-mm-dd',
        autoclose: true,
        //startDate: today 
        });
        var nowDate = new Date();
        var today = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(), 0, 0, 0, 0);

        $('.date-picker1').datepicker({ 
        format: 'dd-M-yyyy',
        autoclose: true,
        startDate: today 
        });     

    </script>
    
    <!-- Page script -->
    <script>
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
              ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              },
              startDate: moment().subtract(29, 'days'),
              endDate: moment()
            },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
      });
    </script>
    <!-- Image Load -->
    <link rel="stylesheet" href="{{url('css/ajax_image_load/image_load.css')}}">
    <script src="{{url('js/ajax_image_load/image_load.js')}}"></script>
    
    @yield('topscripts')
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      
        <!-- header -->
        @include('Admin.common.header')
        <!-- Left side column. contains the logo and sidebar -->
        @include('Admin.common.sidebar')
      
      @yield('content')

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
        </div>
        <strong>{{FOOTER_TEXT}} <a href="{{ SITE_HTTP_URL}}" target="_blank">{{SITE_NAME}}</a>.</strong> {{FOOTER_TEXT2}} <a target="_blank" href="http://www.khmergecko.com">Khmer Gecko</a>
      </footer>

      <!-- Control Sidebar -->
        @include('Admin.common.control_sidebar')
      <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- ckeditor -->
    <script defer="" src="{{url('assets/backend/ckeditor/ckeditor.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{url('lib/AdminLTE/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Select2 -->
    <script src="{{url('lib/AdminLTE/plugins/select2/select2.full.min.js')}}"></script>
    <!-- InputMask -->
    <script src="{{url('lib/AdminLTE/plugins/input-mask/jquery.inputmask.js')}}"></script>
    <script src="{{url('lib/AdminLTE/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
    <script src="{{url('lib/AdminLTE/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
    <!-- date-range-picker -->
    <script src="{{url('lib/AdminLTE/plugins/daterangepicker/moment.min.js')}}"></script>
    <script src="{{url('lib/AdminLTE/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- bootstrap color picker -->
    <script src="{{url('lib/AdminLTE/plugins/colorpicker/bootstrap-colorpicker.min.js')}}"></script>
    <!-- bootstrap time picker -->
    <script src="{{url('lib/AdminLTE/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="{{url('lib/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
    <!-- iCheck 1.0.1 -->
    <script src="{{url('lib/AdminLTE/plugins/iCheck/icheck.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{url('lib/AdminLTE/plugins/fastclick/fastclick.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{url('lib/AdminLTE/dist/js/app.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{url('lib/AdminLTE/dist/js/demo.js')}}"></script>
    <!-- DataTables -->
    <script src="{{url('lib/AdminLTE/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('lib/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
	 
    <script src="{{url('assets/backend/js/jquery-ui.js')}}"></script>
    <script>
      $( "#tabs" ).tabs();
    </script>  

   <!-- Date Time -->
  <link rel="stylesheet" href="{{url('assets/backend/plugins/date_bootstrap/bootstrap-datetimepicker.min.css')}}">
  <script src="{{url('assets/backend/plugins/date_bootstrap/bootstrap-datetimepicker.min.js')}}"></script>
  <script>
      var nowDate = new Date();
      var today = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(), 0, 0, 0, 0);

      $('.date-picker').datepicker({ 
      format: 'yyyy-mm-dd',
      autoclose: true,
      //startDate: today 
      });
      var nowDate = new Date();
      var today = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(), 0, 0, 0, 0);

      $('.date-picker1').datepicker({ 
      format: 'dd-M-yyyy',
      autoclose: true,
      startDate: today 
      });     

  </script>
    
	 @yield('bottomscripts')

  </body>
</html>