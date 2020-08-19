@extends('admin.default')
@section('page-header', "Team Manager")
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mT-10 mB-20">
                <div class="row">
                    <div class="col">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <button class="btn btn-info" type="button" data-toggle="modal" data-target="#new-team">
                                    New Team
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <div class="teams">
                    <table class="table table-hover table-striped">
                        <thead class="thead-dark">
                        <tr class="text-center">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Leader</th>
                            <th>Member</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($teams as $item)
                            <tr class="text-center">
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td></td>
                                <td></td>
                                <td>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            {{ Form::open(["url"=>route(ADMIN.'.teams.destroy', $item), "method"=>"DELETE"]) }}
                                            <button class="btn btn-sm btn-danger"
                                                    title="{{ trans('app.delete_title') }}">
                                                <i class="ti ti-close"></i>
                                            </button>
                                            {{ Form::close() }}
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{-- {{$teams->id->appends(request()->query())->links()}} --}}
                </div>

               

            </div>
        </div>
        <div id="new-team" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <!--Modal Content -->
                <div class="modal-content">
                    <form action="{{route("admin.teams.store",request()->query())}}" method="POST">
                        @csrf
                        <div class="modal-header">
                            <h4 class="modal-title">New Team</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Leader ID</label>
                                        <input type="number" min="0" class="form-control" name="leader_id">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-info cancel" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success update">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
@section('js')
@stop
