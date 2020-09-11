@extends('admin.default')

@section('page-header')
	Users <small>{{ trans('app.manage') }}</small>
@endsection

@section('content')
	
	<!-- Content Wrapper. Contains page content -->
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
								
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Create Role </button>
							</div>
							<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-md">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">New message</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form role="form" action="{{route('admin.roles.store')}}" method="POST" enctype="multipart/form-data" >
												@csrf
												<div  class="card-body">
													<div class="form-group">
														<label for="name">Name</label>
														<input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
														<small id="helpId" class="text-muted"> full name </small>
													</div>
													
													<div class="form-group">
														<label for="guard_name">Guard name</label>
														<input type="text" name="guard_name" id="" class="form-control" placeholder="" aria-describedby="helpId">
														<small id="helpId" class="text-muted"></small>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-primary">Save</button>
												</div>
											</form>
										</div>
									
									</div>
								</div>
							</div>
							
							<!-- /.card-header -->
							<div class="card-body">
								<table class="table table-bordered">
									<thead>
									<tr>
										<th>id</th>
										<th>Name</th>
										<th>Guard name</th>
										<th></th>
									</tr>
									</thead>
									@foreach ($listRole as $item)
										<tbody>
										<tr>
											<td>{{$item->id}}</td>
											<td>{{$item->name}}</td>
											<td>{{$item->guard_name}}</td>
											<td>
												<form action="{{route('admin.roles.destroy',['role' => $item->id])}}" method="post">
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
