<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="title">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://hello.com">
    <meta property="og:image" content="http://hello.com/assets/banner.jpg">
    <meta property="og:description" content="description">
    <title>title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    @stack('links')
</head>
<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/4a2799c42d.js" crossorigin="anonymous"></script>
    @stack('scripts')
</body>
</html>