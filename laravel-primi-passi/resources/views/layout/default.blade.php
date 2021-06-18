<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('page_title')</title>
</head>
<body>
    {{-- include header/ creo in partials --}}

    <div class="container">
    @yield('main_content')
    </div>

    {{-- include footer/ creo in partials --}}
</body>
</html>