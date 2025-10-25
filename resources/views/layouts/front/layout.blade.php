<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.front.head')
    @vite(['resources/js/frontJS/front_app.js'])
</head>
<body data-spy="scroll" data-target=".main-nav">
@yield('content')
@include('layouts.front.script')
</body>
</html>
