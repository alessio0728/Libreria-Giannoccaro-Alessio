<x-layout>

  <center><h1>ELENCO LIBRI DISPONIBILI</h1></center>

  <div style="max-height: 800px; overflow-y: auto;">

      <div class="row card-deck" >

          @foreach ($books as $book)
              <div class="col-md-4 mb-3">

                <div class="card ml-2" style="background-color: #{{ dechex(mt_rand(0, 0xFFFFFF)) }};">
                    
                      <img src="{{$book->image}}" class="card-img-top" alt="..." style="max-height: 600px; " >
                      <div class="card-body" style="max-height: 300px; overflow-y: scroll;">
                          <h5 class="card-title">{{$book->title}}</h5>
                          <p class="card-text">Autore:{{$book->author}}</p>
                          <p class="card-text" style="max-height: 300px; overflow-y: auto;">{{$book->description}}</p>
                          <p class="card-text">GENERE:{{$book->genre}} </p>
                          <p class="card-text">PREZZO:{{$book->price}} €</p>
                          <a href="#" class="btn btn-primary">ACQUISTA</a>
                      </div>
                  </div>
              </div>
          @endforeach
      </div>

  </div>

  

</x-layout>
