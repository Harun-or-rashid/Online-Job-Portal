@extends('applicant.master')

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
    @if (!$jobs->isEmpty())
    @foreach ($jobs as $job)
    <div class="panel panel-info" style="margin: 20px 20px;">
        <!-- Default panel contents -->
        <div class="panel-heading">Job Title: {{$job->title}}</div>
        <div class="panel-body" style="padding: 10px 30px; text-align: justify;">
            <h3>Job Description</h3>
            <p>
                {{$job->description}}
            </p>
            <h4>Salary : <strong>{{$job->salary}}</strong></h4>
            <h4>Location : <strong>{{$job->location}}</strong></h4>
            <h4>Country : <strong>{{$job->country}}</strong></h4>
        </div>

        <!-- List group -->
        <ul class="list-group">
            <li class="list-group-item">
                <button class="btn btn-primary">
                    Apply
                </button>
            </li>
        </ul>
    </div>
    @endforeach
    @else
    <div class="panel panel-warning" style="margin: 20px 20px;">
        <div class="panel-heading">No Job Available</div>
    </div>
    @endif


    <!-- Small boxes (Stat box) -->
    {{-- <div class="row">
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
    </div> --}}
    <!-- /.row -->

    </div>
    <!-- /.row (main row) -->

</section>

@endsection


@section('custom_js_plugins')

<!-- Morris.js charts -->
<script src="{!! asset('assets/backend/bower_components/raphael/raphael.min.js') !!}"></script>
<script src="{!! asset('assets/backend/bower_components/morris.js/morris.min.js') !!}"></script>
@endsection
