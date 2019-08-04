@extends('templates.master')

@section('title', 'Cynosure Users - Editing "' . $usershow->name . '"')
@section('active_nav', 'cynosure_config')

@section('content')

    <div class="panel-header panel-header-sm">
    </div>
    <div class="content" id="content-body">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Actions & Assets</h5>
              </div>
              <div class="card-body">
                
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="/now-ui-dashboard-master/assets/img/bg5.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="/img/puppy.jpg" alt="...">
                    <h5 class="title">{{ $usershow->name }}</h5>
                  </a>
                  <p class="description">
                    A simple person, with a plan for dominance...
                  </p>
                  <p class="meta">
                      <strong>Email: </strong> {{ $usershow->email }}<br />
                  </p>
                  <p class="meta">
                      <strong>Groups: </strong>
                      @foreach ($usershow->groups as $group)
                        <span class="badge badge-primary m-1">{{ $group->name }}</span>
                      @endforeach
                  </p>
                  <p class="meta">
                      <strong>Roles: </strong>
                      @foreach ($usershow->roles as $role)
                        <span class="badge badge-secondary m-1">{{ $role->name }}</span>
                      @endforeach
                  </p>
                </div>
                <p class="description text-center">
                  "Lamborghini Mercy
                  <br> Your chick she so thirsty
                  <br> I'm in that two seat Lambo"
                </p>
              </div>
              <hr>
              <div class="button-container">
                <button href="#" class="btn btn-neutral btn-icon btn-round">
                  <i class="fa fa-envelope-open"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-github"></i>
                </button>
                <a href="{{ route('admin.users.edit', $usershow->id) }}" class="btn btn-neutral btn-icon btn-round">
                  <i class="fa fa-edit"></i>
                </a>
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