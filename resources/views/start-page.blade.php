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
             <!-- Header -->
            <header class="flex justify-center">
                <div class="bg-white shadow-md rounded-lg w-full flex items-center px-6 py-6 gap-4">
                    <div class=" icon-container h-full flex items-center justify-start">
                        <img src="{{ asset('images/vote-icon.png') }}" alt="Vote Icon" class="h-10 w-10">
                    </div>
                    <div class="title-container flex-1 flex items-center justify-center h-full">
                        <h1 class="font-bold text-gray-800 text-center text-3xl">Sistema de Votação Da BDL</h1>
                    </div>
                </div>
            </header>
            
            <!-- Main Content -->
            <div class="flex flex-1 items-center justify-center">
                <div class="w-full sm:max-w-md px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

                <div class="flex flex-col items-center justify-between m-6">
                    <h2 class="text-1xl font-bold mb-10 text-gray-500 w-full">Por favor, faça login ou registre-se para continuar.</h2>


                    @if (Route::has('login'))
                        <nav class="flex items-center justify-between gap-4 w-full">
                            @auth

                                <a
                                    href="{{ url('/dashboard') }}"
                                    class="bg-gray-100 text-gray-900 inline-block px-5 py-1.5 hover:bg-blue-500 hover:text-gray-100 rounded-md text-sm leading-normal transition-colors duration-200 ease-in-out font-bold text-center"
                                >
                                    Dashboard
                                </a>
                            @else

                            
                                <a
                                    href="{{ route('login') }}"
                                    class="bg-gray-100 text-gray-900 inline-block w-32 px-5 py-1.5 hover:bg-blue-500 hover:text-gray-100 rounded-md text-sm leading-normal transition-colors duration-200 ease-in-out font-bold text-center"
                                >
                                    Login
                                </a>

                                @if (Route::has('register'))
                                    <a
                                        href="{{ route('register') }}"
                                        class="bg-gray-900 text-gray-100 inline-block w-32 px-5 py-1.5 hover:bg-blue-500 hover:text-gray-100 rounded-md text-sm leading-normal transition-colors duration-200 ease-in-out font-bold text-center"
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

            <!-- Footer -->
            <div class="bg-white shadow-inner mt-6">
                <footer class="max-w-7xl mx-auto py-4 px-6 text-center text-gray-500 text-sm">
                    &copy; {{ date('Y') }} Vote System. All rights reserved.
                    &copy; Developed by Pedro Ruan.
                </footer>
        </div>
    </body>
</html> 