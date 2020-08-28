@extends('admin.default')

@section('page-header')
	User <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
	  <div class="container-fluid">
		<div class="row">
		  <div class="col-sm-10">
			<h1> Create Infomation User Form</h1>
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
				<h3 class="card-title">Infomation User</h3>
			  </div>
			  <!-- /.card-header -->
			  <!-- form start -->
			  <form role="form" action="{{route('admin.users.store')}}" method="POST" enctype="multipart/form-data">
				<div class="card-body">
				  @csrf
				  <div class="form-row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
							<small id="helpId" class="text-muted"> full name </small>
						</div>
	
						<div class="form-group">
							<label for="email">email</label>
							<input type="text" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
							<small id="helpId" class="text-muted"></small>
						</div>
	
						<div class="form-group">
							<label for="password">password</label>
							<input type="text" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId">
							<small id="helpId" class="text-muted"></small>
						</div>
	
						<div class="form-group">
							<label for="password_confirmation">password_confirmation</label>
							<input type="text" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="" aria-describedby="helpId">
							<small id="helpId" class="text-muted"></small>
						</div>
						
						<div class="form-group">
							<label for="avatar">avatar</label>
							<input type="file" name="avatar" id="" class="form-control" placeholder="" aria-describedby="helpId">
							<small id="helpId" class="text-muted"></small>
						</div>
						<div class="form-group">
							<label for="phone"> Phone</label>
							<input type="text" name="phone" id="" class="form-control" placeholder="" aria-describedby="helpId">
							<small id="helpId" class="text-muted">10 chữ số</small>
						</div>
	  
						<div class="form-group">
						  <label for="phone_2"> phone 2 </label>
						  <input type="text" name="phone_2" id="" class="form-control" placeholder="" aria-describedby="helpId">
						  <small id="helpId" class="text-muted">10 chữ số</small>
					  </div>
				
						<div class="form-group">
							<label for="phone_emergency">phone emergency </label>
							<input type="text" name="phone_emergency" id="" class="form-control" placeholder="" aria-describedby="helpId">
							<small id="helpId" class="text-muted"></small>
						</div>
				
						<div class="form-group">
							<label for="dob">dob</label>
							<input type="date" name="dob" id="" class="form-control" placeholder="" aria-describedby="helpId">
							<small id="helpId" class="text-muted">mm/dd/yyyy</small>
						</div>
				
	
					</div>
					<div class="col-md-2">

					</div>
					<div class="col-md-4 ">
						<div class="form-group">
							<label for="national_id">national id</label>
							<input type="text" name="national_id" id="" class="form-control" placeholder="" aria-describedby="helpId">
							<small id="helpId" class="text-muted"></small>
						</div>

						<div class="form-group">
							<label for="national_id_image">national id image </label>
							<input type="file" name="national_id_image" id="" class="form-control" placeholder="" aria-describedby="helpId">
							<small id="helpId" class="text-muted"></small>
						  </div>
						  <div class="form-group">
							  <label for="driving_license">driving license</label>
							  <input type="text" name="driving_license" id="" class="form-control" placeholder="" aria-describedby="helpId">
							  <small id="helpId" class="text-muted"></small>
						  </div>
				  
						  <div class="form-group">
							  <label for="driving_license_image">driving license image</label>
							  <input type="file" name="driving_license_image" id="" class="form-control" placeholder="" aria-describedby="helpId">
							  <small id="helpId" class="text-muted"></small>
						  </div>
		
						  <div class="form-group">
							<label for="address"> address </label>
							<input type="text" name="address" id="" class="form-control" placeholder="" aria-describedby="helpId">
							<small id="helpId" class="text-muted"></small>
						</div>
				  
						  <div class="form-group">
							  <label for="relationship">Relationship </label>
							  <input type="text" name="relationship" id="" class="form-control" placeholder="" aria-describedby="helpId">
							  <small id="helpId" class="text-muted"></small>
						  </div>
				  
						  <div class="form-group">
							  <label for="banks">bank</label>
							  <input type="text" name="banks" id="" class="form-control" placeholder="" aria-describedby="helpId">
							  <small id="helpId" class="text-muted"></small>
						  </div>
	  
						  <div class="form-group">
							  <label for="bio">bio</label>
							  <input type="text" name="bio" id="" class="form-control" placeholder="" aria-describedby="helpId">
							  <small id="helpId" class="text-muted"></small>
						  </div>
	  
						  <div class="form-group">
							  <label for="status">status</label>
							  <input type="text" name="status" id="" class="form-control" placeholder="" aria-describedby="helpId">
							  <small id="helpId" class="text-muted"></small>
						  </div>
	  
						  <div class="form-group">
							  <label for="my-select">Team</label>
							  <select id="my-select" class="form-control" name="team_id">
	  
								  @foreach ($teams as $item)
							  <option value="{{$item->id}}"> {{$item->name}} </option>
								  @endforeach
								  
							  </select>
						  </div>
					</div>
				  </div>
				</div>
				<!-- /.card-body -->
  
				<div class="card-footer" style="margin-left:500px">
				  <button type="submit" class="btn btn-primary">Create</button>
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
