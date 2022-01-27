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
<body id="body">

    {{-- main content --}}
    <main class="w-full bg-blue-100">
        {{-- header --}}
        <div id="nav" class="fixed h-20 w-full bg-blue-400 flex justify-center items-center lg:pl-64 xl:pl-96">
            <button id="openSidebar" class="absolute left-6 h-8 w-8 rounded-full lg:hidden">
                <span class="text-blue-50 font-bold text-2xl flex justify-center"><i class="fas fa-bars"></i></span>
            </button>
            <span id="ltext" class="text-blue-50 text-2xl">Git-Laundry</span>
            <button class="font-semibold text-blue-50 text-lg absolute right-6 hidden lg:block"><i class="fas fa-sign-out-alt"></i> Logout</button>
        </div>
    
        {{-- siderbar --}}
        <div class="bg-red-800 hidden fixed z-50 w-64 lg:block  h-full">
            <div id="bodySidebar" class="w-64 xl:w-96 h-full bg-blue-50 fixed z-50 flex flex-col text-gray-600">
    
                {{-- sidebar header --}}
                <div class="flex items-center p-4 h-20 bg-gray-700 text-gray-200">
                    <div class="h-12 w-12 bg-red-400 rounded-full mr-4"></div>
                    <span class="text-lg font-bold">Admin</span>
                </div>
    
                {{-- hyperlinnk list --}}
                <div class="flex flex-col mt-6">
    
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
            </div>
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
                <div class="flex items-center p-4 bg-gray-700 text-gray-200 bottom-0 lg:hidden">
                    <span class="font-semibold"><i class="fas fa-sign-out-alt"></i> Logout</span>
                </div>
            </div>
        </div>
    
    
    
        {{-- main content --}}
        <div class="py-20 lg:pl-64 xl:pl-96">
            {{-- blank card --}}
            <div class="m-4 h-64 rounded-xl overflow-hidden shadow-lg bg-blue-50">
                <a href="" class="w-full h-full flex flex-col justify-center items-center"
                title="ini dibikin biar bisa di pencet, tapi ini ga bisa di pencet. cuman prototype aja :D">
                    <div class="max-w-2xl flex flex-col justify-center items-center">
                        <span class="font-bold text-3xl text-gray-600">Hemlo World</span>
                    </div>
                </a>
            </div>
            
            {{-- pic card --}}
            <div class="m-4 h-64 rounded-xl bg-cover bg-center overflow-hidden shadow-lg"
            style="background-image: url('https://wallpapercave.com/wp/wp6980738.jpg')">
                <a href="" class="w-full h-full flex flex-col justify-center items-center"
                style="background: linear-gradient(0deg, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0) 100%);" 
                title="ini dibikin biar bisa di pencet, tapi ini ga bisa di pencet. cuman prototype aja :D">
                    <div class="max-w-2xl flex flex-col justify-center items-center">
                        <span class="font-bold text-3xl text-gray-200">This Is Card</span>
                    </div>
                </a>
            </div>
            
            {{-- paragraph card --}}
            <div class="m-4 h-64 rounded-xl overflow-hidden shadow-lg bg-blue-50">
                <a href="" class="w-full h-full flex flex-col justify-center items-center"
                title="ini dibikin biar bisa di pencet, tapi ini ga bisa di pencet. cuman prototype aja :D">
                    <div class="max-w-2xl flex flex-col justify-center items-center">
                        <span class="font-bold text-3xl text-gray-600">Lorem Ipsum Dolor</span>
                        <dir class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, sapiente harum voluptatum a perferendis eos explicabo veniam dolorum eaque iste ullam voluptate aut excepturi? Voluptatum perferendis, accusamus hic nisi dolores odit aut vel dolorum, repellendus ullam eligendi ipsam voluptates, molestiae quae. Labore corporis consequatur hic dolorum veniam! Incidunt, impedit eos.</dir>
                    </div>
                </a>
            </div>
        </div>
    
    
    
    
        {{-- footer --}}
        <div class="h-96 bottom-0 bg-gray-700 text-gray-200 flex flex-col items-center lg:pl-64 xl:pl-96">
            <div class="h-40 flex justify-center items-center flex-col p-8 text-center max-w-xl">
                <span class="font-bold">About Us</span>
                ipsum dolor sit amet consectetur adipisicing elit. Autem minima, voluptatum, soluta, distinctio numquam cumque accusantium est cupiditate laboriosam omnis quisquam iste accusamus excepturi quae.
            </div>
            <div class="flex flex-col h-48 sm:flex-row max-w-xl">
                <div class="h-24 w-full flex flex-col justify-center items-center p-8 sm:h-48">
                    <span class="font-bold">Adress</span>
                    <div class="w-72">Lorem ipsum dolor sit amet, consectetur adipisicing elit temporibus</div>
                </div>
                <div class="h-24 w-full flex flex-col justify-center items-center p-8 sm:h-48">
                    <span class="font-bold">Contact Us</span>
                    <div class="flex">
                        <a class="h-12 w-12 rounded-full bg-gray-200 mx-1 flex justify-center items-center text-2xl text-gray-700 hover:bg-gray-500 duration-100">
                            <i class="fas fa-map-marked-alt"></i>
                        </a>
                        <a class="h-12 w-12 rounded-full bg-gray-200 mx-1 flex justify-center items-center text-2xl text-gray-700 hover:bg-gray-500 duration-100">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="h-12 w-12 rounded-full bg-gray-200 mx-1 flex justify-center items-center text-2xl text-gray-700 hover:bg-gray-500 duration-100">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="h-8 w-full flex justify-center items-center">
                <span class="text-gray-500 italic">&copy; agerr.studio 2022</span>
            </div>
        </div>
    </main>

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