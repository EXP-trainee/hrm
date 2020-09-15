@extends('admin.default')

@section('page-header')
	User <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1>Update Role</h1>
					</div>
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Update Role</li>
						</ol>
					</div>
				</div>
			</div><!-- /.container-fluid -->
		</section>
		
		<!-- Main content -->
		<section class="content">
			<div class="container-fluid">
				<div class="row">
					<!-- left column -->
					<div class="col-md-12">
						<!-- general form elements -->
						<div class="card card-primary">
							<div class="card-header">
								<h3 class="card-title">Form update role</h3>
							</div>
							<!-- /.card-header -->
							<!-- form start -->
							<form role="form" action="{{route('admin.roles.update',['role'=>$item->id])}}" method="POST"
							      enctype="multipart/form-data">
								@method('PUT')
								<div class="card-body">
									@csrf
									<div class="form-row">
										<div class="col-md-4">
											<div class="form-group">
												<label for="name">Name</label>
												<input value="{{$item->name}}" type="text" name="name" id=""
												       class="form-control" placeholder="" aria-describedby="helpId">
												<small id="helpId" class="text-muted"></small>
											</div>
											
											<div class="form-group">
												<label for="guard_name">guard name</label>
												<input value="{{$item->guard_name}}" type="text" name="guard_name" id=""
												       class="form-control" placeholder="" aria-describedby="helpId">
												<small id="helpId" class="text-muted"></small>
											</div>
											
{{--											@foreach ($permissions as $permission)--}}
{{--											@foreach($item->permissions as $permission)--}}
{{--													<label class="checkbox-inline col-md-3 " style="margin-left: 20px">--}}
{{--														<input type="checkbox" value="{{$item->id}}"--}}
{{--														       checked="{{in_array($permission,$item->permissions->toArray()) ? 'checked' : ''}}"--}}
{{--														       name="permissions[]"> {{$item->name}}--}}
{{--													</label>--}}
{{--												@endforeach--}}
{{--											@endforeach--}}
										<!-- /.card-body -->
											
											<div class="card-footer">
												<button type="submit" class="btn btn-primary">UPDATE</button>
											</div>
							</form>
						</div>
						<!-- /.card -->
					</div>
					<!-- /.row -->
				</div><!-- /.container-fluid -->
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->

@stop
