<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="https://icon-library.com/images/twitter-icon-flat/twitter-icon-flat-12.jpg">

    <!-- Scripts -->
    <script src="{{ asset('css/app.css') }}" defer></script>
    
    <!-- Styles -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet"	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" />
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset ('js/app.js')}}">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <section class="px-8 py-4" >
            <header class="container mx-auto">
                <h1>
                    <img src="{{asset('images/TT-icon.png')}}" alt="Twitter" width="13%">
                </h1>
            </header>
        </section>
        <section class="px-8">
            <main class="container mx-auto">
                @yield('content')
            </main>
        </section>
        
    </div>
</body>
</html>
