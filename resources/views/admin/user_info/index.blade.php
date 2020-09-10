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
            <h1> Detail infomation user</h1>
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
          <div class="col-sm-5">
            <div class="" style="width:400px;">
              <img class="card-img-top rounded-circle" width="400" height="400" src="{{$userinfo->avatar}}" alt="Card image" style="width:100%">
            </div>

          </div>
          <div class="col-sm-7">
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
                    <th>Phone</th>
                    <td>
                      <div>{{$userinfo->phone}}</div>
                      <div>{{$userinfo->phone_2}}</div>
                      <div>{{$userinfo->phone_emergency}}</div>
                    </td>
                  </tr>
                  <tr>
                    <th>Dob</th>
                    <td>{{$userinfo->dob}}</td>
                  </tr>
                  <tr>
                    <th>National ID Image</th>
                    <td><img width="300" height="200" src="{{$userinfo->national_id_image}}" alt=""></td>
                  </tr>
                  <tr>
                    <th>Driving license image</th>
                    <td><img width="300" height="200" src="{{$userinfo->driving_license_image}}" alt=""></td>
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

                
                {{-- <a href="{{route('admin.users.edit',['user' => $userinfo->id])}}" class="btn btn-primary"><i class="fa fa-edit " aria-hidden="true"> Update infomation  </i></a> --}}
                <button type="button" class="btn btn-info editbtn" id="myBtn" data-toggle="modal" data-target="#myModal"> UPDATE INFOMATION</button>
              </div>
             
            </div>

          </div>

        </div>
        <!-- /.row -->
        
    <!-- /.container-fluid -->
    
      
      <!-- Modal EDIT-->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">New message</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form role="form" action="{{route('admin.users.update',['user'=>$userinfo->id])}}" method="POST" enctype="multipart/form-data" >
                @method('PUT')
                @csrf
                <div class="card-body">
                  @csrf
                  <div class="form-row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input value="{{$userinfo->name}}" type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">full name</small>
                      </div>

                      <div class="form-group">
                        <label for="email">email</label>
                        <input value="{{$userinfo->email}}" type="text" name="email" id="email" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted"></small>
                      </div>
                      
                      
                      <div class="form-group">
                        <label for="avatar">avatar</label>
                        <input type="file" name="avatar" id="avatar" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted"></small>
                      </div>
              
                      <div class="form-group">
                          <label for="phone"> phone</label>
                          <input value="{{$userinfo->phone}}" type="text" name="phone" id="phone" class="form-control" placeholder="" aria-describedby="helpId">
                          <small id="helpId" class="text-muted">10 số</small>
                      </div>

                      <div class="form-group">
                        <label for="phone_2"> phone_2 </label>
                        <input value="{{$userinfo->phone_2}}" type="text" name="phone_2" id="phone_2" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted"></small>
                    </div>
              
                      <div class="form-group">
                          <label for="phone_emergency">phone emergency </label>
                          <input value="{{$userinfo->phone_emergency}}" type="text" name="phone_emergency" id="phone_emergency" class="form-control" placeholder="" aria-describedby="helpId">
                          <small id="helpId" class="text-muted"></small>
                      </div>
              
                      <div class="form-group">
                          <label for="dob">dob</label>
                          <input value="{{$userinfo->dob}}" type="date" name="dob" id="dob" class="form-control" placeholder="" aria-describedby="helpId">
                          <small id="helpId" class="text-muted">mm/dd/yyyy</small>
                      </div>
                      <div class="form-group">
                        <label for="national_id">national id</label>
                        <input value="{{$userinfo->national_id}}" type="text" name="national_id" id="national_id" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted"></small>
                      </div>

                    </div>
                    <div class="col-md-6">

                      <div class="form-group">
                        <label for="national_id_image">national id image</label>
                        <input value="{{$userinfo->national_id_image}}" type="file" name="national_id_image" id="national_id_image" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted"></small>
                      </div>
                      <div class="form-group">
                        <label for="driving_license">driving license</label>
                        <input value="{{$userinfo->driving_license}}" type="text" name="driving_license" id="driving_license" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted"></small>
                      </div>
        
                      <div class="form-group">
                          <label for="driving_license_image">driving license image</label>
                          <input value="{{$userinfo->driving_license_image}}" type="file" name="driving_license_image" id="driving_license_image" class="form-control" placeholder="" aria-describedby="helpId">
                          <small id="helpId" class="text-muted"></small>
                      </div>
              
                      <div class="form-group">
                          <label for="address">address</label>
                          <input value="{{$userinfo->address}}" type="text" name="address" id="address" class="form-control" placeholder="" aria-describedby="helpId">
                          <small id="helpId" class="text-muted"></small>
                      </div>
      
                      <div class="form-group">
                        <label for="relationship">relationship</label>
                        <input value="{{$userinfo->relationship}}" type="text" name="relationship" id="relationship" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted"></small>
                    </div>
      
                      <div class="form-group">
                          <label for="banks">banks </label>
                          <input value="{{$userinfo->banks}}" type="text" name="banks" id="banks" class="form-control" placeholder="" aria-describedby="helpId">
                          <small id="helpId" class="text-muted"></small>
                      </div>
              
                      <div class="form-group">
                          <label for="bio">bio</label>
                          <input value="{{$userinfo->bio}}" type="text" name="bio" id="bio" class="form-control" placeholder="" aria-describedby="helpId">
                          <small id="helpId" class="text-muted"></small>
                      </div>
      
                      <div class="form-group">
                        <label for="status">status</label>
                        <input value="{{$userinfo->status}}" type="text" name="status" id="status" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted"></small>
                      </div>
                      
                    </div>
                  </div>
                <!-- /.card-body -->
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">UPDATE</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
              </form>
            </div>
            
          </div>
          
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <script>
    // $(document).ready(function(){
    //   $('.editbtn').on('click', function(){
    //     $('#editModal').modal('show');
    //   });
    // });
  </script>


@endsection

  