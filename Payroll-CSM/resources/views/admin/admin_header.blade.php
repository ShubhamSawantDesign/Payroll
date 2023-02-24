<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard</title>

  <link href="https://fonts.googleapis.com/css?family=Montserrat|Tangerine|Lato:wght@900&display=swap" rel="stylesheet" />
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{url ('css/backend_css/fontawesome-free/css/all.min.css') }}">
  <!-- Google Font: Source Sans Pro
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url ('css/backend_css/fontawesome-free/css/all.min.css') }}">
  <!-- /css/frontend_css/all.min.css -->
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- iCheck 
  <link rel="stylesheet" href="../../../css/backend_css/jqvmap/jqvmap.min.css">
  Theme style -->
  <link rel="stylesheet" href="{{url ('css/backend_css/adminlte.min.css') }}"><!-- /css/backend_css/adminlte.min.css -->
  <link rel="stylesheet" href="{{url ('css/backend_css/custom.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{url ('css/backend_css/overlayScrollbars/css/OverlayScrollbars.min.css ') }}"> <!-- /css/backend_css/overlayScrollbars/css/OverlayScrollbars.min.css -->
  <!-- Daterange picker -->
  <link rel='stylesheet' href='https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.css'> 
  <link rel="stylesheet" href="{{url ('css/backend_css/daterangepicker/daterangepicker.css ') }}"> <!-- /css/backend_css/daterangepicker/daterangepicker.css -->
  <!-- summernote -->
  <link rel="stylesheet" href="{{url ('css/backend_css/summernote/summernote-bs4.min.css ') }}"> <!-- css/backend_css/summernote/summernote-bs4.min.css-->




  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

  <script src="{{url ('js/frontend_js/jquery.file.validation.js') }}"></script>
    <style>
    @media screen and (min-width: 700px) {
    .mob-dis{
      display:none !important;
    }
    }
    @media screen and (max-width: 700px) {
    .mob-dis{
      display:block !important;
    }
    }
    .bootstrap-tagsinput .tag {
    margin-right: 2px;
    background-color: #aaa;
    padding: 2px 7px;
}
    </style>
<script src={{url ('js/backend_js/jquery.min.js' )}}></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
@include('sweetalert::alert')
@yield('content')
   <!-- jQuery -->

<!-- jQuery UI 1.11.4 -->
<script src={{url ('js/backend_js/jquery-ui.min.js' )}}></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- bs-custom-file-input -->
<script src={{url ('js/backend_js/bs-custom-file-input.min.js' )}}></script>

<!-- Bootstrap 4 -->
<script src={{url ('js/backend_js/bootstrap.bundle.min.js' )}}></script>
<!-- ChartJS -->
<script src={{url ('js/backend_js/Chart.min.js' )}}></script>
<!-- Sparkline -->
<script src={{url ('js/backend_js/sparkline.js' )}}></script>
<!-- JQVMap -->
<script src={{url ('js/backend_js/maps/jquery.vmap.min.js' )}}></script>
<script src={{url ('js/backend_js/maps/jquery.vmap.usa.js' )}}></script>
<!-- jQuery Knob Chart -->
<script src={{url ('js/backend_js/jquery.knob.min.js' )}}></script>
<!-- daterangepicker -->
<script src={{url ('js/backend_js/moment.min.js')}}></script>
<script src={{url ('js/backend_js/daterangepicker.js' )}}></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src={{url ('js/backend_js/tempusdominus-bootstrap-4.min.js' )}}></script>
<!-- Summernote -->
<script src={{url ('js/backend_js/summernote-bs4.min.js' )}}></script>
<!-- overlayScrollbars -->
<script src={{url ('js/backend_js/jquery.overlayScrollbars.min.js' )}}></script>
<!-- AdminLTE App -->
<script src={{url ('js/backend_js/adminlte.js' )}}></script>
<!-- AdminLTE for demo purposes -->
<script src={{url ('js/backend_js/demo.js' )}}></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src={{url ('js/backend_js/dashboard.js' )}}></script>
<!-- Custome File Validation Script-->
<script src={{url ('js/frontend_js/jquery.file.validation.js' )}}></script>
<!-- End of Custom Script-->
<!-- DataTables  & Plugins -->
<script src={{url ('js/backend_js/jquery.dataTables.min.js' )}}></script>
<script src={{url ('js/backend_js/dataTables.bootstrap4.min.js' )}}></script>
<script src={{url ('js/backend_js/dataTables.responsive.min.js' )}}></script>
<script src={{url ('js/backend_js/responsive.bootstrap4.min.js' )}}></script>
<script src={{url ('js/backend_js/dataTables.buttons.min.js' )}}></script>
<script src={{url ('js/backend_js/buttons.bootstrap4.min.js' )}}></script>
<script src={{url ('js/backend_js/jszip.min.js' )}}></script>
<script src={{url ('js/backend_js/pdfmake.min.js' )}}></script>
<script src={{url ('js/backend_js/vfs_fonts.js' )}}></script>
<script src={{url ('js/backend_js/buttons.html5.min.js' )}}></script>
<script src={{url ('js/backend_js/buttons.print.min.js' )}}></script>
<script src={{url ('js/backend_js/buttons.colVis.min.js' )}}></script>
<script src={{url ('js/frontend_js/jquery.fields.validation.js' )}}></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js'></script>

<script>  $("#inputTag").tagsinput('items');</script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#datatable').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script>
$('#summernote').summernote({
  toolbar: [
    // [groupName, [list of button]]
    
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['fontsize', ['fontsize']],
    ['fontname', ['fontname']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']],
    ['view', ['fullscreen', 'codeview', 'help']],
  ]
});

$('#summernote1').summernote({
  toolbar: [
    // [groupName, [list of button]]
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['fontsize', ['fontsize']],
    ['fontname', ['fontname']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']],
    ['view', ['fullscreen', 'codeview', 'help']],
  ]
});

</script>

</body>
</html>