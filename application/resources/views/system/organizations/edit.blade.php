@extends('templates.master')

@section('title', 'Cynosure Organizations - Editing "' . $organization->name . '"')
@section('active_nav', 'cynosure_config')

@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content" id="content-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">Organizations - Edit</h5>
                        <p class="category">Modify Cynosure System Organization</p>
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
                            <form method="post" action="{{ route('admin.organizations.update', $organization->id) }}">
                                @method('PATCH') 
                                @csrf
                                <div class="form-group">

                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" name="name" value="{{ $organization->name }}" />
                                </div>
                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <input type="text" class="form-control" name="description" value="{{ $organization->description }}" />
                                </div>
                                <div class="form-group">
                                    <label for="domain">Domain:</label>
                                    <input type="text" class="form-control" name="domain" value="{{ $organization->domain }}" />
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