@extends('layouts.default')

@section('title', 'Meetups')

@section('content')

    <div class="row">
        <div class="col-sm-3 left-side">
            <div class="well">
                <h1>Meetups</h1>
                <ul class="nav nav-pills nav-stacked">
                    <li role="presentation" class="active"><a href="#">Next Event</a></li>
                    <li role="presentation"><a href="#">Past Events</a></li>
                    <li role="presentation"><a href="#">Resources</a></li>
                    <li role="presentation"><a href="#">Code of Conduct</a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-9 main-content">
            <h2>Next Meetup</h2>
            <div class="row">
                <div class="col-md-6">
                    <p><strong>What?</strong> <a href="{{ $meetup->meetup_url }}">{{ $meetup->name }}</a></p>
                    <p><strong>When?</strong>  {{ $meetup->starts_on->format('l, jS \\of F Y @ h:i A')  }}</p>
                    <p><strong>Where?</strong>
                        <a href="{{ $meetup->location_url }}" target="_blank">{{ $meetup->location }}</a>
                    </p>
                    <iframe src="{{ $meetup->map_embed_url }}" width="600" height="450" frameborder="0" style="border:1px solid silver; max-width: 100%;" allowfullscreen></iframe>
                </div>
                <div class="col-md-6">
                    {!! $meetup->description !!}
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    @parent

@endsection
