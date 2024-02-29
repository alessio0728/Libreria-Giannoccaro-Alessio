<x-layout>
    <center>
        <h1 class="titolo">LOGIN</h1>
    </center>

    <div class="conteinerLogin">


        <form  action="/login" method="post">

            @csrf

            <label class="formL" for="email">Email:</label><br>
            <input class="formI" type="text" id="email" name="email" required><br>

            <label class="formL2" for="password">Password:</label><br>
            <input class="formI" type="password" id="password" name="password" required><br>

            @error('email')<span class="text-danger">{{$message}}</span> @enderror

            <input class="formB" type="submit" value="Accedi">
        </form>

    

    </div>

</x-layout>
