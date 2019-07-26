@extends('templates.master')

@section('title', 'Cynosure Users - Create')
@section('active_nav', 'cynosure_config')

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content" id="content-body">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Users - Create a user</h5>
                    <p class="category">Create a new Cynosure System User</p>
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
                            <form method="post" action="{{ route('admin.users.store') }}">
                                @csrf
                                <div class="form-user">    
                                    <label for="name">Name:</label>
                                    <input type="text" id="name" class="form-control" name="name" required="required" autocomplete="fsckingautocomplete" />
                                </div>

                                <div class="form-user">
                                    <label for="email">Email Address:</label>
                                    <input type="email" id="email" class="form-control" name="email" required="required" autocomplete="fsckingautocomplete" />
                                </div>

                                <div class="form-user"><hr /></div>

                                <div class="form-user">
                                    <label for="password">Password:</label>
                                    <input type="password" id="password" class="form-control" name="password" required="required" autocomplete="new-password" />
                                </div>

                                <div class="form-user">
                                    <label for="password-confirm">Password Confirmation:</label>
                                    <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required="required" autocomplete="new-password" />
                                </div>

                                <div class="form-user"><hr /></div>

                                <div class="form-user">
                                    <label for="groups">Group(s):</label>
                                    @if (count($groups))
                                        <select class="form-control select2-multiple-select" id="groups" name="groups[]" multiple="multiple">
                                            @foreach ($groups as $group)
                                                <option value="{{ $group->id }}">{{ $group->name }}</option>
                                            @endforeach
                                        </select>
                                    @else
                                    <p>
                                        <strong>There are no groups.  <a href="{{ route('admin.groups.create') }}">Create a Group</a>.</strong>
                                    </p>
                                    @endif
                                </div>

                                <div class="form-user">
                                    <label for="roles">Associated Role(s):</label>
                                    <select class="form-control select2-multiple-select" id="roles" name="roles[]" multiple="multiple">
                                        @foreach($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                    (System Default, unless specified: {{ $defaultRoleSlug = \App\CynosureSetting::where('key', 'global.registration_default_role')->first()->value }})
                                </div>
                                <button type="submit" class="btn btn-primary-outline">Add user</button>
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

@section('header-css')
<link href="/vendor/select2-4.0.8/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('footer-js')

<script type="text/javascript" src="/vendor/select2-4.0.8/dist/js/select2.min.js"></script>
<script type="text/javascript">
<!--
    jQuery(document).ready(function() {
        jQuery('.select2-multiple-select').select2();
    });
//-->
</script>
@endsection