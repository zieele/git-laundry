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

            span, table, thead {
                user-select: none;
            }

            td {
                user-select: text;
            }

            ::-webkit-scrollbar {
                width: 0px;
                height: 0px;
            }

            /* firefox */
            ::placeholder {
                font-style: italic;
            }
            
            /* internet exploler */
            :-ms-input-placeholder {
                font-style: italic;
            }
            
            /* microsoft edge */
            ::-ms-input-placeholder {
                font-style: italic;
            }
        </style>
        @stack('style')
    </head>

    <body id="body">
        
        {{-- main content --}}
        <main class="w-screen h-screen" style="
        background-image: url('https://wallpapercave.com/wp/wp6980738.jpg');
        min-height: 16rem;">
            <div class="w-full h-full flex justify-center items-center flex-col" style="
            background: linear-gradient(0deg, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0) 100%);">
                <a href="/" id="ltext" class="text-white text-4xl m-8">Git-Laundry</a>
                <div class="rounded-xl px-6 py-10 shadow-lg bg-blue-50">
                    <form action="login" method="post">
                        @csrf
                        <table class="text-gray-600">   
                          <tr>
                            <td><label for="email">Email</label></td>
                            <td><input class="outline-none shadow-md focus:shadow-xl duration-300 transform focus:-translate-y-1 w-64 my-2 ml-2 bg-white rounded-lg px-3 py-2" type="email" name="email" id="email" autocomplete="off" placeholder="Type your email here" required></td>
                          </tr>
                          <tr>
                            <td><label for="password">Password</label></td>
                            <td><input class="outline-none shadow-md focus:shadow-xl duration-300 transform focus:-translate-y-1 w-64 my-2 ml-2 bg-white rounded-lg px-3 py-2" type="password" name="password" id="password" autocomplete="off" placeholder="Password" required></td>
                          </tr>
                        </table>
                        @error('email')
                            <span class="text-red-400">{{ $message }}</span>
                        @enderror
                        <button type="submit" class="w-full h-10 shadow-md hover:shadow-xl rounded-lg bg-blue-400 text-white hover:bg-blue-300 duration-300 font-semibold transform hover:-translate-y-1 mt-4">
                            <span>Login</span>
                        </button>
                    </form>
                    <hr class="my-8">
                    <div class="flex w-full justify-between text-sm text-gray-600">
                        <div class="hover:underline cursor-pointer">Documentation</div>
                        <div class="flex flex-col items-end">
                            <a href="register" class="text-blue-400 hover:underline">Create a new account</a>
                            <div class="text-red-400 hover:underline cursor-pointer">Forget Password</div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>