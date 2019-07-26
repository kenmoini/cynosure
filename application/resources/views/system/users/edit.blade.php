@extends('templates.master')

@section('title', 'Cynosure Users - Editing "' . $useredit->name . '"')
@section('active_nav', 'cynosure_config')

@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content" id="content-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">Users - Edit</h5>
                        <p class="category">Modify Cynosure System User</p>
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
                            <form method="post" action="{{ route('admin.users.update', $useredit->id) }}">
                                @method('PATCH') 
                                @csrf
                                <div class="form-user">

                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" name="name" value="{{ $useredit->name }}" />
                                </div>
                                <div class="form-user">
                                    <label for="email">Email Address:</label>
                                    <input type="email" class="form-control" name="email" value="{{ $useredit->email }}" />
                                </div>
                                <div class="form-user">
                                    <label for="groups">Groups: ({{ $useredit->groups()->count() }} Active)</label>
                                    @if (count($groups))
                                        @php
                                        $groupMatches = [];
                                        if ($useredit->groups()->count()) {
                                            foreach ($useredit->groups as $group) {
                                                $groupMatches[] = $group['id'];
                                            }
                                        }
                                        $groupArrayString = implode(',', $groupMatches);
                                        $htmlString = ' data-val="[' . $groupArrayString . ']"';
                                        @endphp
                                        
                                        <select class="form-control select2-multiple-select" name="groups[]" multiple="multiple" {!! $htmlString !!}>
                                            @foreach($groups as $group)
                                                @php
                                                    $selected = '';
                                                    if (in_array($group->id, $groupMatches)) {
                                                        $selected = ' selected="selected"';
                                                    }
                                                @endphp
                                                <option value="{{ $group->id }}"{{{ $selected }}}>{{ $group->name }}</option>
                                            @endforeach
                                        </select>
                                    @else
                                        <p>
                                            <strong>There are no Groups.  <a href="{{ route('admin.groups.create') }}">Create an Group</a>.</strong>
                                        </p>
                                    @endif
                                </div>
                                <div class="form-user">
                                    <label for="groups">Roles: ({{ $useredit->roles()->count() }} Active)</label>
                                    @php
                                    $roleMatches = [];
                                    if ($useredit->roles()->count()) {
                                        foreach ($useredit->roles as $role) {
                                            $roleMatches[] = $role['id'];
                                        }
                                    }
                                    $roleArrayString = implode(',', $roleMatches);
                                    $htmlString = ' data-val="[' . $roleArrayString . ']"';
                                    @endphp
                                    
                                    <select class="form-control select2-multiple-select" name="roles[]" multiple="multiple" {!! $htmlString !!}>
                                        @foreach($roles as $role)
                                            @php
                                                $selected = '';
                                                if (in_array($role->id, $roleMatches)) {
                                                    $selected = ' selected="selected"';
                                                }
                                            @endphp
                                            <option value="{{ $role->id }}"{{{ $selected }}}>{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-user">
                                    <label for="groups">Password functions</label>
                                    <p><em>WIP: Idea is: admins can send reset links, only auth'd user can change their own passwords.</em></p>
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

@section('header-css')
<link href="/vendor/select2-4.0.8/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('footer-js')

<script type="text/javascript" src="/vendor/select2-4.0.8/dist/js/select2.min.js"></script>
<script type="text/javascript">
<!--
    jQuery(document).ready(function() {
        jQuery('.select2-multiple-select').each(function(e, obj) {
            jQuery(this).val(jQuery(this).data('val'));
            jQuery(this).select2();
        });
    });
//-->
</script>
@endsection