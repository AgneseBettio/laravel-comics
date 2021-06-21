<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- fontAwsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- style.css-->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title> @yield('page_title')</title>
</head>
<body>
    {{-- include header/ creo in partials --}}
    @include('partials.header')
    
    <main>
        <div class="jumbotron">
            <img src="{{ asset('images/jumbotron.jpg') }}"  alt="" class="jumbotron-img">
        </div>
        <div class="section">
            @yield('main_content')
        </div>
        @include('partials.commerce')
    </main>
    @include('partials.footer')

    {{-- include footer/ creo in partials --}}
</body>
</html>