@extends('templates.master')

@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">Organizations - Listing
                            <a class="btn btn-primary pull-right" href="{{ route('admin.organizations.create') }}"><i class="fa fa-plus"></i> Add Organization</a>
                        </h5>
                        <p class="category">Cynosure System Organizations</p>
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
                                        <td>Domain</td>
                                        <td colspan = 2>Actions</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($organizations as $organization)
                                        <tr>
                                            <td>{{ $organization->id}}</td>
                                            <td><strong>{{ $organization->name }}</strong></td>
                                            <td>{{ $organization->slug }}</td>
                                            <td>{{ $organization->description }}</td>
                                            <td>{{ $organization->domain }}</td>
                                            <td>
                                                <a href="{{ route('admin.organizations.edit',$organization->id)}}" class="btn btn-primary">Edit</a>
                                            </td>
                                            <td>
                                                <form action="{{ route('admin.organizations.destroy', $organization->id)}}" method="post">
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