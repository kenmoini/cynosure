@extends('templates.master')

@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">Roles - Edit</h5>
                        <p class="category">Modify Cynosure System Roles</p>
                    </div>
                    <div class="card-body">

                    <div class="row">
                        <div class="col-sm-8 offset-sm-2">

                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <br /> 
                            @endif
                            <form method="post" action="{{ route('admin.roles.update', $role->id) }}">
                                @method('PATCH') 
                                @csrf
                                <div class="form-group">

                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" name="name" value="{{ $role->name }}" />
                                </div>
                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <input type="text" class="form-control" name="description" value="{{ $role->description }}" />
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection