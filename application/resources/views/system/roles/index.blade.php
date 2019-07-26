@extends('templates.master')

@section('title', 'Cynosure Roles - Listing')
@section('active_nav', 'cynosure_config')

@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content" id="content-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">Roles - Listing
                            <a class="btn btn-primary pull-right" href="{{ route('admin.roles.create') }}"><i class="fa fa-plus"></i> Add Role</a>
                        </h5>
                        <p class="category">Cynosure System Roles</p>
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
                                        <td>Slug</td>
                                        <td>Description</td>
                                        <td>Users</td>
                                        <td colspan = 2>Actions</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($roles as $role)
                                        <tr>
                                            <td>{{ $role->id}}</td>
                                            <td><strong>{{ $role->name }}</strong></td>
                                            <td>{{ $role->slug }}</td>
                                            <td>{{ $role->description }}</td>
                                            <td>{{ $role->users()->count() }}</td>
                                            <td>
                                                <a href="{{ route('admin.roles.edit',$role->id)}}" class="btn btn-primary">Edit</a>
                                            </td>
                                            <td>
                                                <form action="{{ route('admin.roles.destroy', $role->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                                </form>
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