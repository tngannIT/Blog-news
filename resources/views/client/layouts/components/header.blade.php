<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-5">
        <div class="col-lg-3">
            <a href="{{route ('client.pages.home')}}" class="navbar-brand p-0 d-none d-lg-block">
                <h1 class="m-0 display-4 text-uppercase text-primary">Biz<span class=" font-weight-normal text-white">News</span></h1>
            </a>
        </div>
        <a href="{{route ('client.pages.home')}}" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 display-4 text-uppercase text-primary">Biz<span class="text-white font-weight-normal">News</span></h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
            <div class="navbar-nav mr-auto py-0">
                <a href="{{route ('client.pages.home')}}" class="nav-item nav-link active">Trang chủ</a>
                <div class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Tin tức</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        @foreach ($categories as $demo)
                        <a href="{{ route('loaitin',$demo->slug) }}.html" class="dropdown-item">{{ $demo->name }}</a>
                        @endforeach
                        <a href="{{route('client.pages.allnews')}}" class="dropdown-item">Tất cả tin</a>
                    </div>
                </div>
                <a href="{{route('client.pages.gioithieu')}}" class="nav-item nav-link">Giới thiệu</a>
                
                <a href="{{route('client.pages.lienhe')}}" class="nav-item nav-link">Liên hệ</a>
                <a href="{{route ('logout')}}" class="nav-item nav-link">Đăng xuất</a>
                {{-- <a href="" class="nav-item nav-link">Đăng nhập</a> --}}
            </div>
            <form action="{{route('timkiem')}}" method="get">
                <div class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 300px;">
                    <input name="q" type="text" class="form-control border-0" placeholder="Tìm kiếm">
                    <div class="input-group-append">
                        <button type="submit" class="input-group-text bg-primary text-dark border-0 px-3"><i
                                class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
            
        </div>
    </nav>
</div>