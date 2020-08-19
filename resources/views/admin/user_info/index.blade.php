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
                  {{-- <h3 class="card-title"><a href="#"><button class="btn btn-primary">thêm nhân viên</button></a></h3> --}}
                  <h3 class="card-title"><a href="{{route('admin.user-infos.create')}}"><button class="btn btn-primary">Create UserInfo</button></a></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                          <th>STT</th>
                          <th>User name</th>
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
                          <th>User ID</th>
                          <th>action</th>
                      </tr>
                    </thead>
                    @foreach ($listUser_info as $item)
                    <tbody>
                      <tr>
                          <td>{{$item->id}}</td>
                          <td>{{$item->username}}</td>
                          <td>{{$item->avatar}}</td>
                          <td>{{$item->phone}}</td>
                          <td>{{$item->phone_2}}</td>
                          <td>{{$item->phone_emergency}}</td>
                          <td>{{$item->dob}}</td>
                          <td>{{$item->national_id}}</td>
                          <td>{{$item->national_id_image}}</td>
                          <td>{{$item->driving_license}}</td>
                          <td>{{$item->driving_license_image}}</td>
                          <td>{{$item->address}}</td>
                          <td>{{$item->relationship}}</td>
                          <td>{{$item->banks}}</td>
                          <td>{{$item->role}}</td>
                          <td>{{$item->bio}}</td>
                          <td>{{$item->status}}</td>
                          <td>{{$item->user_id}}</td>
                          <td>{{$item->team_id}}</td>
                          <td>
                              <a href="{{route('admin.user-infos.edit',['user-info' => $item->id])}}" class="btn btn-primary"><i class="fa fa-edit " aria-hidden="true"></i></a>
                              
                              <form action="{{route('admin.user-infos.destroy',['user-info' => $item->id])}}" method="post">
                                @csrf
                                <input type="hidden"  name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden ="true"></i></button>
                              </form>
                          </td>
                      </tr>
                    </tbody>
                    @endforeach
                  </table>
                  {{$listUser_info->links()}}
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