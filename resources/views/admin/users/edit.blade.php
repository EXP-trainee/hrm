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
            <h1>Update Infomation User Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Infomation User Form</li>
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
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form update infomation</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('admin.users.update',['user'=>$item->id])}}" enctype="multipart/form-data >
                @method('PUT')
                <div class="card-body">
                  @csrf
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input value="{{$item->name}}" type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted"></small>
                  </div>

                  <div class="form-group">
                    <label for="email">email</label>
                    <input value="{{$item->email}}" type="text" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted"></small>
                  </div>
                  {{-- <div class="form-group">
                    <label for="password">password</label>
                    <input value="{{$item->password}}" type="text" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted"></small>
                  </div>
        
                  <div class="form-group">
                    <label for="password_confirmation">password_confirmation</label>
                    <input type="text" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted"></small>
                  </div> --}}
                  
                  <div class="form-group">
                    <label for="avatar">avatar</label>
                    <input type="file" name="avatar" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted"></small>
                  </div>
          
                  <div class="form-group">
                      <label for="phone"> phone</label>
                      <input value="{{$item->phone}}" type="text" name="phone" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">10 số</small>
                  </div>

                  <div class="form-group">
                    <label for="phone_2"> phone_2 </label>
                    <input value="{{$item->phone_2}}" type="text" name="phone_2" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted"></small>
                </div>
          
                  <div class="form-group">
                      <label for="phone_emergency">phone emergency </label>
                      <input value="{{$item->phone_emergency}}" type="text" name="phone_emergency" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted"></small>
                  </div>
          
                  <div class="form-group">
                      <label for="dob">dob</label>
                      <input value="{{$item->dob}}" type="dob" name="sex" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">yyyy/mm/dd</small>
                  </div>
          
                  <div class="form-group">
                      <label for="national_id">national id</label>
                      <input value="{{$item->national_id}}" type="text" name="national_id" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted"></small>
                  </div>
                  <div class="form-group">
                    <label for="national_id_image">national id image</label>
                    <input value="{{$item->national_id_image}}" type="text" name="national_id_image" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted"></small>
                </div>
                <div class="form-group">
                  <label for="driving_license">driving license</label>
                  <input value="{{$item->driving_license}}" type="text" name="driving_license" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  <small id="helpId" class="text-muted"></small>
                </div>
      
                <div class="form-group">
                    <label for="driving_license_image">driving license image</label>
                    <input value="{{$item->driving_license_image}}" type="text" name="driving_license_image" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted"></small>
                </div>
        
                <div class="form-group">
                    <label for="address">address</label>
                    <input value="{{$item->address}}" type="text" name="address" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted"></small>
                </div>

                <div class="form-group">
                  <label for="relationship">relationship</label>
                  <input value="{{$item->relationship}}" type="text" name="relationship" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  <small id="helpId" class="text-muted"></small>
              </div>
        
                <div class="form-group">
                    <label for="banks">banks </label>
                    <input value="{{$item->banks}}" type="text" name="banks" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted"></small>
                </div>
        
                <div class="form-group">
                    <label for="bio">bio</label>
                    <input value="{{$item->bio}}" type="text" name="bio" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted"></small>
                </div>

                <div class="form-group">
                  <label for="status">status</label>
                  <input value="{{$item->status}}" type="text" name="status" id="" class="form-control" placeholder="" aria-describedby="helpId">
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
