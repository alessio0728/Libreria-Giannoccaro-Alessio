<x-layout>

    <center><h1>ELENCO LIBRI DISPONIBILI</h1></center>

    @foreach ($books as $book )

    <div class="card" style="width: 18rem;">
        <img src="https://m.media-amazon.com/images/I/719CeDchSsL._AC_UF1000,1000_QL80_.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$book->title}}</h5>
          <p class="card-text">Autore:{{$book->author}}</p>
          <p class="card-text">{{$book->description}}</p>
          <p class="card-text">{{$book->price}} €</p>
          <a href="#" class="btn btn-primary">ACQUISTA</a>
        </div>
      </div>


        
    @endforeach






</x-layout>