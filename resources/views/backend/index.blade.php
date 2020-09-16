@extends('backend.master')

@section('custom_css_plugins')
<!-- Ionicons -->
<link rel="stylesheet" href="{!! asset('assets/backend/bower_components/Ionicons/css/ionicons.min.css') !!}">
<!-- Morris chart -->
<link rel="stylesheet" href="{!! asset('assets/backend/bower_components/morris.js/morris.css') !!}">
@endsection


@section('main_content')
<section class="content-header">
    <h1>
        Dashboard
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>


<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>150</h3>

                    <p>New Orders</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>53<sup style="font-size: 20px">%</sup></h3>

                    <p>Bounce Rate</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>44</h3>

                    <p>User Registrations</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>65</h3>

                    <p>Unique Visitors</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->
    @if (!$jobs->isEmpty())
    @foreach ($jobs as $job)
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>Job Title: {{$job->title}}</h3>
        </div>
        @if (!$job->users->isEmpty())
        <div class="row">
            @foreach ($job->users as $user)
            <div class="col-md-6">
                <div class="panel panel-default" style="margin: 10px;">
                    <div class="panel-heading">
                        {{$user->first_name. ' '. $user->last_name}}
                    </div>
                    <div class="panel-body">
                        <div style="display: flex;">
                            <img src="
                            @if (empty($user->image)) {{asset('assets/backend/dist/img/user2-160x160.jpg')}} @else {{asset('users\images\\' . $user->image)}} @endif
                            " alt="" width="105" height="105" style="border-radius: 50%;">
                            <p style="margin: 10px auto;">{{$user->skills}}</p>
                        </div>
                        <div class="text-center">
                            <a href="{{asset('users/resume/' . $user->resume)}}" target="_blank"
                                class="btn btn-info">Download
                                Resume</a>
                        </div>
                    </div>
                    <div class="panel-footer text-center">
                        @if ($user->jobs->find($job->id)->pivot->status!=1)
                        <a href="{{route('company.accept',['jobid' => $job->id, 'userid'=> $user->id])}}"
                            class="btn btn-success" style="margin: 0 15px;">Accept</a>
                        @endif
                        @if($user->jobs->find($job->id)->pivot->status!=2)
                        <a href="{{route('company.reject',['jobid' => $job->id, 'userid'=> $user->id])}}"
                            class="btn btn-danger" style="margin: 0 15px;">Reject</a>
                        @endif

                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <p>No Applicant</p>
        @endif
    </div>
    @endforeach
    @else
    <h2>No Job Created Yet</h2>
    @endif
    </div>
    <!-- /.row (main row) -->


</section>

@endsection


@section('custom_js_plugins')

<!-- Morris.js charts -->
<script src="{!! asset('assets/backend/bower_components/raphael/raphael.min.js') !!}"></script>
<script src="{!! asset('assets/backend/bower_components/morris.js/morris.min.js') !!}"></script>
@endsection
