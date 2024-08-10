<div class="col-lg-4">
    <!-- Social Follow Start -->
    <div class="mb-3">
        <div class="section-title mb-0">
            <h4 class="m-0 text-uppercase font-weight-bold">Follow Us</h4>
        </div>
        <div class="bg-white border border-top-0 p-3">
            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #39569E;">
                <i class="fab fa-facebook-f text-center py-4 mr-3"
                    style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                <span class="font-weight-medium">12,345 Fans</span>
            </a>
            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #52AAF4;">
                <i class="fab fa-twitter text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                <span class="font-weight-medium">12,345 Followers</span>
            </a>
            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #0185AE;">
                <i class="fab fa-linkedin-in text-center py-4 mr-3"
                    style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                <span class="font-weight-medium">12,345 Connects</span>
            </a>
            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #C8359D;">
                <i class="fab fa-instagram text-center py-4 mr-3"
                    style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                <span class="font-weight-medium">12,345 Followers</span>
            </a>
            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #DC472E;">
                <i class="fab fa-youtube text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                <span class="font-weight-medium">12,345 Subscribers</span>
            </a>
            <a href="" class="d-block w-100 text-white text-decoration-none" style="background: #055570;">
                <i class="fab fa-vimeo-v text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                <span class="font-weight-medium">12,345 Followers</span>
            </a>
        </div>
    </div>
    <!-- Social Follow End -->

    <!-- Ads Start -->
    <div class="mb-3">
        <div class="section-title mb-0">
            <h4 class="m-0 text-uppercase font-weight-bold">Quảng Cáo</h4>
        </div>
        <div class="bg-white text-center border border-top-0 p-3">
            <a href=""><img class="img-fluid" src="/client_asset/img/news-800x500-2.jpg" alt=""></a>
        </div>
    </div>
    <!-- Ads End -->

    <!-- Popular News Start -->
    <div class="mb-3">
        <div class="section-title mb-0">
            <h4 class="m-0 text-uppercase font-weight-bold">Tin xu hướng</h4>
        </div>
        <div class="bg-white border border-top-0 p-3">
            @foreach ($tinmoinhat as $tin)
                <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                    <img width="100px" class="img-fluid" src="{{ $tin->thumbnail }}" alt="">
                    <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                                href="{{ route('loaitin', $tin->categories->first()->slug) }}.html">{{ $tin->categories->first()->name }}</a>
                            <a class="text-body"
                                href=""><small>{{ $tin->created_at->format('d/m/Y') }}</small></a>
                        </div>
                        <a class="h6 m-0 text-secondary text-uppercase font-weight-bold"
                            href="{{ route('tinchitiet', $tin->slug) }}.html">{{ $tin->name }}</a>
                    </div>
                </div>
            @endforeach

            {{-- <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                <img class="img-fluid" src="/client_asset/img/news-110x110-2.jpg" alt="">
                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                    </div>
                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                </div>
            </div> --}}
            {{-- <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                <img class="img-fluid" src="/client_asset/img/news-110x110-3.jpg" alt="">
                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                    </div>
                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                </div>
            </div> --}}
            {{-- <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                <img class="img-fluid" src="/client_asset/img/news-110x110-4.jpg" alt="">
                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                    </div>
                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                </div>
            </div> --}}
            {{-- <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                <img class="img-fluid" src="/client_asset/img/news-110x110-5.jpg" alt="">
                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                    </div>
                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- Popular News End -->

    <!-- Newsletter Start -->
    <div class="mb-3">
        <div class="section-title mb-0">
            <h4 class="m-0 text-uppercase font-weight-bold">Newsletter</h4>
        </div>
        <div class="bg-white text-center border border-top-0 p-3">
            <p>Aliqu justo et labore at eirmod justo sea erat diam dolor diam vero kasd</p>
            <div class="input-group mb-2" style="width: 100%;">
                <input type="text" class="form-control form-control-lg" placeholder="Your Email">
                <div class="input-group-append">
                    <button class="btn btn-primary font-weight-bold px-3">Sign Up</button>
                </div>
            </div>
            <small>Lorem ipsum dolor sit amet elit</small>
        </div>
    </div>
    <!-- Newsletter End -->

    <!-- Tags Start -->
    <div class="mb-3">
        <div class="section-title mb-0">
            <h4 class="m-0 text-uppercase font-weight-bold">Danh mục</h4>
        </div>
        <div class="bg-white border border-top-0 p-3">
            @foreach ($categories as $item)
                <div class="d-flex flex-wrap m-n1">
                    <a href="{{ route('loaitin',$item->slug) }}.html" class="btn btn-sm btn-outline-secondary m-1">{{$item->name}}</a>
                </div>
            @endforeach

        </div>

    </div>
    <!-- Tags End -->
</div>
