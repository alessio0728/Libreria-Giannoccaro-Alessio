<nav class="navbar">

    @guest
        <ul class="nav-list">
            <li class="homeD"><a href="#">Home</a></li>
            <li><a href="#">Libri</a></li>
            <li><a href="#">Recensioni</a></li>
            <li><a href="/register">Registrati</a></li>
            <li class="homeDG"><a href="/login">Login</a></li>
        </ul>
    @endguest

    @auth

        <ul class="nav-list">
            <li class="homeDA"><a href="#">Home</a></li>
            <li><a href="#">Libri</a></li>
            <li><a href="#">Recensioni</a></li>
            <li class="authL"><a href="#">Benvenuto {{ auth()->user()->name }}</a>
                <form class="logout" action="/logout" method="post">
                    @csrf

                    <button type="submit">Logout</button>

                </form>

            </li>
        </ul>


    @endauth


    </div>
    </li>



</nav>
