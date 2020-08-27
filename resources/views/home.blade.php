@extends('admin.default')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <a href="{{ route('getuser') }}" class="btn btn-primary">Information</a>
            <a href="#" class="btn btn-success">Team</a>
            <a href="#" class="btn btn-danger">Salary</a>
            <a href="#" class="btn btn-warning">Workdays</a>

        </div>
    </div>
</div>
@endsection
