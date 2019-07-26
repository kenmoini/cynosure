@extends('templates.master')

@section('title', 'Cynosure Configuration')
@section('active_nav', 'cynosure_config')

@section('header-css')
<style type="text/css">
.minicard {
    text-align:center;
    padding:2rem;
    background:#FFF;
    box-shadow:0 0 10px -10px rgba(0,0,0,0);
    transition: all ease 0.25s;
    width:100%;
    display:inline-block;
    margin:0.5rem;
    color:#555;
}
.minicard:hover {
    box-shadow:0 0 13px -8px rgba(0,0,0,0.5);
    color:#f96332;
    text-decoration:none;
}
.minicard h3 {
    margin:0;
}
</style>
@endsection

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content" id="content-body">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Cynosure Configuration</h5>
                    <p class="category">Modify settings, add users, and more</p>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-sm-12 col-md-3">
                            <a href="{{ route('admin.cynosure_settings.index') }}" class="minicard">
                                <h3>
                                    <i class="fa fa-cog"></i><br />
                                    Cynosure Settings
                                </h3>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <a href="{{ route('admin.roles.index') }}" class="minicard">
                                <h3>
                                    <i class="fa fa-cog"></i><br />
                                    Roles
                                </h3>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <a href="{{ route('admin.users.index') }}" class="minicard">
                                <h3>
                                    <i class="fa fa-user"></i><br />
                                    Users
                                </h3>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <a href="{{ route('admin.organizations.index') }}" class="minicard">
                                <h3>
                                    <i class="fa fa-building"></i><br />
                                    Organizations
                                </h3>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <a href="{{ route('admin.groups.index') }}" class="minicard">
                                <h3>
                                    <i class="fa fa-folder"></i><br />
                                    Groups
                                </h3>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <a href="{{ route('admin.clusters.index') }}" class="minicard">
                                <h3>
                                    <i class="fa fa-cloud"></i><br />
                                    Clusters
                                </h3>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer-js')
@endsection