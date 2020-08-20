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
            <h1>List Infomation User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">List Infomation User</li>
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
                  
                  {{-- <h3 class="card-title"><a href="{{route('admin.user-infos.create')}}"><button class="btn btn-primary">Create UserInfo</button></a></h3> --}}
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                          <th>STT</th>
                          <th> Name</th>
                          <th>Email</th>
                          <th>Avatar</th>
                          <th>Phone</th>
                          <th>Phone 2</th>
                          <th>Phone emergency</th>
                          <th>Dob</th>
                          <th>National ID</th>
                          <th>National ID Image</th>
                          <th>Driving license</th>
                          <th>Driving license image</th>
                          <th>Address</th>
                          <th>Relationship</th>
                          <th>Banks</th>
                          <th>Role</th>
                          <th>Bio</th>
                          <th>Status</th>
                          <th>Team ID</th>
                          <th>action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <td>{{$userinfo->id}}</td>
                          <td>{{$userinfo->name}}</td>
                          <td>{{$userinfo->email}}</td>
                          <td>{{$userinfo->avatar}}</td>
                          <td>{{$userinfo->phone}}</td>
                          <td>{{$userinfo->phone_2}}</td>
                          <td>{{$userinfo->phone_emergency}}</td>
                          <td>{{$userinfo->dob}}</td>
                          <td>{{$userinfo->national_id}}</td>
                          <td>{{$userinfo->national_id_image}}</td>
                          <td>{{$userinfo->driving_license}}</td>
                          <td>{{$userinfo->driving_license_image}}</td>
                          <td>{{$userinfo->address}}</td>
                          <td>{{$userinfo->relationship}}</td>
                          <td>{{$userinfo->banks}}</td>
                          <td>{{$userinfo->role}}</td>
                          <td>{{$userinfo->bio}}</td>
                          <td>{{$userinfo->status}}</td>
                          <td>{{$userinfo->team_id}}</td>
                          <td>
                              <a href="{{route('admin.users.edit',['user' => $userinfo->id])}}" class="btn btn-primary"><i class="fa fa-edit " aria-hidden="true"></i></a>
                              
                          </td>
                      </tr>
                    </tbody>
                  </table>
                </div> 
                <!-- /.card-body -->
                <hr>
                <h1>update img</h1>
                
                <form action="{{route('file')}}" enctype="multipart/form-data" method="POST">
                  {{ csrf_field() }}
                  <input type="file" name="filesTest" required="true">
                  <br/>
                  <input type="submit" value="upload">
                </form> 

              </div>
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