<!DOCTYPE html>
<html>

<head>
    @include('backend.partials._head')
    <style type="text/css">
        /*.slimScrollDiv{
          position: relative; overflow: hidden; width: auto; height: 100%;
        }*/
        .action {
            display: flex;
            flex-direction: row;
        }

        .action a {
            margin: 0 10px;
            text-decoration: none;
        }

        .wrap-content {
            max-width: 200px;
        }
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

            @include('flash')

            @yield('main_content')
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-responsive">

                @include('backend.partials.session_message')

                <table id="user-list-table" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr style="background: #c0d0e2;">
                            <th>SL</th>
                            <th>Job Title</th>
                            <th>Description</th>
                            <th>Sallary</th>
                            <th>Location</th>
                            <th>Country</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!$jobs->isEmpty())
                        @foreach ($jobs as $index=>$job)
                        <tr>
                            <th>{{++$index}}</th>
                            <th>{{$job->title}}</th>
                            <th class="wrap-content">{{$job->description}}</th>
                            <th>{{$job->salary}}</th>
                            <th>{{$job->location}}</th>
                            <th>{{$job->country}}</th>
                            <th>
                                <div class="action">
                                    <a href="{{route('company.jobs.edit', $job->id)}}">Edit</a>
                                    <a href="#"
                                        onclick="event.preventDefault(); document.getElementById('delete{{$job->id}}').submit();">Delete</a>
                                    <form id="delete{{$job->id}}" action="{{ route('company.jobs.delete', $job->id) }}"
                                        method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>
                            </th>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="7" style="text-align: center">No data Available</td>
                        </tr>
                        @endif
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
