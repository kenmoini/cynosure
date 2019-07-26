@extends('templates.master')

@section('title', 'Cynosure Groups - Editing "' . $group->name . '"')
@section('active_nav', 'cynosure_config')

@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content" id="content-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">Groups - Edit</h5>
                        <p class="category">Modify Cynosure System Group</p>
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
                            <form method="post" action="{{ route('admin.groups.update', $group->id) }}">
                                @method('PATCH') 
                                @csrf
                                <div class="form-group">

                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" name="name" value="{{ $group->name }}" />
                                </div>
                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <input type="text" class="form-control" name="description" value="{{ $group->description }}" />
                                </div>
                                <div class="form-group">
                                    <label for="organizations">Organizations: ({{ $group->organizations()->count() }} Active)</label>
                                    @if (count($organizations))
                                        @php
                                        $gorgMatches = [];
                                        if ($group->organizations()->count()) {
                                            foreach ($group->organizations as $gorg) {
                                                $gorgMatches[] = $gorg['id'];
                                            }
                                        }
                                        $orgArrayString = implode(',', $gorgMatches);
                                        $htmlString = ' data-val="[' . $orgArrayString . ']"';
                                        @endphp
                                        
                                        <select class="form-control select2-multiple-select" name="organizations[]" multiple="multiple" {!! $htmlString !!}>
                                            @foreach($organizations as $organization)
                                                @php
                                                    $selected = '';
                                                    if (in_array($organization->id, $gorgMatches)) {
                                                        $selected = ' selected="selected"';
                                                    }
                                                @endphp
                                                <option value="{{ $organization->id }}"{{{ $selected }}}>{{ $organization->name }}</option>
                                            @endforeach
                                        </select>
                                    @else
                                        <p>
                                            <strong>There are no Organizations.  <a href="{{ route('admin.organizations.create') }}">Create an Organization</a>.</strong>
                                        </p>
                                    @endif
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