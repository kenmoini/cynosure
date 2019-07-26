@extends('templates.master')

@section('title', 'Cynosure Users - Listing')
@section('active_nav', 'cynosure_config')

@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content" id="content-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">Users - Listing
                            <a class="btn btn-primary pull-right" href="{{ route('admin.users.create') }}"><i class="fa fa-plus"></i> Add User</a>
                        </h5>
                        <p class="category">Cynosure System Users</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                @if(session()->get('success'))
                                <div class="alert alert-success">
                                    <strong>{{ session()->get('success') }}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @endif
                            </div>
                            <div class="col-sm-12">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                        <td>ID</td>
                                        <td>Name</td>
                                        <td>Email</td>
                                        <td>Groups</td>
                                        <td>Roles</td>
                                        <td colspan = 2>Actions</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td><strong>{{ $user->name }}</strong></td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->groups()->count() }}</td>
                                            <td>
                                                @if($user->roles()->count())
                                                @foreach ($user->roles()->get() as $user_role)
                                                <span class="badge badge-dark">{{ $user_role->name }}</span>
                                                @endforeach
                                                @else
                                                <span class="badge badge-dark">No roles</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.users.edit',$user->id)}}" class="btn btn-primary">Edit</a>
                                                <a href="{{ route('admin.users.show',$user->id)}}" class="btn btn-info">Show</a>
                                            </td>
                                            <td>
                                                @if(Auth::user()->id !== $user->id )
                                                <form action="{{ route('admin.users.destroy', $user->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                                </form>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            <div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection