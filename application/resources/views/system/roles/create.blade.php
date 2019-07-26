@extends('templates.master')

@section('title', 'Cynosure Roles - Create')
@section('active_nav', 'cynosure_config')

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content" id="content-body">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Roles - Create a role</h5>
                    <p class="category">Create a new Cynosure System Role</p>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-sm-8 offset-sm-2">
                        <div>
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div><br />
                            @endif
                            <form method="post" action="{{ route('admin.roles.store') }}">
                                @csrf
                                <div class="form-group">    
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" name="name"/>
                                </div>

                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <input type="text" class="form-control" name="description"/>
                                </div>                      
                                <button type="submit" class="btn btn-primary-outline">Add role</button>
                            </form>
                        </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection