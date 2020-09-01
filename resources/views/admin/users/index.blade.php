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
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="row">
                    <div class="col-md-4">
                      {{-- <h3 class="card-title"><a href="{{route('admin.users.create')}}"><button class="btn btn-primary">Create UserInfo</button></a></h3> --}}


                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Create UserInfo </button>

                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form role="form" action="{{route('admin.users.store')}}" method="POST" enctype="multipart/form-data" >
                                @csrf
                                <div  class="card-body">
                                  <div class="col-md-6">
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

                                  <div class="col-md-6">
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
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                              </form>
                            </div>
                            
                          </div>
                        </div>
                      </div>




                    </div>
                    <div class="col-md-4">
                      
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="my-select">Search Team</label>
                        <select id="my-select" class="form-control" name="team_id" onchange="return location.href=this.value;">
            
                          @foreach ($teams as $item)
                          <option value="{{ route(ADMIN.".users.index", ["team_id" => $item->id]) }}" @if(request("team_id",0) == $item->id) selected @endif> {{$item->name}} </option>
                          @endforeach
                          
                        </select>
                      </div>              
                    </div>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered table-striped table-responsive">
                    <thead class="thead-dark">
                      <tr>
                          <th>STT</th>
                          <th>Avatar</th>
                          <th>Name</th>
                          <th>Emal</th>
                          {{-- <th>Password</th> --}}

                          <th>Phone</th>
                          {{-- <th>Phone 2</th>
                          <th>Phone emergency</th> --}}
                          <th>Dob</th>
                          {{-- <th>National ID</th> --}}
                          <th>National ID Image</th>
                          {{-- <th>Driving license</th> --}}
                          <th>Driving license image</th>
                          <th>Address</th>
                          <th>Relationship</th>
                          <th>Banks</th>
                          {{-- <th>Role</th> --}}
                          {{-- <th>Bio</th> --}}
                          <th>Status</th>
                          <th>Team </th>
                          <th>action</th>
                      </tr>
                    </thead>
                    @foreach ($items as $item)
                    <tbody>
                      <tr>
                          <td>{{$item->id}}</td>
                          <td><img src="{{$item->avatar}}" alt=""></td>
                          <td>{{$item->name}}</td>
                          <td>{{$item->email}}</td>
                          {{-- <td>{{$item->password}}</td> --}}

                          <td>
                            {{$item->phone}}
                            {{$item->phone_2}}
                            {{$item->phone_emergency}}
                          </td>
                          <td>{{$item->dob}}</td>
                          {{-- <td>{{$item->national_id}}</td> --}}
                          <td><img src="{{$item->national_id_image}}" alt=""></td>
                          {{-- <td>{{$item->driving_license}}</td> --}}
                          <td><img src="{{$item->driving_license_image}}" alt=""></td>
                          <td>{{$item->address}}</td>
                          <td>{{$item->relationship}}</td>
                          <td>{{$item->banks}}</td>
                          {{-- <td>{{$item->role}}</td> --}}
                          {{-- <td>{{$item->bio}}</td> --}}
                          <td>{{$item->status}}</td>

                          {{-- ?là viết tắt của if else --}}
                          <td>{{$item->team?$item->team->name:""}}</td> 
                          <td>
                              <a href="{{route('admin.users.edit',['user' => $item->id])}}" class="btn btn-primary"><i class="fa fa-edit " aria-hidden="true"></i></a>
                              
                              <form action="{{route('admin.users.destroy',['user' => $item->id])}}" method="post">
                                @csrf
                                <input type="hidden"  name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden ="true"></i></button>
                              </form>
                          </td>
                      </tr>
                    </tbody>
                    @endforeach
                  </table>
                  {{$items->links()}}
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