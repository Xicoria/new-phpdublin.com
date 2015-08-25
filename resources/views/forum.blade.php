@extends('layouts.default')

@section('title', 'PHP Discussions in Dublin')

@section('content')

    <div class="row">
        <div class="col-sm-3 left-side">
            <div class="well">
                <h1>Forum</h1>
                <ul class="nav nav-pills nav-stacked">
                    <li role="presentation" class="active"><a href="#">Latest Posts</a></li>
                    <li role="presentation"><a href="#">Some Topic</a></li>
                    <li role="presentation"><a href="#">Another Topic</a></li>
                    <li role="presentation"><a href="#">New Post</a></li>
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
