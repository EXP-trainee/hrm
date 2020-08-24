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
          <div class="col-md-sm-7">
            <div class="card">
              <div class="card-header">
                <a href="{{route('admin.users.edit',['user' => $userinfo->id])}}" class="btn btn-primary"><i class="fa fa-edit " aria-hidden="true"> Update infomation</i></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table-responsive" >
                    <tr>
                      <th>STT</th>
                      <td>{{$userinfo->id}}</td>
                    </tr>
                    <tr>
                      <th> Name</th>
                      <td>{{$userinfo->name}}</td>
                    </tr>
                    <tr>
                      <th>Email</th>
                      <td>{{$userinfo->email}}</td>
                    </tr>
                    <tr>
                      <th>Avatar</th>
                      <td>{{$userinfo->avatar}}</td>
                    </tr>
                    <tr>
                      <th>Phone</th>
                      <td>{{$userinfo->phone}}
                          {{$userinfo->phone_2}}
                          {{$userinfo->phone_emergency}}
                      </td>
                    </tr>
                    <tr>
                      <th>Dob</th>
                      <td>{{$userinfo->dob}}</td>
                    </tr>
                    <tr>
                      <th>National ID</th>
                      <td>{{$userinfo->national_id}}</td>
                    </tr>
                    <tr>
                      <th>Driving license image</th>
                      <td>{{$userinfo->driving_license_image}}</td>
                    </tr>
                    <tr>
                      <th>Address</th>
                      <td>{{$userinfo->address}}</td>
                    </tr>
                    <tr>
                      <th>Relationship</th>
                      <td>{{$userinfo->relationship}}</td>
                    </tr>
                    <tr>
                      <th>Banks</th>
                      <td>{{$userinfo->banks}}</td>
                    </tr>
                    <tr>
                      <th>Bio</th>
                      <td>{{$userinfo->bio}}</td>
                    </tr>
                    <tr>
                      <th>Status</th>
                      <td>{{$userinfo->status}}</td>
                    </tr>
                    <tr>
                      <th>Team</th>
                      <td>{{$userinfo->team?$userinfo->team->name:""}}</td>
                    </tr>
                </table>
              </div> 
              <!-- /.card-body -->
            </div>
          </div>
        
          <!-- /.card -->
          <div class="col-md-sm-3" style="float: right; ">
            <div class="card"> 
                <h2>Card Image</h2>
                <p>Image at the top (card-img-top):</p>
                <div class="card" style="width:400px">
                  <img class="card-img-top" src="{{$userinfo->avatar}}" alt="Card image" style="width:100%">
                  <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                  </div>
                </div>
            </div>
          </div>
          <!-- /.card -->    
          </div>
        </div>
        <!-- /.row -->
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection