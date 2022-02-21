<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="preload" href="{{ mix('fonts/bloggersans.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    @include('blocks.header')
    <main class="main" id="#content">
        @yield('content')
    </main>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>