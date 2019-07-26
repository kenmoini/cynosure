@extends('templates.master')

@section('title', 'Cynosure Settings - Editing System Configuration')
@section('active_nav', 'cynosure_config')

@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content" id="content-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">Cynosure Settings - Editing System Configuration</h5>
                        <p class="category">Modify Cynosure System Settings</p>
                    </div>
                    <div class="card-body">

                    <div class="row">
                        <div class="col-sm-12">

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
                            <form method="post" action="{{ route('admin.cynosure_settings.update', '0') }}">
                                @method('PATCH') 
                                @csrf
                                @php $c = true; @endphp
                                @foreach ($settings as $setting)

                                <div class="form-user{{ (($c = !$c)?' odd':'') }}">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <label for="{{ $setting->id }}">{{ $setting->name }}:</label>
                                        </div>
                                        <div class="col-sm-12-col-md-6">

                                        </div>
                                    </div>
                                </div>
                                @endforeach
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