<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title-block')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body class="claudia w-75 mx-auto">
    <div  class="container">
        <h1><a href="/">@yield('title')</a></h1>
            @include('inc.loggin')
            @include('inc.search')
            @yield('content')
            @include('inc.footer')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
