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
<body class="w-full bg-blue-100" style="height: 150vh">
    <div id="nav" class="fixed h-20 w-full bg-blue-400 flex justify-center items-center">
        <button id="openSidebar" class="absolute left-6 h-8 w-8 rounded-full">
            <span class="text-blue-50 font-bold text-2xl flex justify-center"><i class="fas fa-bars"></i></span>
        </button>
        <span id="ltext" class="text-blue-50 text-2xl">Git-Laundry</span>
    </div>

    {{-- phone sidebar --}}
    <div id="sidebar" class="fixed w-full h-full duration-500 transform -translate-x-full">
        <div id="bodySidebar" class="w-64 h-full bg-blue-50 fixed z-50 flex flex-col justify-between text-gray-600">

            {{-- sidebar header --}}
            <div class="flex items-center p-4 h-20 bg-gray-700 text-gray-200">
                <div class="h-12 w-12 bg-red-400 rounded-full mr-2"></div>
                <span class="text-lg font-bold">Admin</span>
                <button id="closeSidebar" class="absolute right-4 text-3xl h-8 w-8 flex justify-center items-center rounded-full duration-700 transform -translate-x-8 rotate-90"><i class="fas fa-times"></i></button>
            </div>

            {{-- hyperlinnk list --}}
            <div class="h-3/4 flex flex-col">

                {{-- first category --}}
                <div class="mb-4">
                    <span class="font-bold text-xl ml-2">Category 1</span>
                    <a class="bg-blue-100 rounded-xl m-2 p-4 flex hover:bg-blue-200 duration-100">
                        <div class="w-8"><i class="fas fa-plus"></i></div>
                        <span class="font-semibold">Tambahkan Outlet</span>
                    </a>
    
                    <a class="bg-blue-100 rounded-xl m-2 p-4 flex hover:bg-blue-200 duration-100">
                        <div class="w-8"><i class="fas fa-user-plus"></i></div>
                        <span class="font-semibold">Tambahkan Member</span>
                    </a>
    
                    <a class="bg-blue-100 rounded-xl m-2 p-4 flex hover:bg-blue-200 duration-100">
                        <div class="w-8"><i class="fas fa-box"></i></div>
                        <span class="font-semibold">Tambahkan Paket</span>
                    </a>
                </div>

                {{-- second category --}}
                <div class="mb-4">
                    <span class="font-bold text-xl ml-2">Category 2</span>
                    <a class="bg-blue-100 rounded-xl m-2 p-4 flex hover:bg-blue-200 duration-100">
                        <div class="w-8"><i class="fas fa-money-check-alt"></i></div>
                        <span class="font-semibold">Transaction</span>
                    </a>
                </div>

            </div>

            {{-- sidebar footer --}}
            <div class="flex items-center p-4 bg-gray-700 text-gray-200 bottom-0">
                <span class="font-semibold"><i class="fas fa-sign-out-alt"></i> Logout</span>
            </div>
        </div>
    </div>



    {{-- main content --}}
    <div class="pt-24 p-4">
        <div class="font-bold text-3xl w-full h-64 flex justify-center items-center rounded-xl bg-blue-50 text-gray-600">Hemlo World</div>
    </div>



    
    <script>
        document.getElementById("openSidebar").onclick = function() {
          document.getElementById("sidebar").classList.toggle("-translate-x-full");
          document.getElementById("closeSidebar").classList.toggle("rotate-90");
          document.getElementById("closeSidebar").classList.toggle("-translate-x-8");
        //   document.getElementById("body").classList.toggle("overflow-y-hidden");
          }
        document.getElementById("closeSidebar").onclick = function() {
          document.getElementById("sidebar").classList.toggle("-translate-x-full");
          document.getElementById("closeSidebar").classList.toggle("-translate-x-8");
          }
    </script>
</body>
</html>