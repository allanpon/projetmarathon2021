<link rel="stylesheet" href="{{asset('css/style-navbar.css')}}" type="text/css" />
<style>
</style>
<nav class="navbar" id="from-search">
    <a href='{{route('home')}}' class="imglink"> <img src="{{asset('img/logo.png')}}" class="logimg" alt=""></a>
    <div>
        <form id="form-search">

            <input type="text" class="search-box" name="recherche" placeholder="Rechercher (ne marche pas dans home)">

            <select class="categories" name="genre" id="genre-select" onchange="document.querySelector('#form-search').submit();">
                <option value="">--Selectionnez un genre--</option>
                <option value="Crime">Crime</option>
                <option value="Comedy">Comedy</option>
                <option value="Horror">Horror</option>
                <option value="Romance">Romance</option>
                <option value="Science-Fiction">S-F</option>
                <option value="Fantasy">Fantasy</option>
                <option value="Legal">Legal</option>
                <option value="Thriller">Thriller</option>
                <option value="History">History</option>
                <option value="Mystery">Mystery</option>
                <option value="Supernatural">Supernatural</option>
                <option value="Western">Western</option>
                <option value="Drama">Drama</option>
                <option value="Anime">Anime</option>
                <option value="Family">Family</option>
            </select>



        </form>
    </div>

    <div class="dropdown">
        @guest()
            <button onclick="myFunction()" class="dropbtn">Invité</button>
        @else
            <button onclick="myFunction()" class="dropbtn">{{Auth::user()->name}}</button>
        @endguest
        <div id="myDropdown" class="dropdown-content">
            @guest()
                <a href="{{ route('login')}}">Connexion</a>
                <a href="{{ route('register')}}">Inscription</a>
            @else
                <a href="{{route('user')}}">Profil</a>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();" >
                    Se déconnecter
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>

            @endguest
        </div>
    </div>
</nav>
<script>
    /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {

            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>
<div id="main">
    @yield('content')
</div>