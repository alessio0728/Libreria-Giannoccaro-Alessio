<nav class="navbar">
    <ul class="nav-list">
      <li class="homeD"><a href="#">Home</a></li>
      <li><a href="#">Libri</a></li>
      <li><a href="#">Recensioni</a></li>
      <li><a href="#">Parla con noi</a></li>

      @guest

      <li><a href="/register">Registrati</a></li>
      <li><a href="/login">Login</a></li>
          
      @endguest

      @auth

      <li class="authL"><a href="#">Benvenuto {{auth()->user()->name}}</a>
      <form class="logout" action="/logout" method="post">
        @csrf

        <button type="submit">Logout</button>
    
      </form>
    </li>
    
          
      @endauth
      

        </div>
      </li>
    </ul>
  </nav>


