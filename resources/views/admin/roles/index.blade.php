@extends('admin.default')

@section('page-header')
	Users <small>{{ trans('app.manage') }}</small>
@endsection

@section('content')
	
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1>List Role User</h1>
					</div>
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">List Role User</li>
						</ol>
					</div>
				</div>
			</div><!-- /.container-fluid -->
		</section>
		
		<!-- Main content -->
		<section class="content">
			<div class="container-fluid">
				<!-- /.row -->
				<div class="row">
					<div class="col-md-10">
						<div class="card">
							<div class="card-header">
								{{-- <h3 class="card-title"><a href="#"><button class="btn btn-primary">thêm nhân viên</button></a></h3> --}}
								<h3 class="card-title"><a href="{{route('role.create')}}"><button class="btn btn-primary">Create InfoUser</button></a></h3>
							</div>
							<!-- /.card-header -->
							<div class="card-body">
								<table class="table table-bordered">
									<thead>
									<tr>
										<th>id</th>
										<th>Name</th>
										<th>Guard name</th>
									
									</tr>
									</thead>
									@foreach ($listRole as $item)
										<tbody>
										<tr>
											<td>{{$item->id}}</td>
											<td>{{$item->name}}</td>
											<td>{{$item->guard_name}}</td>
											<td>
												<a href="{{route('role.edit',['role' => $item->id])}}" class="btn btn-primary"><i class="fa fa-edit " aria-hidden="true"></i></a>
												
												<form action="{{route('role.destroy',['role' => $item->id])}}" method="post">
													@csrf
													<input type="hidden"  name="_method" value="DELETE">
													<button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden ="true"></i></button>
												</form>
											</td>
										</tr>
										</tbody>
									@endforeach
								</table>
							</div>
							<!-- /.card-body -->
						
						
						</div>
						<!-- /.card -->
					</div>
					<!-- /.row -->
				</div><!-- /.container-fluid -->
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
@endsection
