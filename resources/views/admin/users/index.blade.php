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
                  <h3 class="card-title"><a href="{{route('infouser.create')}}"><button class="btn btn-primary">Create InfoUser</button></a></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                          <th>STT</th>
                          <th>Full name</th>
                          <th>email</th>
                          <th>Number Phone</th>
                          <th>CMND</th>
                          <th>Date of Birth</th>
                          <th>Sex</th>
                          <th>Address</th>
                          <th>User ID</th>
                          <th>action</th>
                      </tr>
                    </thead>
                    @foreach ($listUser as $item)
                    <tbody>
                      <tr>
                          <td>{{$item->id}}</td>
                          <td>{{$item->username}}</td>
                          <td>{{$item->email}}</td>
                          <td>{{$item->numberphone}}</td>
                          <td>{{$item->cmnd}}</td>
                          <td>{{$item->dateofbirth}}</td>
                          <td>{{$item->sex}}</td>
                          <td>{{$item->address}}</td>
                          <td>{{$item->user_id}}</td>
                          <td>
                              <a href="{{route('infouser.edit',['infouser' => $item->id])}}" class="btn btn-primary"><i class="fa fa-edit " aria-hidden="true"></i></a>
                              
                              <form action="{{route('infouser.destroy',['infouser' => $item->id])}}" method="post">
                                @csrf
                                <input type="hidden"  name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden ="true"></i></button>
                              </form>
                          </td>
                      </tr>
                    </tbody>
                    @endforeach
                  </table>
                  {{$listUser->links()}}
                </div> 
                <!-- /.card-body -->

                {{-- <div class="card-footer clearfix">
                  <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                  </ul>
                </div> --}}
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