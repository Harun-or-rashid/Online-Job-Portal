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
    <div class="content-wrapper panel">
        <!-- Content Header (Page header) -->
        <!-- Main content -->

    @yield('main_content')
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-responsive">

            @include('backend.partials.session_message')

            <table id="user-list-table" class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
{{--                    <th>Parent Category</th>--}}
                    <th>Parent Id</th>
                    <th>Action</th>

                </tr>
                </thead>

                <tbody>
                <!-- reseller lists -->
                @php($serial=1)
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $serial++ }}</td>
                        <td>{{ $category->name }}</td>
{{--                        <td>{{ $category->name }}</td>--}}
                        <td>{{ $category->parent_id }}</td>
                        <td>
                            <div class="action-buttons">
                                <a class="green badge badge-pill"  title="Edit" href="{{url('categories/edit',$category->id)}}">
                                    <i class="ace-icon  fa fa-pencil bigger-130 " >Edit</i>
                                </a>
                                <a class=" badge badge-danger" href="{{url('categories/delete',$category->id)}}" onclick="return confirm('Are you sure to delete this?')"
                                  title="Delete">
                                    <i class="ace-icon fa fa-trash-o bigger-130 ">Delete</i>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach


                </tbody>
            </table>


        </div><!-- /.col -->


    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@include('backend.partials._footer')


    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
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
