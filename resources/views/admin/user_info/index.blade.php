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
            <h1> Infomation Member</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
      <br>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
        <div class="row mb-2">
          <div class="col-sm-6">
            <div class="" style="width:400px;"> 
              <img class="card-img-top rounded-circle"vwidth="400" height="400" src="{{$userinfo->avatar}}" alt="Card image" style="width:100%">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="">
              <table class="table table-hover table-striped table-responsive" >
                  <tr>
                    <th>name</th>
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
                    <td><div>{{$userinfo->phone}}</div>
                        <div>{{$userinfo->phone_2}}</div>
                        <div>{{$userinfo->phone_emergency}}</div>
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

                <a href="{{route('admin.users.edit',['user' => $userinfo->id])}}" class="btn btn-primary"><i class="fa fa-edit " aria-hidden="true"> Update infomation</i></a>
              </div> 
             
            </div>

          </div>

        </div>
        <!-- /.row -->
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection