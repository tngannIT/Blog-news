@extends('client.layouts.layout')
@section('content')
    <div class="container-fluid mt-5 pt-3">
        <div class="container">
            <div class="row">

                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">

                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold">Giới thiệu về Biznew</h4>
                            </div>

                            <div class="bg-white border border-top-0 p-4">
                                <img src="https://www.hostinger.vn/huong-dan/wp-content/uploads/sites/10/2017/10/cach-tao-blog.webp" alt="Biznew Introduction" class="img-fluid mb-4">
                                
                                <h5 class="font-weight-bold">Chào mừng đến với Biznew!</h5>
                                <p>Bạn đang truy cập vào Biznew, một trang blog chuyên cung cấp những thông tin mới nhất về kinh doanh, thị trường, công nghệ và các xu hướng phát triển đang diễn ra trên toàn cầu. Chúng tôi cam kết đem đến cho bạn những bài viết chất lượng, mang tính phân tích sâu sắc và hữu ích cho độc giả.</p>

                                <img src="https://ngocdenroi.com/wp-content/uploads/2018/11/huong-dan-cach-tao-blog-wordpress-kiem-tien.png" alt="Biznew Mission" class="img-fluid mb-4">
                                <h5 class="font-weight-bold">Sứ mệnh của chúng tôi</h5>
                                <p>Tại Biznew, chúng tôi tin rằng thông tin chính xác và kịp thời là chìa khóa để đưa ra những quyết định thông minh. Chính vì thế, sứ mệnh của chúng tôi là trở thành nguồn tin cậy, mang đến cho bạn cái nhìn toàn diện về các sự kiện, xu hướng trong lĩnh vực kinh doanh và công nghệ.</p>

                
                                <h5 class="font-weight-bold">Chúng tôi làm gì?</h5>
                                <p>Biznew cung cấp các bài viết, phân tích chuyên sâu về:</p>
                                <ul>
                                    <li>Kinh doanh: Cập nhật các xu hướng kinh doanh mới nhất, phân tích chiến lược của các doanh nghiệp hàng đầu.</li>
                                    <li>Thị trường: Thông tin về các biến động thị trường, dự báo kinh tế và tài chính.</li>
                                    <li>Công nghệ: Giới thiệu các công nghệ mới, xu hướng công nghệ tương lai và tác động của công nghệ đến doanh nghiệp.</li>
                                    <li>Phát triển cá nhân: Những lời khuyên, chiến lược giúp bạn phát triển kỹ năng, nâng cao năng lực bản thân trong công việc và cuộc sống.</li>
                                </ul>

                                <img src="https://hoangvietduc.com/wp-content/uploads/2021/02/cach-tao-blog-wordpress-mien-phi.jpg" alt="Why Choose Us" class="img-fluid mb-4">
                                <h5 class="font-weight-bold">Tại sao chọn Biznew?</h5>
                                <p>Với đội ngũ biên tập viên, phóng viên có kinh nghiệm và chuyên môn cao, Biznew luôn nỗ lực mang đến những bài viết sắc sảo, cập nhật liên tục và phù hợp với nhu cầu của độc giả. Chúng tôi tự hào là nguồn thông tin đáng tin cậy cho các doanh nhân, nhà đầu tư và những ai quan tâm đến sự phát triển của thị trường và công nghệ.</p>

                                <img src="https://media.istockphoto.com/id/1452771551/vi/vec-to/n%C3%BAt-li%C3%AAn-h%E1%BB%87-v%E1%BB%9Bi-ch%C3%BAng-t%C3%B4i-b%E1%BA%B1ng-con-tr%E1%BB%8F-b%E1%BA%A5m-con-tr%E1%BB%8F-n%C3%BAt-web-vector.jpg?s=612x612&w=0&k=20&c=R6qWgWhgDtlGJ8S57SRZjt6C6jPsLaibfFfEyH7DTZA=" alt="Contact Us" class="img-fluid mb-4">
                                <h5 class="font-weight-bold">Liên hệ với chúng tôi</h5>
                                <p>Chúng tôi luôn sẵn sàng lắng nghe ý kiến đóng góp từ bạn. Hãy liên hệ với chúng tôi qua <a href="mailto:contact@biznew.com">contact@biznew.com</a> hoặc theo dõi chúng tôi trên các kênh mạng xã hội để cập nhật những tin tức mới nhất.</p>

                                <p>Cảm ơn bạn đã ghé thăm Biznew. Chúc bạn có những trải nghiệm thú vị và bổ ích tại đây!</p>
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
