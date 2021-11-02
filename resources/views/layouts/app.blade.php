<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- importo css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>Comics</title>
</head>
<body>
    {{-- importo i partials --}}
    @include('partials.header')
    @yield('content')

    @include('partials.footer')
</body>
</html>