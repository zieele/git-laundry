<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $title }} | git-laundry</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        {{-- awesome font --}}
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        {{-- font --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

        {{-- style --}}
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
            #ltext {
                font-family: 'Pacifico', cursive;
            }

            span {
                user-select: none;
            }

            ::-webkit-scrollbar {
              width: 0px;
              height: 0px;
            }
        </style>
        @yield('style')
    </head>

    <body id="body">

        {{-- main content --}}
        <main class="w-full bg-blue-100">
            {{-- header --}}
            @include('layouts.header')

            {{-- sidebar --}}
            @include('layouts.sidebar')

            {{-- main content --}}
            <div class="pt-20 pb-10 lg:pl-64 xl:pl-96 min-h-screen">
                @yield('content')
            </div>

            {{-- footer --}}
            @include('layouts.footer')
        </main>

        @stack('script')
        <script>
            document.getElementById("openSidebar").onclick = function() {
              document.getElementById("sidebar").classList.toggle("-translate-x-full");
              document.getElementById("closeSidebar").classList.toggle("rotate-90");
              document.getElementById("closeSidebar").classList.toggle("-translate-x-8");
              document.getElementById("body").classList.toggle("overflow-y-hidden");
              }
            document.getElementById("closeSidebar").onclick = function() {
              document.getElementById("sidebar").classList.toggle("-translate-x-full");
              document.getElementById("closeSidebar").classList.toggle("-translate-x-8");
              document.getElementById("body").classList.toggle("overflow-y-hidden");
              }
        </script>
    </body>
</html>