# INSTALAZZIONE

- 1 laravel new (installa laravel su code)

    verifica se funziona con
    
     php artisan serve (ti manda sulla pagina web del motore di ricerca )

- 2 npm install (installa node,vite,altri pacchetti non di laravel)

- 3 npm install bootstrap (installa bootstrap)

andare su resources /css/app.css scrivere
 
     @import'./bootstrap';

 andare su resources /js/app.js scrivere

     import'./bootstrap';

- 4 npm run dev (su un altro terminale serve per vedere in diretta le modifiche )

- 5 composer require livewire/livewire (installa livewire)

# CREAZIONE SITO - creazione rotte , componenti,collegamento css e javascript con vite

- 1 vai su routes - web.php - aggiungi la funzione freccia per semplificarti il percorso esempio :

   Route::get('/', function () {
    return view('home');
})->name = 'home';

    se si vuole semplificare questa funzione anonima si può creare un componente andando sul terminale

        php artisan make:controller NOME SCELTO DA TE esempio php artisan make:controller Pagecontroller 

        si trova sulla sinistra in http-controllers

- 1a per completare la rotta in Pagecontroller o altri controller inserire la funzione che ti indica il percorso che deve eseguire la pagina html (la rotta) esempio 

      public function home(){

        return view('home');
    }

- 1b  infine bisogna andare su web.php e modificare la funzione esistente anonima con una classe in questo modo 

       Route::get('/',[Pagecontroller::Class,'home'])->name('home');

   dopo aver scritto la funzione bisogna importare la classe basta andare sul nome del controller (in questo caso Pagecontroller) tasto destro import class in automatico verrà registrata la classe

- 2 crea i componenti con il commando :
   
   php artisan make:component NOME A PIACERE --view (ti crea una funzine anonima semplica i pasaggi) esempio : php artisan make:component layout

- 3 NEL LAYOUT inserire html nel heat al interno di title usare questa funzione che fa apparire il nome del progetto 
   
   {{$title ?? config('app.name')}}

   questa funzione per modificare il nome devi andare sulla estensione .env e selezionare il nome APP_NAME=

- 4 SEMPRE NEL LAYOUT  nel body inserire la funzione che collega tutte le modifiche front end alle altre pagine

     {{$slot}}

- 5 per richiamare un componente sulle altre pagine web devi usare un tag preciso

    <x-NOME DEL COMPONENTE><x-/NOME DEL COMPONONENTE> esempio <x-layout></x-layout>

- 6 collegare il css e javascript dentro un componente nel heat (va messo dove hai inserito {{$slot}} )

    @vite (['resources/css/app.css','resources/js/app.js'])

# CREAZIONE DATABASE

- 1 andare sulla sinistra .env andare su queste voci e inserire la password creata quando si e installato il database

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=Database89

- 2 aprire l'applicazione table plus e aprire il server locale (io lo chiamato aulab)
   
   -2a fare new inserire nome del progetto di solito uguale al nome del sito servono per aumentare le protezioni 
      - Encoding :  selezionare utf8mb4
      - Collation :utf8mb4_0900_ai_ci

- 3 per un ulteriore controllo verificare se i dati del dtabase coincidono con i dati del .env fare attenzione sopratutto alla voce DB_DATABASE e inserire il nome del progetto che abbiamo usato in questo caso libreria(ma varia da progetto a progetto )

# CREAZIONE SITO - NAVBAR CON LOGIN TRAMITE FORTIFY

- 1 crea una navbar con bootstrap oppure personale

- 2 installa fortify che si occuppa del fattore autorizzazione del login le logaut, sul terminale scrivere questo commando per l'installazione 

       composer require laravel/fortify

- 3 inserire un altro commando sul terminale che estrae dei file dalla cartella vendor (è la cartella più importante dove si trovano i file che fanno funzionare laravel      

     dove non dobbiamo toccare niente ) il commando è :

   php artisan vendor:publish --provider="Laravel\Fortify\FortifyServiceProvider"

    per avere la verfica che andato a buon fine puoi notare delle nuove cartelle sulla sinistra su app/action/fortify e anche Providers

- 4 Sempre dal terminale bisogna inviare il commando per reccuperare le migrazioni (sono la struttura del database e delle tabelle al suo interno ) il commando:

      php artisan migrate

      Al interno delle migrazioni possiamo vedere du funzioni una e up l'altra è down 

    FUNZIONE UP : tramitte il commando schema ci permette di inserire le colonne del nostro database esempio

      [DETTO TECNICAMENTE: la funzione up ci permette di fare delle modifiche a livello hardware sul nostro database ]

      public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

       •  $table : indica dove deve essere inserito tabella

       •  id,string,timestamp ecc.. sono i valori della tabella

       •  ('name'),(email)e ecc.. sono i nomi che vogliamo rilasciare

       •  unique è una regola di fortify che indica che non ci può essere un dobbione con quel attributo

       •  nullable una regola di fortify che indica che non devi essere oblligato a confermare questa credenziale per far funzionare il sito 

    LA FUNZIONE DOWN : serve per cancellare le modifiche fatte sulla funzione up quando si usa il commando rollback

       • php artisan migrate:rollback  va cancellare i dati della funzione up 

