<!DOCTYPE html>
<html lang="en">
@include('admin.layouts.components.head')
<body>
    <div class="wrapper">
        @include('admin.layouts.components.sidebar')
        <div class="main-panel">
            @include('admin.layouts.components.header')
            <div class="container">
                @yield('content')
            </div>
            @include('admin.layouts.components.footer')
        </div>
    </div>
    @include('admin.layouts.components.scripts')
</body>
</html>
