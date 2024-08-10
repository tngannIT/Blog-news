@extends('client.layouts.layout')
@section('content')
    <div class="container-fluid mt-5 pt-3">
        <div class="container">
            <div class="row">

                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold">Liên hệ với chúng tôi</h4>
                            </div>

                            <div class="bg-white border border-top-0 p-4">
                                <img src="https://media.istockphoto.com/id/1452771551/vi/vec-to/n%C3%BAt-li%C3%AAn-h%E1%BB%87-v%E1%BB%9Bi-ch%C3%BAng-t%C3%B4i-b%E1%BA%B1ng-con-tr%E1%BB%8F-b%E1%BA%A5m-con-tr%E1%BB%8F-n%C3%BAt-web-vector.jpg?s=612x612&w=0&k=20&c=R6qWgWhgDtlGJ8S57SRZjt6C6jPsLaibfFfEyH7DTZA=" alt="Contact Biznew" class="img-fluid mb-4">

                                <h5 class="font-weight-bold">Thông tin liên hệ</h5>
                                <p>Nếu bạn có bất kỳ câu hỏi, đề xuất hay yêu cầu nào, đừng ngần ngại liên hệ với chúng tôi qua các thông tin dưới đây. Chúng tôi luôn sẵn sàng lắng nghe và hỗ trợ bạn.</p>

                                <ul class="list-unstyled">
                                    <li><i class="fa fa-map-marker-alt mr-2"></i> Địa chỉ: Số 123, Đường ABC, Quận 1, TP. Hồ Chí Minh</li>
                                    <li><i class="fa fa-phone-alt mr-2"></i> Điện thoại: +84 123 456 789</li>
                                    <li><i class="fa fa-envelope mr-2"></i> Email: <a href="mailto:contact@biznew.com">contact@biznew.com</a></li>
                                    <li><i class="fa fa-globe mr-2"></i> Website: <a href="http://www.biznew.com">www.biznew.com</a></li>
                                </ul>

                                <h5 class="font-weight-bold mt-4">Gửi cho chúng tôi thông điệp của bạn</h5>
                                <p>Bạn có thể sử dụng biểu mẫu dưới đây để gửi thông điệp của mình trực tiếp đến đội ngũ của Biznew. Chúng tôi sẽ phản hồi lại bạn trong thời gian sớm nhất.</p>

                                <form action="{{ route('client.pages.lienhe') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Tên của bạn</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email của bạn</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Thông điệp</label>
                                        <textarea id="message" name="message" cols="30" rows="5" class="form-control" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3">Gửi thông điệp</button>
                                </form>

                                <h5 class="font-weight-bold mt-4">Vị trí của chúng tôi</h5>
                                <p>Bạn có thể tìm thấy vị trí của chúng tôi trên bản đồ dưới đây.</p>

                                <div class="map-responsive">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d245367.87556094592!2d107.91331191326445!3d16.072075932439255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219c792252a13%3A0x1df0cb4b86727e06!2zxJDDoCBO4bq1bmcsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1723221593249!5m2!1svi!2s" width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @include('client.layouts.components.sidebar')
            </div>
        </div>
    </div>

    <a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>
@endsection
