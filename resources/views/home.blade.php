{{-- @extends('admin.default') --}}
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <a href="{{ route('getuser') }}" class="btn btn-primary">Information</a>
        </div>
    </div>
</div>
@endsection
