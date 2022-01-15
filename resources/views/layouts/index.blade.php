<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('tailwind css/tailwind.css') }}">
</head>

<body>
    <div class="font-sans text-gray-900 antialiased">
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col text-center w-full mb-20">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Laravel projet</h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">De petit projet réaliser avec Laravel</p>
                </div>
                <div class="flex flex-wrap -m-2">
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <a href="{{ route('events.index') }}" target="_blank" rel="noopener noreferrer">
                            <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                                <img alt="team"
                                    class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                                    src="{{ asset('img/80x80.png') }}">
                                <div class="flex-grow">
                                    <h2 class="text-gray-900 title-font font-medium">Event avec paiement</h2>
                                    <p class="text-gray-500">Laravel Cashier</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                            <img alt="team"
                                class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                                src="{{ asset('img/80x80.png') }}">
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">Henry Letham</h2>
                                <p class="text-gray-500">CTO</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                            <img alt="team"
                                class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                                src="{{ asset('img/80x80.png') }}">
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">Oskar Blinde</h2>
                                <p class="text-gray-500">Founder</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                            <img alt="team"
                                class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                                src="{{ asset('img/80x80.png') }}">
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">John Doe</h2>
                                <p class="text-gray-500">DevOps</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                            <img alt="team"
                                class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                                src="{{ asset('img/80x80.png') }}">
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">Martin Eden</h2>
                                <p class="text-gray-500">Software Engineer</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                            <img alt="team"
                                class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                                src="{{ asset('img/80x80.png') }}">
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">Boris Kitua</h2>
                                <p class="text-gray-500">UX Researcher</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                            <img alt="team"
                                class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                                src="{{ asset('img/80x80.png') }}">
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">Atticus Finch</h2>
                                <p class="text-gray-500">QA Engineer</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                            <img alt="team"
                                class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                                src="{{ asset('img/80x80.png') }}">
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">Alper Kamu</h2>
                                <p class="text-gray-500">System</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                            <img alt="team"
                                class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                                src="{{ asset('img/80x80.png') }}">
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">Rodrigo Monchi</h2>
                                <p class="text-gray-500">Product Manager</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0 mr-4">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </div>
    </div>
</body>

</html>