- 5 Creare una migrazione che ci inserisca i documenti che vogliamo aggiungere (tipo articoli, libri, prodotti, ecc... ) inserendo il commando 

       •  php artisan make:migration create_NOME SCELTO DA TE DEL PRODOTTO_table esempio:

       •  php artisan make:migration create_books_table

- 6 dopo aver creato una nuova tabella con il commando precedente possiamo andare ad aggiungere dei campi esempio:

         public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title',50);
            $table->string('author',100);
            $table->string('genre');
            $table->string('description',500);
            $table->string('image')->nullable();
            $table->timestamps();
            
        });
    }

    I numeri affianco i nomi dati sono il numero massimo di caratteri che si possono inserire 

- 6 a bisogna salvarli nel database con il commando :

     php artisan migrate

- 7 Se vuoi fare una prova di un altro commando che ti cancella tutte le migrazioni di diversi branch e poi li riscrive usa 

    php artisan migrate:refresh
 
- 8 se vuoi aggiungere una nuova collona al tuo database devi lanciare questo commando

   php artisan make:migration add_NOME SCELTO DA TE_column_to_NOME DEL DATABASE_table esempio

   php artisan make:migration add_price_column_to_books_table

   Facendo così si è creato una nuova collona sul database e una nuova migrazione dove abbiamo inserito una funzione 

     public function up(): void
    {
        Schema::table('books', function (Blueprint $table) {
            
            $table->decimal('price',5,2)->after('author');
        });
    }

    • DECIMAL indica un valore decimale(i numeri) 5 è un paramatro di defaut che indica di quanti numeri deve essere composto il numero ,2 è un paramatro di defaut che indica quanti numeri ci devono essere dopo la virgola

    • AFTER indica la posizione che si vuole aggiungere di questo paramatro in questo caso si e scelto di metterlo dopo author

- 9 Se si vuole eliminare nella funzione dawn inserire questo:

        public function down(): void
    {
        Schema::table('NOME DEL DATABASE', function (Blueprint $table) {
            $table->dropColumn('NOME VARIABILE');
        });
    }
}; ESEMPIO PRATICO

          public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropColumn('price');
        });
    }
};

- 10 Dopo aver instalato FORTIFY bisogna AUTENTICARLO bisgna inserire il provider :

   App\Providers\FortifyServiceProvider::Class,

   • si va su config/app.php
   • si va sul fondo dove ci sono gli altri provaider e si incolla 

- 11 ora bisogna inserire questa funzione su Providers/FortifyServiceProvider.php sul fondo prima delle ultime due parentesi graffe


    Fortify::loginView(function () {
        return view('auth.login');
    });

- 12 Poi devi andare sulla tua navbar e segnare il percorso del login esempio:

     <nav class="navbar">
    <ul class="nav-list">
      <li><a href="#">Home</a></li>
      <li><a href="#">Libri</a></li>
      <li><a href="#">Recensioni</a></li>
      <li><a href="#">Parla con noi</a></li>
      <li><a href="#">Registrati</a></li>

      <li><a href="/login">Login</a></li>
        </div>
      </li>
    </ul>
  </nav>

  - 13 per funzionare devi creare una view visto che nella funzione sta scritto auth.login che indica un percoso ci sono 2 possibilità per risolvere il problema 

     A : cambiare il nome del percorso
     B : creare una cartella nelle View che contiene la pagina html login

   - 13A crea dei form che gestistocono il login

        IMPORTANTE nel codice sotto la voce post inserire @csrf è un sistema di sicurezza che inserisce un TOKEN di sicurezza in più per evitare che i nostri dati vengono copiati da un haker

   - 13B : inserire sul terminale il commando che pulisce dai vari cashe che possono interferire con il login 

      php artisan optimize:clear

