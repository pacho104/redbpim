@extends('template.main')
@section('title'){{ 'Red BPIM - ' . Auth::user()->user_login }} @endsection
@section('content')
    @include('template.partials.logbar_admin')

    @if(\Session::has('AlertUserUpdate'))
        <div class="alert alert-dismissible alert-success fontbig">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{Session::get('AlertUserUpdate')}}</strong>
        </div>
    @endif
    <div class="row-fluid">
        <div class="container" id="admin">
        {{Auth::user()->user_login}}
        </div>
    </div>
@stop
