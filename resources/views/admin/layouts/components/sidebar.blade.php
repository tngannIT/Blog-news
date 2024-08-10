{{-- <div class="col-3 sidebar border">
    <ul>
        <li><a href="{{ route('admin.user') }}" class="btn ">Quản lý thành viên</a></li>
        <li><a href="{{ route('admin.category') }}" class="btn ">Quản lý danh mục</a></li>
        <li><a href="{{ route('admin.post') }}" class="btn ">Quản lý bài viết</a></li>
        <li><a href="{{ route('admin.dashboard') }}" class="btn">Dashboard</a></li>
    </ul>
</div> --}}

<!-- Sidebar -->
<div class="sidebar sidebar-style-2" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="/admin/dashboard" class="logo">
                <img src="/admin_asset/images/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand"
                    height="20" />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="" class="collapsed" aria-expanded="false">
                        <a class="text-white" href="{{ route('admin.dashboard') }}">
                            <p><i class="fas fa-home"> Dashboard </i></p>
                        </a>
                        <p></p>
                        {{-- <span class="caret"></span> --}}
                    </a>
                    {{-- <div class="collapse" id="dashboard">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="../demo1/index.html">
                                    <span class="sub-item">Dashboard 1</span>
                                </a>
                            </li>
                        </ul>
                    </div> --}}
                </li>


                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#tables">
                        <i class="fas fa-table"></i>
                        <p>QUẢN LÝ</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="tables">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.user') }}">
                                    <span class="sub-item">Quản Lý Thành Viên</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.category') }}">
                                    <span class="sub-item">Quản Lý Danh Mục</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.post') }}">
                                    <span class="sub-item">Quản Lý Bài Viết</span>
                                </a>
                            </li>
                            @if (Auth()->user()->hasRole(['Ban biên tập', 'Admin']))
                                <li>
                                    <a href="{{ route('admin.approve-post') }}">
                                        <span class="sub-item">Duyệt Bài Viết</span>
                                    </a>
                                </li>
                            @endif

                            <li>
                                <a href="{{ route('admin.role') }}">
                                    <span class="sub-item">Quản Lý Vai Trò</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>


            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
