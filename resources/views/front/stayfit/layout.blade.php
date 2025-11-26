<!DOCTYPE html>
<html>
@include('front.stayfit.head')

<body>
<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>
    @include('front.stayfit.header')
    @yield('content')
    @include('front.stayfit.footer')
</div>

@include('front.stayfit.script')

</body>
</html>