- 14 Ripassiamo comè strutturato un codice di form 


        <form  action="/login" method="post">

            @csrf

            <label class="formL" for="email">Email:</label><br>
            <input class="formI" type="text" id="email" name="email" required><br>

            <label class="formL2" for="password">Password:</label><br>
            <input class="formI" type="password" id="password" name="password" required><br>

            @error('email')<span class="text-danger">{{$message}}</span> @enderror

            <input class="formB" type="submit" value="Accedi">
        </form>

    • ACTION= è l'indirizzo che viene mandato dal form 

    • METHOD="post" = è il metodo che si usa per inviare dei dati

    •  @error('email')<span class="text-danger">{{$message}}</span> @enderror = è un sistema di LARAVEL che ci invia un messaggio sulla pagina html in questo caso di errore 

    # REGISTRAZIONE CON FORTIFY

    - 1 Inserire questa funzione sulla sinistra APP-PROVIDERS-FORTIFYSERVICEPROVIDER : sempre prima delle due parentesi graffe finali

          Fortify::registerView(function () {
        return view('auth.register');
    });

    - 2 Creare una vista nella cartella AUTH nominata REGISTER (oppure con un altro nome ma bisogna cambiare il nome nella funzione precedente )

    - 2A Creare la registrazione dei vari form usare il metodo post e action="/register" esempio pratico co i form 

        <center>
        <h1 class="titolo">REGISTRATI</h1>
    </center>


    <div class="conteinerRegister" style="margin-top=50px">

        <div class="row">


            <form  method="post" action="/register">

                @csrf

                <label class="formL" for="email">Nome:</label><br>
                <input class="formI" type="text" id="name" name="name" required><br>

                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror

                <label class="formL" for="email">Email:</label><br>
                <input class="formI" type="text" id="email" name="email" required><br>

                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror

                <label class="formL2" for="password">Password:</label><br>
                <input class="formI" type="password" id="password" name="password" required><br>

                <label class="formL2" for="password"> Verifica Password:</label><br>
                <input class="formI" type="password" id="password" name="password_confirmation" required><br>

                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <input class="formB" type="submit" value="Accedi">
            </form>

        </div>



    </div>

    - 2 B per evitare errori controlla sempre bene le scritte e il name per esempio a password verificata il name deve essere : password_confirmate

    - 3 andare nella navbar e inserire il percorso nella navbar per arrivare alla registrazione 

    - 4 una volta inseriti i dati nella pagina della registrazione i dati verrano inseriti nel database ma sul browser uscira la pagina di errore 404 per risolvere il problema bisogna andare :
      
      confing/fortify.php

      /*
    |--------------------------------------------------------------------------
    | Home Path
    |--------------------------------------------------------------------------
    |
    | Here you may configure the path where users will get redirected during
    | authentication or password reset when the operations are successful
    | and the user is authenticated. You are free to change this value.
    |
    */

    'home' => '/home',  riscrivere la funzione in questa maniera 'home' => '/',

     

    • Poi bisogna andare su Providers/RouteserviceProvider e fare questa modifica 

      /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/home'; 

    LA MODIFICA : public const HOME = '/'; 

    - 5 Una volta autenticati si può andare nella navbar per dividere quello che si vede quando non sei logato (guest) oppure quando sei logato (auth) un esempio di navbar

    <nav class="navbar">
    <ul class="nav-list">
      <li><a href="#">Home</a></li>
      <li><a href="#">Libri</a></li>
      <li><a href="#">Recensioni</a></li>
      <li><a href="#">Parla con noi</a></li>

      @guest

      <li><a href="/register">Registrati</a></li>
      <li><a href="/login">Login</a></li>
          
      @endguest

      @auth

      <li class="nav-item"><a href="#">Benvenuto {{auth()->user()->name}}</a>
      <form action="/logout" method="post">
        @csrf

        <button type="submit">Logout</button>
    
      </form>
    </li>
          
      @endauth
      
        </div>
      </li>
    </ul>
  </nav>

  - 6 la formula {{auth()->user()->name}} ci permette di recuperare dei dati che si trovano nel database esempio il nome 

  # CREAZIONE OGGETTO (IN QUESTO CASO LIBRI) CON ELOQUENT 

  - 1 creare un modello di solito viene consigliato di darli un nome al singolare il commando e il seguente :

       php artisan make:model NOME SCELTO DA TE -mcr  esempio  php artisan make:model Book -mcr 

       la scritta - mcr e un medtodo GRUD che serve per creare in contemporanea una migrazione(modello) un controller e una rotta 

       • controllare in database/migration se si creata la migrazione (se ne trovi due cancella quella più recente per evitare problemi)
       • controllare in app/Http/controllers/se ha creato il controler scelto da noi 

    - 1A la logica GRUD serve per aggevolrsi con le funzioni che posssiede un oggetto che sono 
       • CREATE = creare l'oggetto
       • READ = leggere
       • UPDATE = Caricare
       • DELETE = cancellare

    - 2 bisogna incrementare le rotte routes/web.php con il metodo grud inserenso questa funzione :

        Route::resourse('MIGRAZIONE',CONTROLLER::Class); esempio

        Route::resourse('Books',BookController::Class);

        • se vuoi vissualizzare tutte le rotte nel terminale lancia questo commando:

           php artisan route:list

   - 3 Andando sul bookcontroller bisogna gestire le varie finzioni iniziamo dalla 

      • INDEX : Serve a reccuperare tutti dati esempio tutti i libri con il metodo all() esempio la funzione sortBy serve per mettere in ordine alfabetico in questo dal titolo le card:

            $books= book::all()->sortBy('title');
        return view('books.index',compact('books'));

        poi devi creare una vista ricordati di inserire nelle viste una cartelle perchè nella funzione sono divisi da un punto 

        Se vuoi reccuperare tutte le card sulla pagina web devi fare un @foreach con al interno una card poi nel titolo x reccuperare quel dato dal database devi usare la funzione esempio per il tittolo e per l'autore e per la descrizione (qualsiasi dato che si trova nel database ) :

            {{$book->title}}

            {{$book->author}}

            {{$book->price}}

            {{$book->description}}

        Ricordati di creare la rotta nella navbar per visualizzare la pagina web usa il metodo con laraverl esempio nel href :

             {{route('books.index')}}

             Esempio pratico della creazione della card anche dal lato front end con le classi di boostrap :

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


