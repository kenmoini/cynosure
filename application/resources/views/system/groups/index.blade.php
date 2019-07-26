@extends('templates.master')

@section('title', 'Cynosure Groups - Listing')
@section('active_nav', 'cynosure_config')

@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content" id="content-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">Groups - Listing
                            <a class="btn btn-primary pull-right" href="{{ route('admin.groups.create') }}"><i class="fa fa-plus"></i> Add Group</a>
                        </h5>
                        <p class="category">Cynosure System Groups</p>
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
                                        <td>Organizations</td>
                                        <td colspan = 2>Actions</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($groups as $group)
                                        <tr>
                                            <td>{{ $group->id}}</td>
                                            <td><strong>{{ $group->name }}</strong></td>
                                            <td>{{ $group->slug }}</td>
                                            <td>{{ $group->description }}</td>
                                            <td>{{ $group->organizations()->count() }}</td>
                                            <td>
                                                <a href="{{ route('admin.groups.edit',$group->id)}}" class="btn btn-primary">Edit</a>
                                            </td>
                                            <td>
                                                <form action="{{ route('admin.groups.destroy', $group->id)}}" method="post">
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