<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? config('app.name') }}</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="stile.css">

    <link rel="stylesheet" href="stile.css">
    <script src="javascript.js" defer></script>
</head>

<body>

    <x-navbar></x-navbar>



    {{ $slot }}

   

</body>

</html>