• style="background-color: #{{ dechex(mt_rand(0, 0xFFFFFF)) }};"  Con questa funzione puoi cambiare dinamicamente il colore in modo casuale funziona solo su laravel 

    • CREATE : Andare nel controller (in questo caso Bookcontroller ) e creare la rotta della creazione card

        public function create()
    {
        return view('books.create');
    }
    
        poi bisogna andare nella vista e creare nomeSceltoDaTe.blade.php

    nella vista personalizzalo a tua scelta consisigliato con dei form che riportano le voci del database 

    IMPORTANTE  se vogliamo aggiungere FILE al nostro form bisogna aggiungere la voce <form enctype="multipart/form-data"></form> poi ricordati di cambiare action con la formula blade {{route('books.store')}} codice completo del form 

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

- Ora dobbiamo inserire lato sinistro Controllers/Middleware  per far visualizzare bene la card creata dal autore dal terminale inserire questo dato 

       php artisan make:request NomeSceltoDaTeStoreRequest esempio php artisan make:request BookStoreRequest 

 Una volta dentro al BookStoreRequest modificare da FALSE A TRUE  perchè cosi avvia se verifica che sia logatto 

     public function authorize(): bool
    {
        return true;
    }

Invece della funzione RULES bisogna inserire tutte le voci che abbiamo inserito nel form di crezione libro e tutti i suoi paramentri esempio pratico

       /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array  {
        return [
            'title'=>'required|max:50',  //indica un valore fondamentale massimo 50 caratteri
            'description'=>'required|min:20|max:500', //indica un vaolre fondamentale minimo e massimo
            'price' => 'required|numeric|min:0',  //indica un numero fondamentale numerico minimo 0
            'image' => 'image|max:4096',  //indica la grandenza massima in byte

        ];
    }
  

  - Poi bisogna andare sul bookcontroller alla voca 

      public function store(Request $request)
    {
        //
    }

e modificare la voce Request con la versione castol che abbiamo creato con la BookStoreRequest e aggiungere la funzione di verifica esempio pratico:

    Book::create($request->validated());

- Per evitare errori devi riportare i dati del database anche in lato sinistro app/http/models/nome del fil in questo caso Book per una questione di protezione esempio:

    class Book extends Model
{
    use HasFactory;

    protected $fillable=['title','price','author','description','image'];
}

-- • STORE inserire queste funzioni che creano il collegamento al form e alla validificazione esempio pratico :

   public function store(BookStoreRequest $request)
    {
        $validated=$request->validated();
        book::create([
            'author' => auth()->user()->name,
            'title' => $validated['title'],
            'description' => $validated['description'],
            'price' => $validated['price'],
            'image' => $validated['image']
        ]);
       // if($request->hasfile('image')&& $request->file('image')->isvalid()){


        //}

        return redirect()->back()->with(['success'=>'Libro inserito con successo']);  //indica la funzione che fa apparire il messaggio di successo se l'inserimento è andato a buon fine 
    }


-- • # EDIT 

serve per visulizzare le modifiche alle card e creare il percorso con la vista esempio:

   public function edit(Book $book)
    {
        return view('books.edit',compact('book'));
    }

    poi bisogna creare la vista seguendo il percorso 

-- • # UPDATE

serve per caricare le nuove modifiche al file esempio:

   public function update(BookStoreRequest $request, Book $book)
    {
        $validated=$request->validated();
        Book::update([
            
            "title" => $validated["title"],
            "description" => $validated["description"],
            "price" => $validated["price"],
            'image' => $validated['image']
        ]);

        return redirect()->back()->with(['success'=>'Libro aggiornato con successo']);
    }

-- • # DELETE

serve per cancellare completamente la card con la formula :

    public function destroy(Book $book)
    {
        $book->delete();
    }








    



  
      
     