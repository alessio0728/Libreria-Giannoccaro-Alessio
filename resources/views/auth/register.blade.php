<x-layout>

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




</x-layout>
