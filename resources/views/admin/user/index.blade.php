@extends('admin::curd.index')
@section('heading')
<i class="fa fa-file-text-o"></i> {!! trans('user::user.name') !!} <small> {!! trans('cms.manage') !!} {!! trans('user::user.names') !!}</small>
@stop

@section('title')
{!! trans('user::user.names') !!}
@stop

@section('breadcrumb')
<ol class="breadcrumb">
    <li><a href="http://www.lavalite.org/admin"><i class="fa fa-dashboard"></i> {!! trans('cms.home') !!} </a></li>
    <li class="active">{!! trans('user::user.names') !!}</li>
</ol>
@stop

@section('entry')
<div class="box box-warning" id='entry-user'>
</div>
@stop

@section('tools')
@stop

@section('content')
<table id="main-list" class="table table-striped table-bordered">
    <thead>
        <th>{!! trans('user::user.label.reporting_to')!!}</th>
                    <th>{!! trans('user::user.label.name')!!}</th>
                    <th>{!! trans('user::user.label.email')!!}</th>
                    <th>{!! trans('user::user.label.password')!!}</th>
                    <th>{!! trans('user::user.label.active')!!}</th>
                    <th>{!! trans('user::user.label.remember_token')!!}</th>
                    <th>{!! trans('user::user.label.sex')!!}</th>
                    <th>{!! trans('user::user.label.dob')!!}</th>
                    <th>{!! trans('user::user.label.designation')!!}</th>
                    <th>{!! trans('user::user.label.mobile')!!}</th>
                    <th>{!! trans('user::user.label.phone')!!}</th>
                    <th>{!! trans('user::user.label.address')!!}</th>
                    <th>{!! trans('user::user.label.street')!!}</th>
                    <th>{!! trans('user::user.label.city')!!}</th>
                    <th>{!! trans('user::user.label.district')!!}</th>
                    <th>{!! trans('user::user.label.state')!!}</th>
                    <th>{!! trans('user::user.label.country')!!}</th>
                    <th>{!! trans('user::user.label.photo')!!}</th>
                    <th>{!! trans('user::user.label.web')!!}</th>
                    <th>{!! trans('user::user.label.social_login')!!}</th>
    </thead>
</table>
@stop
@section('script')
<script type="text/javascript">

var oTable;
$(document).ready(function(){
    $('#entry-user').load('{!!URL::to('admin/user/user/0')!!}');
    oTable = $('#main-list').dataTable( {
        "ajax": '{!! URL::to('/admin/user/user') !!}',
        "columns": [
            {data :'reporting_to'},
                    {data :'name'},
                    {data :'email'},
                    {data :'password'},
                    {data :'active'},
                    {data :'remember_token'},
                    {data :'sex'},
                    {data :'dob'},
                    {data :'designation'},
                    {data :'mobile'},
                    {data :'phone'},
                    {data :'address'},
                    {data :'street'},
                    {data :'city'},
                    {data :'district'},
                    {data :'state'},
                    {data :'country'},
                    {data :'photo'},
                    {data :'web'},
                    {data :'social_login'},
        ],
        "userLength": 50
    });

    $('#main-list tbody').on( 'click', 'tr', function () {
        $(this).toggleClass("selected").siblings(".selected").removeClass("selected");

        var d = $('#main-list').DataTable().row( this ).data();

        $('#entry-user').load('{!!URL::to('admin/user/user')!!}' + '/' + d.id);

    });
});
</script>
@stop

@section('style')
@stop