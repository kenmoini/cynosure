@extends('templates.master')

@section('title', 'Cynosure Groups - Create')
@section('active_nav', 'cynosure_config')

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content" id="content-body">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Groups - Create a group</h5>
                    <p class="category">Create a new Cynosure System Group</p>
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
                            <form method="post" action="{{ route('admin.groups.store') }}">
                                @csrf
                                <div class="form-group">    
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" name="name"/>
                                </div>

                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <input type="text" class="form-control" name="description"/>
                                </div>

                                <div class="form-group">
                                    <label for="organizations">Associated Organization(s):</label>
                                    @if (count($organizations))
                                    <select class="form-control select2-multiple-select" name="organizations[]" multiple="multiple">
                                        @foreach($organizations as $organization)
                                            <option value="{{ $organization->id }}">{{ $organization->name }}</option>
                                        @endforeach
                                    </select>
                                    @else
                                    <p>
                                        <strong>There are no Organizations.  <a href="{{ route('admin.organizations.create') }}">Create an Organization</a>.</strong>
                                    </p>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-primary-outline">Add group</button>
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