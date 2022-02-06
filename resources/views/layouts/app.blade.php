<!doctype html>
<html lang="en">

<head>
    {{-- meta tags --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Index'}} | git-laundry</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- awesome font --}}
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    {{-- css style --}}
    @stack('style')
</head>

<body class="w-full bg-blue-50">

    {{-- layouts --}}
    @include('layouts.header')
    @include('layouts.sidebar')

    {{-- content --}}
    <div class="pt-20 pb-10 lg:pl-64 xl:pl-96 min-h-screen">
        @yield('content')
    </div>

    @include('layouts.footer')
    
    {{-- js script --}}
    @stack('script')
</body>

</html>