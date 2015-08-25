@extends('layouts.default')

@section('title', 'Home')

@section('content')

    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-11">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Dublin's PHP Community</h1>
                    <p>Welcome to this thing etc.</p>
                    <br /><br /><br />
                </div>
                <div class="col-sm-6">
                    <div class="well">
                        <h2><a href="{{ url('meetups') }}">Meetups</a></h2>
                        <ul class="nav nav-pills nav-stacked">
                            @foreach($meetups as $row)
                                <li role="presentation"><a href="{{ url('meetups') }}"><strong>Next Meetup:</strong> {{ $row->name }}</a></li>
                            @endforeach
                            <li role="presentation"><a href="{{ url('meetups') }}">PHP Dublin &mdash; June 2015</a></li>
                            <li role="presentation"><a href="{{ url('meetups') }}">PHP Dublin &mdash; May 2015</a></li>
                            <li role="presentation"><a href="{{ url('meetups') }}">PHP Dublin &mdash; August 2015</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <hr />

            <div class="row">
                <div class="col-sm-4">
                    <h2><a href="{{ url('jobs') }}">Jobs</a></h2>
                    <p>Find a PHP job in Dublin.</p>
                    <ul class="nav nav-pills nav-stacked">
                        <li role="presentation"><a href="#"><strong>Amazing Company</strong>: Senior Developer: Dublin</a></li>
                        <li role="presentation"><a href="#"><strong>Funded Startup</strong>: Laravel Dev: Dublin</a></li>
                        <li role="presentation"><a href="#"><strong>Great Biz Co.</strong>: LAMP Engineer: Remote</a></li>
                    </ul>
                    <br /><br /><br />
                </div>
                <div class="col-sm-4 people avatar-links">
                    <h2><a href="{{ url('people') }}">People</a></h2>
                    @foreach($people as $row)
                        <a href="#" class="avatar-link" style="background-image: url('{{ $row->avatar }}')">
                            {{ $row->name }}
                        </a>
                    @endforeach
                </div>
                <div class="col-sm-4">
                    <h2><a href="{{ url('forum') }}">Forum</a></h2>
                    <p>Chat about PHP with the community.</p>
                    <ul class="nav nav-pills nav-stacked">
                        <li role="presentation"><a href="#"><strong>Help with Symfony</strong> (new)</a></li>
                        <li role="presentation"><a href="#"><strong>Meetup next week?</strong> (4)</a></li>
                        <li role="presentation"><a href="#"><strong>Elephant Laughs</strong> (2)</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    @parent

@endsection
