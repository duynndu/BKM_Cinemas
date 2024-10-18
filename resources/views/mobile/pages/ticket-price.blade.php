@extends('mobile.layout.main')

@section('title', 'Giá vé')
@section('keywork', 'Giá vé')
@section('description', 'Giá vé')

@section('css')
    <link rel="stylesheet" href="{{ asset('client/css/ticket_price.css') }}">
@endsection
@section('content')
    <div class="page-cinema-list">
        <section class="container">
            <div class="row section">
                <div class="col-md-12">
                    <h1><span style="font-size: 18pt;">Gi&aacute; V&eacute; rạp Touch Cinema - Pleiku Gia Lai</span>
                    </h1>
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#2D-price">Giá vé 2D</a></li>
                        <li><a data-toggle="tab" href="#3D-price">Giá vé 3D</a></li>
                        <li><a data-toggle="tab" href="#holiday-price">
                                <h3>Ngày Lễ</h3>
                            </a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="2D-price" class="tab-pane fade in active">
                            <p><img src="https://m.touchcinema.com/storage/slider-tv/z4045880677164-1ba77b4619d45e773581092b6319ac62.jpg"
                                    alt="" /></p>
                            <p><strong>Ghi ch&uacute;:</strong></p>
                            <p>- Bảng gi&aacute; tr&ecirc;n &aacute;p dụng cho kh&aacute;ch h&agrave;ng c&oacute;
                                thẻ th&agrave;nh vi&ecirc;n, kh&aacute;ch h&agrave;ng kh&ocirc;ng c&oacute; thẻ
                                th&agrave;nh vi&ecirc;n phụ thu 10.000đ/v&eacute; đối với ghế thường,
                                20.000đ/v&eacute; đối với ghế đ&ocirc;i</p>
                            <p>- Bảng gi&aacute; tr&ecirc;n &aacute;p dụng cho suất chiếu th&ocirc;ng thường, suất
                                chiếu sớm (suất chiếu đặc biệt, suất chiếu sneakshow) phụ thu 10.000đ/v&eacute; đối
                                với ghế thường, 20.000đ/v&eacute; đối với ghế đ&ocirc;i</p>
                            <p>- Gi&aacute; v&eacute; khi đặt v&eacute; trực tuyến tr&ecirc;n website v&agrave; ứng
                                dụng Touch Cinema l&agrave; gi&aacute; v&eacute; người lớn</p>
                            <p>- Gi&aacute; v&eacute; học sinh, sinh vi&ecirc;n được &aacute;p dụng cho người từ 22
                                tuổi trở xuống khi mua v&eacute; tại quầy</p>
                            <p>- Gi&aacute; v&eacute; trẻ em, người cao tuổi, đối tượng ưu ti&ecirc;n &aacute;p dụng
                                cho trẻ em, người từ 60 tuổi trở l&ecirc;n, người c&oacute; c&ocirc;ng với
                                c&aacute;ch mạng, người c&oacute; ho&agrave;n cảnh đặc biệt kh&oacute; khăn
                                v&agrave; c&aacute;c đối tượng kh&aacute;c theo quy định của ph&aacute;p luật khi
                                mua v&eacute; tại quầy</p>
                            <p>- Người khuyết tật đặc biệt nặng được miễn gi&aacute; v&eacute;, người khuyết tật
                                nặng được giảm 50% gi&aacute; v&eacute; khi mua v&eacute; tại quầy</p>
                            <p>- Kh&aacute;ch h&agrave;ng khi đến rạp xem phim vui l&ograve;ng chứng thực được độ
                                tuổi ph&ugrave; hợp với phim, được quy định căn cứ v&agrave;o Th&ocirc;ng tư số
                                12/2015/TT-BVHTTDL của Bộ trưởng Bộ Văn h&oacute;a, Thể thao v&agrave; Du lịch
                                c&oacute; hiệu lực thi h&agrave;nh từ ng&agrave;y 01/01/2017. Touch Cinema c&oacute;
                                quyền từ chối việc b&aacute;n v&eacute; hoặc v&agrave;o ph&ograve;ng chiếu nếu
                                kh&aacute;ch h&agrave;ng kh&ocirc;ng tu&acirc;n thủ đ&uacute;ng theo quy định.</p>
                        </div>
                        <div id="3D-price" class="tab-pane fade">
                            <p><img src="https://m.touchcinema.com/storage/slider-app/z4986572984860-008d90891c78bc2a0b13b8acd84f9e88.jpg"
                                    alt="" /></p>
                            <p><strong>Ghi ch&uacute;:</strong></p>
                            <p>- Bảng gi&aacute; tr&ecirc;n &aacute;p dụng cho kh&aacute;ch h&agrave;ng c&oacute;
                                thẻ th&agrave;nh vi&ecirc;n, kh&aacute;ch h&agrave;ng kh&ocirc;ng c&oacute; thẻ
                                th&agrave;nh vi&ecirc;n phụ thu 10.000đ/v&eacute; đối với ghế thường,
                                20.000đ/v&eacute; đối với ghế đ&ocirc;i</p>
                            <p>- Bảng gi&aacute; tr&ecirc;n &aacute;p dụng cho suất chiếu th&ocirc;ng thường, suất
                                chiếu sớm (suất chiếu đặc biệt, suất chiếu sneakshow) phụ thu 10.000đ/v&eacute; đối
                                với ghế thường, 20.000đ/v&eacute; đối với ghế đ&ocirc;i</p>
                            <p>- Gi&aacute; v&eacute; khi đặt v&eacute; trực tuyến tr&ecirc;n website v&agrave; ứng
                                dụng Touch Cinema l&agrave; gi&aacute; v&eacute; người lớn</p>
                            <p>- Gi&aacute; v&eacute; học sinh, sinh vi&ecirc;n được &aacute;p dụng cho người từ 22
                                tuổi trở xuống khi mua v&eacute; tại quầy</p>
                            <p>- Gi&aacute; v&eacute; trẻ em, người cao tuổi, đối tượng ưu ti&ecirc;n &aacute;p dụng
                                cho trẻ em, người từ 60 tuổi trở l&ecirc;n, người c&oacute; c&ocirc;ng với
                                c&aacute;ch mạng, người c&oacute; ho&agrave;n cảnh đặc biệt kh&oacute; khăn
                                v&agrave; c&aacute;c đối tượng kh&aacute;c theo quy định của ph&aacute;p luật khi
                                mua v&eacute; tại quầy</p>
                            <p>- Người khuyết tật đặc biệt nặng được miễn gi&aacute; v&eacute;, người khuyết tật
                                nặng được giảm 50% gi&aacute; v&eacute; khi mua v&eacute; tại quầy</p>
                            <p>- Kh&aacute;ch h&agrave;ng khi đến rạp xem phim vui l&ograve;ng chứng thực được độ
                                tuổi ph&ugrave; hợp với phim, được quy định căn cứ v&agrave;o Th&ocirc;ng tư số
                                12/2015/TT-BVHTTDL của Bộ trưởng Bộ Văn h&oacute;a, Thể thao v&agrave; Du lịch
                                c&oacute; hiệu lực thi h&agrave;nh từ ng&agrave;y 01/01/2017. Touch Cinema c&oacute;
                                quyền từ chối việc b&aacute;n v&eacute; hoặc v&agrave;o ph&ograve;ng chiếu nếu
                                kh&aacute;ch h&agrave;ng kh&ocirc;ng tu&acirc;n thủ đ&uacute;ng theo quy định.</p>
                        </div>
                        <div id="holiday-price" class="tab-pane fade">
                            <p><img src="https://m.touchcinema.com/storage/slide-web/z4103264955341-3bb1395fb3108359cda4af45aee336f4.jpg"
                                    alt="" /></p>
                            <p><img src="https://m.touchcinema.com/storage/slider-app/z4987092572561-73b35dab89fa5c7b14053f8768ea66f4.jpg"
                                    alt="" /></p>
                            <p><img src="https://m.touchcinema.com/storage/slide-web/bangve-2023-ngayle-1.png"
                                    alt="" /></p>

                            <p><strong>Ghi ch&uacute;:</strong></p>
                            <p>- Gi&aacute; v&eacute; Tết Nguy&ecirc;n Đ&aacute;n 2024 &aacute;p dụng v&agrave;o
                                c&aacute;c ng&agrave;y: Từ 10/02/2024 (M&ugrave;ng 1 &Acirc;m Lịch) đến hết
                                14/02/2024 (M&ugrave;ng 5 &Acirc;m Lịch)</p>
                            <p>- Gi&aacute; v&eacute; Lễ &aacute;p dụng v&agrave;o c&aacute;c ng&agrave;y: 01/01,
                                14/02, 08/03, 10/03 &Acirc;m lịch, 30/04, 01/05, 02/09, 20/10, 24/12 v&agrave;
                                ng&agrave;y nghỉ b&ugrave; của người lao động theo quy định của ph&aacute;p luật</p>
                            <p>- Bảng gi&aacute; tr&ecirc;n &aacute;p dụng cho kh&aacute;ch h&agrave;ng c&oacute;
                                thẻ th&agrave;nh vi&ecirc;n, kh&aacute;ch h&agrave;ng kh&ocirc;ng c&oacute; thẻ
                                th&agrave;nh vi&ecirc;n phụ thu 10.000đ/v&eacute; đối với ghế thường,
                                20.000đ/v&eacute; đối với ghế đ&ocirc;i</p>
                            <p>- Bảng gi&aacute; tr&ecirc;n &aacute;p dụng cho suất chiếu th&ocirc;ng thường, suất
                                chiếu sớm (suất chiếu đặc biệt, suất chiếu sneakshow) phụ thu 10.000đ/v&eacute; đối
                                với ghế thường, 20.000đ/v&eacute; đối với ghế đ&ocirc;i</p>
                            <p>- Gi&aacute; v&eacute; khi đặt v&eacute; trực tuyến tr&ecirc;n website v&agrave; ứng
                                dụng Touch Cinema l&agrave; gi&aacute; v&eacute; người lớn</p>
                            <p>- Gi&aacute; v&eacute; học sinh, sinh vi&ecirc;n được &aacute;p dụng cho người từ 22
                                tuổi trở xuống khi mua v&eacute; tại quầy</p>
                            <p>- Gi&aacute; v&eacute; trẻ em, người cao tuổi, đối tượng ưu ti&ecirc;n &aacute;p dụng
                                cho trẻ em, người từ 60 tuổi trở l&ecirc;n, người c&oacute; c&ocirc;ng với
                                c&aacute;ch mạng, người c&oacute; ho&agrave;n cảnh đặc biệt kh&oacute; khăn
                                v&agrave; c&aacute;c đối tượng kh&aacute;c theo quy định của ph&aacute;p luật khi
                                mua v&eacute; tại quầy</p>
                            <p>- Người khuyết tật đặc biệt nặng được miễn gi&aacute; v&eacute;, người khuyết tật
                                nặng được giảm 50% gi&aacute; v&eacute; khi mua v&eacute; tại quầy</p>
                            <p>- Kh&aacute;ch h&agrave;ng khi đến rạp xem phim vui l&ograve;ng chứng thực được độ
                                tuổi ph&ugrave; hợp với phim, được quy định căn cứ v&agrave;o Th&ocirc;ng tư số
                                12/2015/TT-BVHTTDL của Bộ trưởng Bộ Văn h&oacute;a, Thể thao v&agrave; Du lịch
                                c&oacute; hiệu lực thi h&agrave;nh từ ng&agrave;y 01/01/2017. Touch Cinema c&oacute;
                                quyền từ chối việc b&aacute;n v&eacute; hoặc v&agrave;o ph&ograve;ng chiếu nếu
                                kh&aacute;ch h&agrave;ng kh&ocirc;ng tu&acirc;n thủ đ&uacute;ng theo quy định.</p>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="nowshowing">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h2 class="title">
                            <img src="{{ asset('mobile/images/icons/icon-ticket.png') }}" alt="Đặt vé" />
                            <span>Phim đang chiếu</span>
                            <div class="border"></div>
                        </h2>

                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div id="movies">
                            <div class="movie-item" style="    padding-top: 13px;">
                                <div class="movie-thumbnail">
                                    <a href="https://m.touchcinema.com/phim/tee-yod-quy-an-tang-2">
                                        <img src="https://touchcinema.com/medias/hinh-phim-2020/1200wx1800h-9-poster.jpg"
                                            alt="Tee Yod: Quỷ Ăn Tạng 2">
                                    </a>
                                </div>
                                <div class="movie-detail">
                                    <h3>
                                        <a href="https://m.touchcinema.com/phim/tee-yod-quy-an-tang-2">
                                            Tee Yod: Quỷ Ăn Tạng 2
                                        </a>
                                    </h3>
                                    <p>Khởi chiếu: <b>18/10/2024</b><br>
                                        Diễn viên: <b style="text-transform: capitalize;">Nadech Kugimiya, Denise Jelilcha
                                            Kapaun, Mim Rattawadee Wongthong, Junior Kajbhunditt Jaidee, Friend Peerakrit
                                            Phacharaboonyakiat, Nutthatcha Jessica Padovan,...</b>
                                    </p>
                                    <a href="https://www.youtube.com/embed/vHONH3M9RYU?si=ahwhvaJcOBm-h0Bv"
                                        class="view-trailer" data-toggle="trailer">TRAILER</a>
                                </div>
                            </div>
                            <div class="movie-item" style="    padding-top: 13px;">
                                <div class="movie-thumbnail">
                                    <a href="https://m.touchcinema.com/phim/the-wild-robot">
                                        <img src="https://touchcinema.com/uploads/slider-app/1200wx1800h-8-1728372724-poster.jpg"
                                            alt="Robot Hoang Dã (Lồng Tiếng)">
                                    </a>
                                </div>
                                <div class="movie-detail">
                                    <h3>
                                        <a href="https://m.touchcinema.com/phim/the-wild-robot">
                                            Robot Hoang Dã (Lồng Tiếng)
                                        </a>
                                    </h3>
                                    <p>Khởi chiếu: <b>11/10/2024</b><br>
                                        Diễn viên: <b style="text-transform: capitalize;">Lupita Nyong'o, Pedro Pascal,
                                            Catherine O’hara, Bill Nighy,...</b>
                                    </p>
                                    <a href="https://www.youtube.com/embed/2l8_FNIBWLM?si=qgc9BUimByVhX5Hb"
                                        class="view-trailer" data-toggle="trailer">TRAILER</a>
                                </div>
                            </div>
                            <div class="movie-item" style="    padding-top: 13px;">
                                <div class="movie-thumbnail">
                                    <a href="https://m.touchcinema.com/phim/fubao-bao-boi-cua-ong">
                                        <img src="https://touchcinema.com/medias/hinh-phim-2020/470x700-6-poster.jpg"
                                            alt="Fubao: Bảo Bối Của Ông (Phụ Đề)">
                                    </a>
                                </div>
                                <div class="movie-detail">
                                    <h3>
                                        <a href="https://m.touchcinema.com/phim/fubao-bao-boi-cua-ong">
                                            Fubao: Bảo Bối Của Ông (Phụ Đề)
                                        </a>
                                    </h3>
                                    <p>Khởi chiếu: <b>11/10/2024</b><br>
                                        Diễn viên: <b style="text-transform: capitalize;">Fu Bao</b>
                                    </p>
                                    <a href="https://www.youtube.com/embed/6KxlC1Bt3C4?si=9w8OsqfmY60lwM8Y"
                                        class="view-trailer" data-toggle="trailer">TRAILER</a>
                                </div>
                            </div>
                            <div class="movie-item" style="    padding-top: 13px;">
                                <div class="movie-thumbnail">
                                    <a href="https://m.touchcinema.com/phim/con-cam">
                                        <img src="https://touchcinema.com/uploads/slider-app/1200wx1800h-6-1726818229-poster.jpg"
                                            alt="Cám">
                                    </a>
                                </div>
                                <div class="movie-detail">
                                    <h3>
                                        <a href="https://m.touchcinema.com/phim/con-cam">
                                            Cám
                                        </a>
                                    </h3>
                                    <p>Khởi chiếu: <b>20/09/2024</b><br>
                                        Diễn viên: <b style="text-transform: capitalize;">Quốc Cường, Thúy Diễm, Rima Thanh
                                            Vy, Lâm Thanh Mỹ, Hải Nam,...</b>
                                    </p>
                                    <a href="https://www.youtube.com/embed/_8qUFEmPQbc?si=kimJuJwit3uqHuKC"
                                        class="view-trailer" data-toggle="trailer">TRAILER</a>
                                </div>
                            </div>
                            <div class="movie-item" style="    padding-top: 13px;">
                                <div class="movie-thumbnail">
                                    <a href="https://m.touchcinema.com/phim/joker-dien-co-doi">
                                        <img src="https://touchcinema.com/uploads/slider-app/poster-payoff-joker-folie-a-deux-5-1-poster.jpg"
                                            alt="Joker: Điên Có Đôi">
                                    </a>
                                </div>
                                <div class="movie-detail">
                                    <h3>
                                        <a href="https://m.touchcinema.com/phim/joker-dien-co-doi">
                                            Joker: Điên Có Đôi
                                        </a>
                                    </h3>
                                    <p>Khởi chiếu: <b>04/10/2024</b><br>
                                        Diễn viên: <b style="text-transform: capitalize;">Joaquin Phoenix, Lady Gaga,...</b>
                                    </p>
                                    <a href="https://www.youtube.com/embed/4Y1EZZnr9JI?si=JY2laLo-9mcFuHGh"
                                        class="view-trailer" data-toggle="trailer">TRAILER</a>
                                </div>
                            </div>
                            <div class="movie-item" style="    padding-top: 13px;">
                                <div class="movie-thumbnail">
                                    <a href="https://m.touchcinema.com/phim/kumanthong-chieu-hon-vong-nhi">
                                        <img src="https://touchcinema.com/medias/hinh-phim-2020/470x700-5-poster.jpg"
                                            alt="Kumanthong: Chiêu Hồn Vong Nhi">
                                    </a>
                                </div>
                                <div class="movie-detail">
                                    <h3>
                                        <a href="https://m.touchcinema.com/phim/kumanthong-chieu-hon-vong-nhi">
                                            Kumanthong: Chiêu Hồn Vong Nhi
                                        </a>
                                    </h3>
                                    <p>Khởi chiếu: <b>04/10/2024</b><br>
                                        Diễn viên: <b style="text-transform: capitalize;">Cindy Miranda, Althea Ruedas, Max
                                            Nattapol, Jariya Therakaosal, and Emman Esquivel,...</b>
                                    </p>
                                    <a href="https://www.youtube.com/embed/auV7ult9YD0?si=EN0mFpdS8KZqRBTG"
                                        class="view-trailer" data-toggle="trailer">TRAILER</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
