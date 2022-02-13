<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Import Google Font Roboto --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    {{-- Fontawesome Import --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Link al file css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>@yield('page_title')</title>
</head>
<body>
    {{-- Importo la partials header --}}
    @include('partials.header')

    {{-- Assegno lo yield al main dato che il suo contenuto cambia da pagina a pagina --}}
    <main>
        @yield('main_section')
    </main>

    {{-- Importo la partials footer --}}
    @include('partials.footer')
</body>
</html>