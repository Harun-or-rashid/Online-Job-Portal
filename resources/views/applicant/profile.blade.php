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
    <form action="{{route('home.update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <img id="user-image" src="{{asset('users/images/'.$user->image)}}" alt="profile picture" width="105"
                height="112" /><br>
            <input type="file" name="image" class="form-control-file" onchange="readURL(this);"
                accept="image/jpeg, image/png">
        </div>
        <div class="form-group">
            <label for="resume">Upload Resume</label>
            <input type="file" name="resume" class="form-control-file" id="resume"
                accept="application/pdf, application/msword, .docx">
        </div>
        <div class="form-group">
            <label for="skills">Enter your skills</label>
            <textarea name="skills" placeholder="skills: c, c++, laravel, php" class="form-control" id="skills" rows="3"
                columns="5">{{$user->skills}}</textarea>
        </div>
        <button class="btn btn-primary" type="submit">Save</button>
    </form>
    </div>
    <!-- /.row (main row) -->

</section>

@endsection


@section('custom_js_plugins')

<!-- Morris.js charts -->
<script src="{!! asset('assets/backend/bower_components/raphael/raphael.min.js') !!}"></script>
<script src="{!! asset('assets/backend/bower_components/morris.js/morris.min.js') !!}"></script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#user-image')
                    .attr('src', e.target.result)
                    .width(105)
                    .height(112);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection
