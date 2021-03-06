<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <link rel="icon" type="image/png" href="/img/favicon.png">
        <link rel="apple-touch-icon" href="/img/apple-icon.png">

        <title>@yield('title', 'PHPDublin')</title>

        @section('styles')
            <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
        @show

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

    <nav class="navbar navbar-default navbar-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ url() }}">PHPDublin</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="{{ $page_id === 'home' ? 'active' : 'inactive' }}"><a href="{{ url() }}">Home</a></li>
            <li class="{{ $page_id === 'meetups' ? 'active' : 'inactive' }}"><a href="{{ url('meetups') }}">Meetups</a></li>
            <li class="{{ $page_id === 'jobs' ? 'active' : 'inactive' }}"><a href="{{ url('jobs') }}">Jobs</a></li>
            <li class="{{ $page_id === 'people' ? 'active' : 'inactive' }}"><a href="{{ url('people') }}">People</a></li>
            <li class="{{ $page_id === 'forum' ? 'active' : 'inactive' }}"><a href="{{ url('forum') }}">Forum</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right social-icons">
            <li class="github"><a href="https://github.com/phpdublin" title="Checkout our GitHub repos">Github</a></li>
            <li class="twitter"><a href="https://twitter.com/phpdublin" title="Follow us on Twitter"">Twitter</a></li>
          </ul>
        </div><!--/.nav-collapse -->
        @if($page_id !== 'home')
            <div class="byline">Dublin's PHP Community</div>
        @endif
      </div>
    </nav>

        <div class="container">
            @yield('content')
        </div>

        @include('common.flashmessages')

        @section('scripts')
            <script src="{{ elixir('js/app.js') }}"></script>
        @show

    </body>
</html>
