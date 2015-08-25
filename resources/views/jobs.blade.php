@extends('layouts.default')

@section('title', 'PHP Jobs in Dublin')

@section('content')

    <div class="row">
        <div class="col-sm-3 left-side">
            <div class="well">
                <h1>Jobs</h1>
                <ul class="nav nav-pills nav-stacked">
                    <li role="presentation" class="active"><a href="#">Full Time Jobs</a></li>
                    <li role="presentation"><a href="#">Part Time Jobs</a></li>
                    <li role="presentation"><a href="#">Contracts</a></li>
                    <li role="presentation"><a href="#">Post a Job</a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-9 main-content">
        </div>
    </div>

@endsection

@section('scripts')

    @parent

@endsection
