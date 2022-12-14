
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
  <!--toastr Css-->
  <link type="text/css" rel="stylesheet" href="{{ asset('backend/css/toastr.min.css') }}">
  <!--Summernote-->
  <link type="text/css" rel="stylesheet" href="{{ asset('backend/css/summernote.min.css') }}" />
  <!--Tags Input-->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css" >
  <link type="text/css" rel="stylesheet" href="{{ asset('backend/css/bootstrap-tagsinput.css') }}" />
    <!--Sweetalert2-->
    <script type="text/javascript" src="{{ asset('backend/plugins/sweetalert2/sweetalert2.all.min.css') }}"></script>

  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">



<div class="wrapper">

  <!-- Navbar -->
@include('admin.body.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->

  @include('admin.body.sidebar')

  <!-- Content Wrapper. Contains page content -->
 @yield('admin')
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('admin.body.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!--Toastr-->
<script type="text/javascript" src="{{ asset('backend/js/toastr.min.js') }}"></script>
<!--Summernote-->
<script type="text/javascript" src="{{ asset('backend/js/summernote.min.js') }}"></script>
  <!--Data Table Js-->
  <script src="{{ asset('backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <!--Sweetalert2-->
  <script type="text/javascript" src="{{ asset('backend/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('backend/js/code.js') }}"></script>
  <!--Tags Input-->
  <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js" ></script>
  <script type="text/javascript" src="{{ asset('backend/js/bootstrap-tagsinput.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend/js/adminlte.min.js') }}"></script>

<script type="text/javascript">
  @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}";

    switch(type){
      case 'info':
        toastr.info("{{ Session::get('message') }}");
        break;

        case 'success':
          toastr.success("{{ Session::get('message') }}");
          break;

          case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

            case 'error':
              toastr.error("{{ Session::get('message') }}");
              break;
    }
  @endif

  $('#summernote').summernote({
    placeholder: 'Hello Bootstrap 4',
    tabsize: 2,
    height: 300
  });
</script>

</body>
</html>
