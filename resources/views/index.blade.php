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

    {{-- phone sidebar --}}
    <div class="fixed w-full h-full bg-black bg-opacity-50">
        <div id="sidebar" class="w-64 h-full bg-blue-50 fixed z-50 flex flex-col justify-between">
            <div class="flex items-center p-4 bg-green-200">
                <div class="h-12 w-12 bg-red-400 rounded-full mr-2"></div>
                <span class="text-lg font-bold text-gray-600">Admin</span>
                <button class="absolute right-4 text-3xl text-gray-600 h-8 w-8 flex justify-center items-center rounded-full"><i class="fas fa-times"></i></button>
            </div>
            <div></div>
            <div class="flex items-center p-4 bg-yellow-100 bottom-0">
                <span class="font-semibold text-gray-600"><i class="fas fa-sign-out-alt"></i> Logout</span>
            </div>
        </div>
    </div>
</body>
</html>