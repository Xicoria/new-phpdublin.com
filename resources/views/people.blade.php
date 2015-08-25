@extends('layouts.default')

@section('title', 'PHP People in Dublin')

@section('content')

    <div class="row">
        <div class="col-sm-3 left-side">
            <div class="well">
                <h1>People</h1>
                <ul class="nav nav-pills nav-stacked">
                    <li role="presentation" class="active"><a href="#">All The People</a></li>
                    <li role="presentation"><a href="#">Add Yourself</a></li>
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
