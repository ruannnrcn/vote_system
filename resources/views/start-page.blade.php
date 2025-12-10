<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vote System</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">

        <div class="min-h-screen flex flex-col bg-gray-100">
            
            <header class="flex justify-center">
                <div class="bg-white shadow-md rounded-lg w-full flex items-center px-6 py-6 gap-4">
                    <div class=" icon-container h-full flex items-center justify-start">
                        <img src="{{ asset('images/vote-icon.png') }}" alt="Vote Icon" class="h-10 w-10">
                    </div>
                    <div class="title-container flex-1 flex items-center justify-center h-full">
                        <h1 class="text-gray-500 text-center text-2xl">Sistema de Votação</h1>
                    </div>
                </div>
            </header>

            <div class="flex flex-1 items-center justify-center">
                <div class="w-full sm:max-w-md px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

                <div class="flex flex-col items-center m-6">


                    @if (Route::has('login'))
                        <nav class="flex items-center justify-center gap-4">
                            @auth

                                <a
                                    href="{{ url('/dashboard') }}"
                                    class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                                >
                                    Dashboard
                                </a>
                            @else

                            
                                <a
                                    href="{{ route('login') }}"
                                    class="bg-gray-100 text-gray-900 inline-block px-5 py-1.5 hover:bg-blue-500 hover:text-gray-100 rounded-sm text-sm leading-normal"
                                >
                                    Login
                                </a>

                                @if (Route::has('register'))
                                    <a
                                        href="{{ route('register') }}"
                                        class="bg-gray-100 text-gray-900 inline-block px-5 py-1.5 hover:bg-blue-500 hover:text-white rounded-sm text-sm leading-normal"
                                    >
                                        Register
                                    </a>
                                @endif
                            @endauth
                        </nav>
                    @endif
                </div>
                </div>
            </div>
        </div>
    </body>
</html>