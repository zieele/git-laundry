<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
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
    </style>
</head>
<body class="w-full bg-red-100" style="height: 200vh">
    <div id="nav" class="fixed h-20 w-full bg-gray-800 flex justify-center items-center">
        <button class="absolute left-6 h-8 w-8 rounded-full">
            <span class="text-red-100 font-bold text-2xl flex justify-center"><i class="fas fa-bars"></i></span>
        </button>
        <span id="ltext" class="text-red-100 text-2xl">Git-Laundry</span>
    </div>
</body>
</html>