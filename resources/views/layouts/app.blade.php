<header>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link
            rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>



</header>

<a href="{{ url('/') }}">
    Movibe
</a>
<nav>
    <ul>
        @guest

        @else
            <li> Bonjour {{ Auth::user()->name }}</li>
            @if (Auth::user())
                <li><a href="#">Des liens spécifiques pour utilisateurs connectés..</a></li>
                <li></li>
            @endif
            <li><a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Se déconnecter
                </a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        @endguest
        <li><a href="{{route('series.index')}}">Liste</a></li>
    </ul>
</nav>
<div id="main">
    @yield('content')
</div>
</head>