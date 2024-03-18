<x-layout>

    <center>
        <h1 class="titolo">CREA IL TUO ARTICOLO</h1>
    </center>


    <div class="conteinerRegister" style="margin-top=50px">

        <div class="row">


            <form  method="post" action="{{route('books.store')}}" enctype="multipart/form-data">

                @csrf

                @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
                
                <div class="mb-3">

                <label class="formL" for="title">Titolo:</label><br>
                <input class="formI" type="text" id="title" name="title" required><br>
                
                @error('title')
                <span class="text-danger">{{$message}}</span>
                @enderror

              </div>

                <div class="mb-3">

                <label class="formL2" for="price">Prezzo:</label><br>
                <input class="formI" type="decimal" id="price" name="price" required><br>

                @error('price')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

           <div class="mb-3">
                <label class="formL2" for="description"> Descrizione:</label><br>
                <input class="formI" type="text" id="description" name="description"

                @error('description')
                <span class="text-danger">{{$message}}</span>
                @enderror

            </div>

            <div class="mb-3">
                <label class="formL2" for="image"> Immagine:</label><br>
                <input class="formI" type="file" id="image" name="image"

                @error('image')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

                <button style="margin-left: 185px; margin-top: 20px;" type="submit" class="btn btn-primary">SALVA IL TUO LIBRO</button>
            
            </form>

        </div>

    </div> 


</x-layout>