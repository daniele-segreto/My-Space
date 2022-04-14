<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand text-primary" href="#"><b>MySpace.ME</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">

                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>

                @auth
                    <a class="nav-link" aria-current="page" href="{{ route('myspace') }}">MySpace</a>
                @endauth

                <a class="nav-link" href="{{ route('contact') }}">Contact</a>

                {{-- Dropdown --}}
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{Auth::user()->name}}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#" onclick="event.preventDefault()
                                document.getElementById('logout').submit()">Logout</a></li>
                            <form method="POST" action="{{route('logout')}}" id="logout">
                                @csrf
                            </form>
                        </ul>
                    </li>
                @endauth

                @guest
                    <a class="nav-link" aria-current="page" href="{{ route('login') }}">Login</a>
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                @endguest

            </div>
        </div>
    </div>
</nav>