<!DOCTYPE html>
<html lang="en">

@include('client.layouts.components.head')

<body>
    
    <!-- Navbar Start -->
    @include('client.layouts.components.header')
    <!-- Navbar End -->


    @yield('content')


    <!-- Footer Start -->
    @include('client.layouts.components.footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    @include('client.layouts.components.scripts')
</body>

</html>