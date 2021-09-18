<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('tittle')</title>
    @include('face1/template/link')
</head>

<body>
    @include('face1/template/header')
    @yield('body')
    @include('face1/template/footer')
</body>

</html>
