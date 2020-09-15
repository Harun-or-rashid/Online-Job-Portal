<!DOCTYPE html>
<html>
<head>
  @include('backend.partials._head')
  <style type="text/css">
    /*.slimScrollDiv{
      position: relative; overflow: hidden; width: auto; height: 100%;
    }*/
  </style>
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  @include('backend.partials._header')

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    @include('backend.partials._sidebar')
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->

    @yield('main_content')
@include('backend.partials._footer')
    <!-- /.content -->
  </div>



  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{!! asset('assets/backend/bower_components/jquery/dist/jquery.min.js') !!}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{!! asset('assets/backend/bower_components/jquery-ui/jquery-ui.min.js') !!}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{!! asset('assets/backend/bower_components/bootstrap/dist/js/bootstrap.min.js') !!}"></script>
<!-- momentjs -->
<script src="{!! asset('assets/backend/bower_components/moment/min/moment.min.js') !!}"></script>
<!-- Slimscroll -->
<script src="{!! asset('assets/backend/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') !!}"></script>

@yield('custom_js_plugins')

<!-- AdminLTE App -->
<script src="{!! asset('assets/backend/dist/js/adminlte.min.js') !!}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

@yield('custom_js')
<!-- for index only -->


</body>
</html>
