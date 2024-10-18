@extends('mobile.layout.main')

@section('title', 'BKM Movive')
@section('keywork', 'BKM Movive')
@section('description', 'BKM Movive')
@section('content')
    <div id="home-slider">
        <div id="carousel-id" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-id" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                <li data-target="#carousel-id" data-slide-to="2" class=""></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <a href="https://touchcinema.com/phim/lt-fubao-bao-boi-cua-ong">
                        <img src="https://touchcinema.com/storage/slider-app/my-dearest-fubao-3-1728293110512.jpg">
                    </a>
                </div>
                <div class="item">
                    <a href="https://touchcinema.com/phim/the-wild-robot">
                        <img src="https://touchcinema.com/storage/slider-app/2048wx858h-16-1728375048.jpg">
                    </a>
                </div>
                <div class="item">
                    <a href="https://touchcinema.com/phim/tee-yod-quy-an-tang-2">
                        <img src="https://touchcinema.com/storage/slide-web/2048wx858h-15.jpg">
                    </a>
                </div>
            </div>
            <a class="left carousel-control" href="#carousel-id" data-slide="prev">
                <span class="arrow arrow-left"
                    style="background-image: url({{ asset('mobile/images/arrow-left.png') }})"></span>
            </a>
            <a class="right carousel-control" href="#carousel-id" data-slide="next">
                <span class="arrow arrow-right"
                    style="background-image: url({{ asset('mobile/images/arrow-right.png') }})"></span>
            </a>
        </div>
    </div>


    <div id="movies">
        <div id="dangchieu" class="">
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
                        Diễn viên: <b style="text-transform: capitalize;">Nadech Kugimiya, Denise Jelilcha Kapaun, Mim
                            Rattawadee Wongthong, Junior Kajbhunditt Jaidee, Friend Peerakrit Phacharaboonyakiat, Nutthatcha
                            Jessica Padovan,...</b>
                    </p>
                    <a href="https://www.youtube.com/embed/vHONH3M9RYU?si=ahwhvaJcOBm-h0Bv" class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
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
                        Diễn viên: <b style="text-transform: capitalize;">Lupita Nyong'o, Pedro Pascal, Catherine O’hara,
                            Bill Nighy,...</b>
                    </p>
                    <a href="https://www.youtube.com/embed/2l8_FNIBWLM?si=qgc9BUimByVhX5Hb" class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
                </div>
            </div>
            <div class="movie-item" style="    padding-top: 13px;">
                <div class="movie-thumbnail">
                    <a href="https://m.touchcinema.com/phim/lt-fubao-bao-boi-cua-ong">
                        <img src="https://touchcinema.com/medias/hinh-phim-2020/470x700-6-poster.jpg"
                            alt="Fubao: Bảo Bối Của Ông (Lồng Tiếng)">
                    </a>
                </div>
                <div class="movie-detail">
                    <h3>
                        <a href="https://m.touchcinema.com/phim/lt-fubao-bao-boi-cua-ong">
                            Fubao: Bảo Bối Của Ông (Lồng Tiếng)
                        </a>
                    </h3>
                    <p>Khởi chiếu: <b>11/10/2024</b><br>
                        Diễn viên: <b style="text-transform: capitalize;">Fu Bao</b>
                    </p>
                    <a href="https://www.youtube.com/embed/6KxlC1Bt3C4?si=9w8OsqfmY60lwM8Y" class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
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
                    <a href="https://www.youtube.com/embed/6KxlC1Bt3C4?si=9w8OsqfmY60lwM8Y" class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
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
                        Diễn viên: <b style="text-transform: capitalize;">Quốc Cường, Thúy Diễm, Rima Thanh Vy, Lâm Thanh
                            Mỹ, Hải Nam,...</b>
                    </p>
                    <a href="https://www.youtube.com/embed/_8qUFEmPQbc?si=kimJuJwit3uqHuKC" class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
                </div>
            </div>
            <div class="movie-item" style="    padding-top: 13px;">
                <div class="movie-thumbnail">
                    <a href="https://m.touchcinema.com/phim/domino-loi-thoat-cuoi-cung">
                        <img src="https://touchcinema.com/uploads/slider-app/domino-payoff-poster-kt-facebook-1-poster.jpg"
                            alt="Domino: Lối Thoát Cuối Cùng">
                    </a>
                </div>
                <div class="movie-detail">
                    <h3>
                        <a href="https://m.touchcinema.com/phim/domino-loi-thoat-cuoi-cung">
                            Domino: Lối Thoát Cuối Cùng
                        </a>
                    </h3>
                    <p>Khởi chiếu: <b>11/10/2024</b><br>
                        Diễn viên: <b style="text-transform: capitalize;">Thuận Nguyễn, Quốc Cường, Huỳnh Anh Tuấn, Henry
                            Nguyễn, Cát Hạ,...</b>
                    </p>
                    <a href="https://www.youtube.com/embed/f2FCeOxiEbo?si=Bw_BbhQo-Kns5ArP" class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
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
                    <a href="https://www.youtube.com/embed/4Y1EZZnr9JI?si=JY2laLo-9mcFuHGh" class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
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
                        Diễn viên: <b style="text-transform: capitalize;">Cindy Miranda, Althea Ruedas, Max Nattapol,
                            Jariya Therakaosal, and Emman Esquivel,...</b>
                    </p>
                    <a href="https://www.youtube.com/embed/auV7ult9YD0?si=EN0mFpdS8KZqRBTG" class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
                </div>
            </div>
        </div>
        <div id="sapchieu" class=" boxmovie ">
            <div class="movie-item" style="    padding-top: 13px;">
                <div class="movie-thumbnail">
                    <a href="phim/co-dau-hao-mon.html">
                        <img src="../touchcinema.com/uploads/slider-app/rap-470x700-poster.png" alt="Cô Dâu Hào Môn" />
                    </a>
                    <div class="hot" style="top: 5px;right: 0;width: 30px;">
                        <img src="images/icons/sneak.png">
                    </div>
                </div>
                <div class="movie-detail">
                    <h3>
                        <a href="phim/co-dau-hao-mon.html">
                            Cô Dâu Hào Môn
                        </a>
                    </h3>
                    <p>Khởi chiếu: <b>18/10/2024</b><br />
                        Diễn viên: <b style="text-transform: capitalize;">Uyển Ân, Samuel An, Thu Trang, Lê Giang,
                            Kiều Minh Tuấn, NSND Hồng Vân,...</b>
                    </p>
                    <a href='https://www.youtube.com/embed/QJ8E9R70csY?si=NiCXyr4Rxeh17J1a' class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
                </div>
            </div>
            <div class="movie-item" style="    padding-top: 13px;">
                <div class="movie-thumbnail">
                    <a href="phim/venom-keo-cuoi.html">
                        <img src="../touchcinema.com/uploads/slider-app/470x700-7-poster.jpg" alt="Venom: Kèo Cuối" />
                    </a>
                    <div class="hot" style="top: 5px;right: 0;width: 30px;">
                        <img src="images/icons/sneak.png">
                    </div>
                </div>
                <div class="movie-detail">
                    <h3>
                        <a href="phim/venom-keo-cuoi.html">
                            Venom: Kèo Cuối
                        </a>
                    </h3>
                    <p>Khởi chiếu: <b>25/10/2024</b><br />
                        Diễn viên: <b style="text-transform: capitalize;">Tom Hardy, Juno Temple, Chiwetel Ejiofor,
                            Clark Backo, Stephen Graham,..</b>
                    </p>
                    <a href='https://www.youtube.com/embed/id1rfr_KZWg?si=wzJNemi0vyUVlYK5' class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
                </div>
            </div>
            <div class="movie-item" style="    padding-top: 13px;">
                <div class="movie-thumbnail">
                    <a href="phim/ac-quy-truy-hon.html">
                        <img src="../touchcinema.com/medias/hinh-phim-2020/referenceschemeheadofficeallowplaceholdertrueheight700ldapp-22-poster.jpg"
                            alt="Ác Quỷ Truy Hồn" />
                    </a>
                </div>
                <div class="movie-detail">
                    <h3>
                        <a href="phim/ac-quy-truy-hon.html">
                            Ác Quỷ Truy Hồn
                        </a>
                    </h3>
                    <p>Khởi chiếu: <b>25/10/2024</b><br />
                        Diễn viên: <b style="text-transform: capitalize;">Indah Permatasari, Claresta Taufan
                            Kusumarina, José Rizal Manua, Della Dartyan, Retno Soetarto,...</b>
                    </p>
                    <a href='https://www.youtube.com/embed/OVLUJkgCpJ0?si=3ujDOjJIUG6Xk_uc' class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
                </div>
            </div>
            <div class="movie-item" style="    padding-top: 13px;">
                <div class="movie-thumbnail">
                    <a href="phim/thien-duong-qua-bao.html">
                        <img src="../touchcinema.com/medias/hinh-phim-2020/470x700-8-poster.jpg"
                            alt="Thiên Đường Quả Báo" />
                    </a>
                </div>
                <div class="movie-detail">
                    <h3>
                        <a href="phim/thien-duong-qua-bao.html">
                            Thiên Đường Quả Báo
                        </a>
                    </h3>
                    <p>Khởi chiếu: <b>01/11/2024</b><br />
                        Diễn viên: <b style="text-transform: capitalize;">Jeff Satur, Engfa Waraha, Seeda Puapimo,
                            Harit Buayoi, Pongsakorn Mettarikanon,...</b>
                    </p>
                    <a href='https://www.youtube.com/embed/oZDcC8RKz-I?si=aA3kCDhgjNR6T1v3' class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
                </div>
            </div>
            <div class="movie-item" style="    padding-top: 13px;">
                <div class="movie-thumbnail">
                    <a href="phim/ngay-xua-co-mot-chuyen-tinh.html">
                        <img src="../touchcinema.com/uploads/slider-app/main-social-poster.jpg"
                            alt="Ngày Xưa Có Một Chuyện Tình" />
                    </a>
                </div>
                <div class="movie-detail">
                    <h3>
                        <a href="phim/ngay-xua-co-mot-chuyen-tinh.html">
                            Ngày Xưa Có Một Chuyện Tình
                        </a>
                    </h3>
                    <p>Khởi chiếu: <b>01/11/2024</b><br />
                        Diễn viên: <b style="text-transform: capitalize;">Avin Lu, Ngọc Xuân, Đỗ Nhật Hoàng, Thanh
                            Tú, Bảo Tiên, Hạo Khang,...</b>
                    </p>
                    <a href='https://www.youtube.com/embed/qaeHlk0OXec?si=i-299ewSVwrL4NCe' class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
                </div>
            </div>
            <div class="movie-item" style="    padding-top: 13px;">
                <div class="movie-thumbnail">
                    <a href="phim/red-one.html">
                        <img src="../touchcinema.com/uploads/slider-app/rsz-redone-insta-vert-main-1638x2048-intl-poster.jpg"
                            alt="Mật Mã Đỏ" />
                    </a>
                </div>
                <div class="movie-detail">
                    <h3>
                        <a href="phim/red-one.html">
                            Mật Mã Đỏ
                        </a>
                    </h3>
                    <p>Khởi chiếu: <b>08/11/2024</b><br />
                        Diễn viên: <b style="text-transform: capitalize;">Dwayne Johnson, Chris Evans, Lucy
                            Liu,...</b>
                    </p>
                    <a href='https://www.youtube.com/embed/2T_mKyH17mY?si=2grp1_NOf5JXTz69' class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
                </div>
            </div>
            <div class="movie-item" style="    padding-top: 13px;">
                <div class="movie-thumbnail">
                    <a href="phim/cu-li-khong-bao-gio-khoc.html">
                        <img src="../touchcinema.com/medias/hinh-phim-2020/clnc-digitalposter-vnmarket-2048-1-poster.jpg"
                            alt="Cu Li Không Bao Giờ Khóc" />
                    </a>
                </div>
                <div class="movie-detail">
                    <h3>
                        <a href="phim/cu-li-khong-bao-gio-khoc.html">
                            Cu Li Không Bao Giờ Khóc
                        </a>
                    </h3>
                    <p>Khởi chiếu: <b>15/11/2024</b><br />
                        Diễn viên: <b style="text-transform: capitalize;">NSND Minh Châu, Hoàng Hà, Hà Phương, Xuân
                            An,...</b>
                    </p>
                    <a href='https://www.youtube.com/embed/kMjlJkmt5nk?si=UoQTAIYCxZBYKBWw' class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
                </div>
            </div>
            <div class="movie-item" style="    padding-top: 13px;">
                <div class="movie-thumbnail">
                    <a href="phim/linh-mieu.html">
                        <img src="../touchcinema.com/uploads/slider-app/470x700-9-poster.jpg" alt="Linh Miêu" />
                    </a>
                </div>
                <div class="movie-detail">
                    <h3>
                        <a href="phim/linh-mieu.html">
                            Linh Miêu
                        </a>
                    </h3>
                    <p>Khởi chiếu: <b>22/11/2024</b><br />
                        Diễn viên: <b style="text-transform: capitalize;">Hồng Đào, Thiên An, Thuỳ Tiên, Văn Anh,
                            Samuel An,...</b>
                    </p>
                    <a href='https://www.youtube.com/embed/4oxoPMxBO6s?si=jG1rYq7SHh0z0de6' class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
                </div>
            </div>
            <div class="movie-item" style="    padding-top: 13px;">
                <div class="movie-thumbnail">
                    <a href="phim/wicked.html">
                        <img src="../touchcinema.com/medias/hinh-phim-2021/wicked-cgv-poster.jpg" alt="Wicked" />
                    </a>
                </div>
                <div class="movie-detail">
                    <h3>
                        <a href="phim/wicked.html">
                            Wicked
                        </a>
                    </h3>
                    <p>Khởi chiếu: <b>29/11/2024</b><br />
                        Diễn viên: <b style="text-transform: capitalize;">Cynthia Erivo, Ariana Grande, Jonathan
                            Bailey</b>
                    </p>
                    <a href='https://www.youtube.com/embed/IILf3ZEBnmM?si=eycqpEQixRX9hVZf' class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
                </div>
            </div>
            <div class="movie-item" style="    padding-top: 13px;">
                <div class="movie-thumbnail">
                    <a href="phim/hanh-trinh-cua-moana-2.html">
                        <img src="../touchcinema.com/medias/hinh-phim-2021/h-nh-tr-nh-c-a-moana-2-poster.jpg"
                            alt="Hành Trình Của Moana 2" />
                    </a>
                </div>
                <div class="movie-detail">
                    <h3>
                        <a href="phim/hanh-trinh-cua-moana-2.html">
                            Hành Trình Của Moana 2
                        </a>
                    </h3>
                    <p>Khởi chiếu: <b>29/11/2024</b><br />
                        Diễn viên: <b style="text-transform: capitalize;">Auli&#039;i Cravalho, Dwayne Johnson, Alan
                            Tudyk,...</b>
                    </p>
                    <a href='https://www.youtube.com/embed/yrohKVnDX7Q?si=guYQOBKC1wcB26YX' class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
                </div>
            </div>
            <div class="movie-item" style="    padding-top: 13px;">
                <div class="movie-thumbnail">
                    <a href="phim/cong-tu-bac-lieu.html">
                        <img src="../touchcinema.com/medias/hinh-phim-2020/cong-tu-bac-lieu-1st-look-poster-kc-122024-1-poster.jpg"
                            alt="Công Tử Bạc Liêu" />
                    </a>
                </div>
                <div class="movie-detail">
                    <h3>
                        <a href="phim/cong-tu-bac-lieu.html">
                            Công Tử Bạc Liêu
                        </a>
                    </h3>
                    <p>Khởi chiếu: <b>13/12/2024</b><br />
                        Diễn viên: <b style="text-transform: capitalize;">Thuận Nguyễn, Quốc Huy, Song Luân,...</b>
                    </p>
                    <a href='https://www.youtube.com/embed/bmkR2EY_hcY?si=zrbyGRqfgAPT0Csb' class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
                </div>
            </div>
            <div class="movie-item" style="    padding-top: 13px;">
                <div class="movie-thumbnail">
                    <a href="phim/chua-te-cua-nhung-chiec-nhan-cuoc-chien-cua-rohirrim.html">
                        <img src="../touchcinema.com/medias/hinh-phim-2021/mv5byji1ntmznjgtyjfmos00yzfjltg3mtetmdgxztcwzte2ndm2xkeyxkfqcgdeqxvymtuynjc3ndq4-v1-poster.jpg"
                            alt="Chúa Tể Của Những Chiếc Nhẫn: Cuộc Chiến Của Rohirrim" />
                    </a>
                </div>
                <div class="movie-detail">
                    <h3>
                        <a href="phim/chua-te-cua-nhung-chiec-nhan-cuoc-chien-cua-rohirrim.html">
                            Chúa Tể Của Những Chiếc Nhẫn: Cuộc Chiến Của Rohirrim
                        </a>
                    </h3>
                    <p>Khởi chiếu: <b>13/12/2024</b><br />
                        Diễn viên: <b style="text-transform: capitalize;">Brian Cox, Miranda Otto, Shaun
                            Dooley,...</b>
                    </p>
                    <a href='https://www.youtube.com/embed/_ra5S4RDcu8?si=RYo8N9SiKv5d2DES' class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
                </div>
            </div>
            <div class="movie-item" style="    padding-top: 13px;">
                <div class="movie-thumbnail">
                    <a href="phim/kraven-tho-san-thu-linh.html">
                        <img src="../touchcinema.com/medias/hinh-phim-2021/kraventhehunterpostervn-poster.jpg"
                            alt="Kraven Thợ Săn Thủ Lĩnh" />
                    </a>
                </div>
                <div class="movie-detail">
                    <h3>
                        <a href="phim/kraven-tho-san-thu-linh.html">
                            Kraven Thợ Săn Thủ Lĩnh
                        </a>
                    </h3>
                    <p>Khởi chiếu: <b>13/12/2024</b><br />
                        Diễn viên: <b style="text-transform: capitalize;">Aaron Taylor-Johnson, Russell Crowe,
                            Ariana DeBose, Fred Hechinger, Christopher Abbott</b>
                    </p>
                    <a href='https://www.youtube.com/embed/wWjhT0sbifU' class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
                </div>
            </div>
            <div class="movie-item" style="    padding-top: 13px;">
                <div class="movie-thumbnail">
                    <a href="phim/vua-su-tu-mufasa.html">
                        <img src="../touchcinema.com/uploads/slider-app/mufasa-poster.jpg" alt="Vua Sư Tử: Mufasa" />
                    </a>
                </div>
                <div class="movie-detail">
                    <h3>
                        <a href="phim/vua-su-tu-mufasa.html">
                            Vua Sư Tử: Mufasa
                        </a>
                    </h3>
                    <p>Khởi chiếu: <b>20/12/2024</b><br />
                        Diễn viên: <b style="text-transform: capitalize;">Seth Rogen, Billy Eichner, Kelvin Harrison
                            Jr., Aaron Pierre</b>
                    </p>
                    <a href='https://www.youtube.com/embed/RF_zbL3vm74?si=j7Mkq-qZpC3yN1FU' class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
                </div>
            </div>
            <div class="movie-item" style="    padding-top: 13px;">
                <div class="movie-thumbnail">
                    <a href="phim/nhim-sonic-3.html">
                        <img src="../touchcinema.com/medias/hinh-phim-2021/rdoxrn0g21-poster.png" alt="Nhím Sonic 3" />
                    </a>
                </div>
                <div class="movie-detail">
                    <h3>
                        <a href="phim/nhim-sonic-3.html">
                            Nhím Sonic 3
                        </a>
                    </h3>
                    <p>Khởi chiếu: <b>20/12/2024</b><br />
                        Diễn viên: <b style="text-transform: capitalize;">Melody Nosipho Niemann, Adam Pally,
                            Natasha Rothwell, Tom Butler, Shemar Moore</b>
                    </p>
                    <a href='https://www.youtube.com/embed/S5wdFSRYoOY?si=FUm0m8YqIs3xpQYk' class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
                </div>
            </div>
            <div class="movie-item" style="    padding-top: 13px;">
                <div class="movie-thumbnail">
                    <a href="phim/kinh-van-hoa.html">
                        <img src="../touchcinema.com/medias/hinh-phim-2021/d-n-k-nh-v-n-hoa-1-poster.jpg"
                            alt="Kính Vạn Hoa" />
                    </a>
                </div>
                <div class="movie-detail">
                    <h3>
                        <a href="phim/kinh-van-hoa.html">
                            Kính Vạn Hoa
                        </a>
                    </h3>
                    <p>Khởi chiếu: <b>27/12/2024</b><br />
                        Diễn viên: <b style="text-transform: capitalize;">Hùng Anh, Nhật Linh, Phương Duyên,...</b>
                    </p>
                    <a href='https://www.youtube.com/embed/81vxzQXxWwE?si=do38D6TXuUI8inLn' class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
                </div>
            </div>
            <div class="movie-item" style="    padding-top: 13px;">
                <div class="movie-thumbnail">
                    <a href="phim/nha-gia-tien.html">
                        <img src="../touchcinema.com/medias/hinh-phim-2021/435259758-855491943284244-5448498450053626536-n-poster.jpg"
                            alt="Nhà Gia Tiên" />
                    </a>
                </div>
                <div class="movie-detail">
                    <h3>
                        <a href="phim/nha-gia-tien.html">
                            Nhà Gia Tiên
                        </a>
                    </h3>
                    <p>Khởi chiếu: <b>27/12/2024</b><br />
                        Diễn viên: <b style="text-transform: capitalize;">Huỳnh Lập</b>
                    </p>
                    <a href='https://www.youtube.com/embed/H_3aWgi0Kps?si=hgbvuh4c4L_3hQJ6' class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
                </div>
            </div>
            <div class="movie-item" style="    padding-top: 13px;">
                <div class="movie-thumbnail">
                    <a href="phim/bo-tu-bao-thu.html">
                        <img src="../touchcinema.com/medias/hinh-phim-2020/451842446-993577042772243-5681899235452508402-n-poster.jpg"
                            alt="Bộ Tứ Báo Thủ" />
                    </a>
                </div>
                <div class="movie-detail">
                    <h3>
                        <a href="phim/bo-tu-bao-thu.html">
                            Bộ Tứ Báo Thủ
                        </a>
                    </h3>
                    <p>Khởi chiếu: <b>29/01/2025</b><br />
                        Diễn viên: <b style="text-transform: capitalize;">Trấn Thành</b>
                    </p>
                    <a href='https://www.youtube.com/embed/HhPU8zDDu1E?si=9VlvM2U38a2InQKd' class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
                </div>
            </div>
            <div class="movie-item" style="    padding-top: 13px;">
                <div class="movie-thumbnail">
                    <a href="phim/yeu-nham-ban-than-0.html">
                        <img src="../touchcinema.com/medias/hinh-phim-2020/456948298-122101909724493900-5494690113619051192-n-poster.jpg"
                            alt="Yêu Nhầm Bạn Thân" />
                    </a>
                </div>
                <div class="movie-detail">
                    <h3>
                        <a href="phim/yeu-nham-ban-than-0.html">
                            Yêu Nhầm Bạn Thân
                        </a>
                    </h3>
                    <p>Khởi chiếu: <b>29/01/2025</b><br />
                        Diễn viên: <b style="text-transform: capitalize;">Kaity Nguyễn, Trần Ngọc Vàng,...</b>
                    </p>
                    <a href='https://www.youtube.com/embed/azCdkvj_dv8?si=iIMEG8chJXWjQRsD' class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
                </div>
            </div>
            <div class="movie-item" style="    padding-top: 13px;">
                <div class="movie-thumbnail">
                    <a href="phim/chuyen-xe-nhu-y.html">
                        <img src="../touchcinema.com/medias/hinh-phim-2020/65fe69d9556e4414580158-poster.png"
                            alt="Chuyến Xe Như Ý" />
                    </a>
                </div>
                <div class="movie-detail">
                    <h3>
                        <a href="phim/chuyen-xe-nhu-y.html">
                            Chuyến Xe Như Ý
                        </a>
                    </h3>
                    <p>Khởi chiếu: <b>29/01/2025</b><br />
                        Diễn viên: <b style="text-transform: capitalize;">Casting...</b>
                    </p>
                    <a href='https://www.youtube.com/embed/tujn7UdHqDE?si=lBbw9soMSHcxehdT' class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
                </div>
            </div>
            <div class="movie-item" style="    padding-top: 13px;">
                <div class="movie-thumbnail">
                    <a href="phim/den-am-hon.html">
                        <img src="../touchcinema.com/medias/hinh-phim-2020/461687400-122150765732281145-8423764738770886234-n-poster.jpg"
                            alt="Đèn Âm Hồn" />
                    </a>
                </div>
                <div class="movie-detail">
                    <h3>
                        <a href="phim/den-am-hon.html">
                            Đèn Âm Hồn
                        </a>
                    </h3>
                    <p>Khởi chiếu: <b>29/01/2025</b><br />
                        Diễn viên: <b style="text-transform: capitalize;">Casting...</b>
                    </p>
                    <a href='https://www.youtube.com/embed/ab1a9QjlBGA?si=EmCl3p4LFzXog9Ud' class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
                </div>
            </div>
            <div class="movie-item" style="    padding-top: 13px;">
                <div class="movie-thumbnail">
                    <a href="phim/mikey-17.html">
                        <img src="../touchcinema.com/medias/hinh-phim-2021/y5rrebdzsggpkb2u52rxmqtybn0-poster.jpg"
                            alt="Mickey 17" />
                    </a>
                </div>
                <div class="movie-detail">
                    <h3>
                        <a href="phim/mikey-17.html">
                            Mickey 17
                        </a>
                    </h3>
                    <p>Khởi chiếu: <b>31/01/2025</b><br />
                        Diễn viên: <b style="text-transform: capitalize;">Robert Pattinson, Toni Collette, Naomi
                            Ackie,...</b>
                    </p>
                    <a href='https://www.youtube.com/embed/DoXFDZo7JdA' class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
                </div>
            </div>
            <div class="movie-item" style="    padding-top: 13px;">
                <div class="movie-thumbnail">
                    <a href="phim/captain-america-the-gioi-moi.html">
                        <img src="../touchcinema.com/medias/hinh-phim-2021/captain-america-teaserdebut-1sht-vie-poster.jpg"
                            alt="Captain America: Thế Giới Mới" />
                    </a>
                </div>
                <div class="movie-detail">
                    <h3>
                        <a href="phim/captain-america-the-gioi-moi.html">
                            Captain America: Thế Giới Mới
                        </a>
                    </h3>
                    <p>Khởi chiếu: <b>14/02/2025</b><br />
                        Diễn viên: <b style="text-transform: capitalize;">Harrison Ford, Anthoy Mackie, Giancarlo
                            Esposito, Rosa Salazar, Seth Rollins, Shira Haas,...</b>
                    </p>
                    <a href='https://www.youtube.com/embed/YPlOccaCjzA?si=uK0dG7Hr3Nw5wQuR' class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
                </div>
            </div>
            <div class="movie-item" style="    padding-top: 13px;">
                <div class="movie-thumbnail">
                    <a href="phim/nang-bach-tuyet.html">
                        <img src="../touchcinema.com/medias/hinh-phim-2021/snow-white-teaser-vietnam-4x5-ig-2-poster.jpg"
                            alt="Nàng Bạch Tuyết" />
                    </a>
                </div>
                <div class="movie-detail">
                    <h3>
                        <a href="phim/nang-bach-tuyet.html">
                            Nàng Bạch Tuyết
                        </a>
                    </h3>
                    <p>Khởi chiếu: <b>21/03/2025</b><br />
                        Diễn viên: <b style="text-transform: capitalize;">Rachel Zegler, Gal Gadot, Andrew
                            Burnap</b>
                    </p>
                    <a href='https://www.youtube.com/embed/EgLJj6ua9fw?si=MW6V3IF2ZkjLKili' class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
                </div>
            </div>
            <div class="movie-item" style="    padding-top: 13px;">
                <div class="movie-thumbnail">
                    <a href="phim/mot-bo-phim-minecraft.html">
                        <img src="../touchcinema.com/medias/hinh-phim-2020/vn-mncrft-vert-main-2764x4096-intl-poster.jpg"
                            alt="Một Bộ Phim MineCraft" />
                    </a>
                </div>
                <div class="movie-detail">
                    <h3>
                        <a href="phim/mot-bo-phim-minecraft.html">
                            Một Bộ Phim MineCraft
                        </a>
                    </h3>
                    <p>Khởi chiếu: <b>04/04/2025</b><br />
                        Diễn viên: <b style="text-transform: capitalize;">Jason Momoa, Jack Black, Emma Myers,
                            Sebastian Eugene Hansen, Danielle Brooks,...</b>
                    </p>
                    <a href='https://www.youtube.com/embed/2Y5GJJDx8_Y?si=n-ttLwpTdxmv1uWv' class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
                </div>
            </div>
            <div class="movie-item" style="    padding-top: 13px;">
                <div class="movie-thumbnail">
                    <a href="phim/dia-dao-mat-troi-trong-bong-toi.html">
                        <img src="../touchcinema.com/medias/hinh-phim-2021/dia-dao-fhsp-poster.jpg"
                            alt="Địa Đạo: Mặt Trời Trong Bóng Tối" />
                    </a>
                </div>
                <div class="movie-detail">
                    <h3>
                        <a href="phim/dia-dao-mat-troi-trong-bong-toi.html">
                            Địa Đạo: Mặt Trời Trong Bóng Tối
                        </a>
                    </h3>
                    <p>Khởi chiếu: <b>30/04/2025</b><br />
                        Diễn viên: <b style="text-transform: capitalize;">Thái Hòa, Hồ Thu Anh, Quang Tuấn,...</b>
                    </p>
                    <a href='https://www.youtube.com/embed/6bClACoxwiM?si=BDltVDIGW88dkx7S' class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
                </div>
            </div>
            <div class="movie-item" style="    padding-top: 13px;">
                <div class="movie-thumbnail">
                    <a href="phim/thunderbolts.html">
                        <img src="../touchcinema.com/medias/hinh-phim-2021/mv5bmzdknzfhmdatnwvhnc00mdm5ltllyzktmwfkn2q0zwflywzkxkeyxkfqcgdeqxvyodk4otc3mty-at-v1-fmjpg-ux1000-poster.jpg"
                            alt="Thunderbolts" />
                    </a>
                </div>
                <div class="movie-detail">
                    <h3>
                        <a href="phim/thunderbolts.html">
                            Thunderbolts
                        </a>
                    </h3>
                    <p>Khởi chiếu: <b>02/05/2025</b><br />
                        Diễn viên: <b style="text-transform: capitalize;">Florence Pugh, Lewis Pullman, Olga
                            Kurylenko,...</b>
                    </p>
                    <a href='https://www.youtube.com/embed/_Bp-dnMTSa8?si=CemU0dFXRHONRzbG' class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
                </div>
            </div>
            <div class="movie-item" style="    padding-top: 13px;">
                <div class="movie-thumbnail">
                    <a href="phim/nhiem-vu-bat-kha-thi-nghiep-bao-phan-hai.html">
                        <img src="../touchcinema.com/medias/hinh-phim-2021/mv5bzmrkmgfjywitnwzhzc00zdy5ltk0ztgtmdq0mde2n2mxndvlxkeyxkfqcgdeqxvymte1ndm4odk4-v1-fmjpg-ux1000-poster.jpg"
                            alt="Nhiệm Vụ Bất Khả Thi: Nghiệp Báo - Phần Hai" />
                    </a>
                </div>
                <div class="movie-detail">
                    <h3>
                        <a href="phim/nhiem-vu-bat-kha-thi-nghiep-bao-phan-hai.html">
                            Nhiệm Vụ Bất Khả Thi: Nghiệp Báo - Phần Hai
                        </a>
                    </h3>
                    <p>Khởi chiếu: <b>23/05/2025</b><br />
                        Diễn viên: <b style="text-transform: capitalize;">Tom Cruise, Pom Klementieff, Shea Whigham,
                            Henry Czerny,...</b>
                    </p>
                    <a href='https://www.youtube.com/embed/8jRMVhGwy0M?si=bpdURWly9PLXG9KX' class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
                </div>
            </div>
            <div class="movie-item" style="    padding-top: 13px;">
                <div class="movie-thumbnail">
                    <a href="phim/tham-tu-kien-ky-an-khong-dau.html">
                        <img src="../touchcinema.com/medias/hinh-phim-2020/350x495-ttk-poster.jpg"
                            alt="Thám Tử Kiên: Kỳ Án Không Đầu" />
                    </a>
                </div>
                <div class="movie-detail">
                    <h3>
                        <a href="phim/tham-tu-kien-ky-an-khong-dau.html">
                            Thám Tử Kiên: Kỳ Án Không Đầu
                        </a>
                    </h3>
                    <p>Khởi chiếu: <b>16/05/2025</b><br />
                        Diễn viên: <b style="text-transform: capitalize;">Quốc Huy, Đinh Ngọc Diệp, Quốc Anh, Minh
                            Anh, Anh Phạm,...</b>
                    </p>
                    <a href='https://www.youtube.com/embed/_zmQ1o6LyGI?si=a-O9V3JHK99314FI' class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
                </div>
            </div>
            <div class="movie-item" style="    padding-top: 13px;">
                <div class="movie-thumbnail">
                    <a href="phim/lilo-stitch.html">
                        <img src="../touchcinema.com/medias/hinh-phim-2021/mv5bmza5ndjiy2etywqxos00ztm3ltk4zdmtm2i3zdfjywu0nmyxxkeyxkfqcgc-at-v1-poster.jpg"
                            alt="Lilo &amp; Stitch" />
                    </a>
                </div>
                <div class="movie-detail">
                    <h3>
                        <a href="phim/lilo-stitch.html">
                            Lilo &amp; Stitch
                        </a>
                    </h3>
                    <p>Khởi chiếu: <b>13/06/2025</b><br />
                        Diễn viên: <b style="text-transform: capitalize;">Maia Kealoha, Chris Sanders, Sydney
                            Agudong, Billy Magnussen, Tia Carrere,...</b>
                    </p>
                    <a href='https://www.youtube.com/embed/zE6gdbjjwLc?si=UOo6dAJL4-WQu89j' class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
                </div>
            </div>
            <div class="movie-item" style="    padding-top: 13px;">
                <div class="movie-thumbnail">
                    <a href="phim/zootopia-2.html">
                        <img src="../touchcinema.com/medias/hinh-phim-2021/zootopia-2-poster.jpg" alt="Zootopia 2" />
                    </a>
                </div>
                <div class="movie-detail">
                    <h3>
                        <a href="phim/zootopia-2.html">
                            Zootopia 2
                        </a>
                    </h3>
                    <p>Khởi chiếu: <b>28/11/2025</b><br />
                        Diễn viên: <b style="text-transform: capitalize;">Ginnifer Goodwin Jason Bateman Ke Huy Quan
                            Fortune Feimster Idris Elba</b>
                    </p>
                    <a href='https://www.youtube.com/embed/kQ6DbWEKyvQ?si=fRzFDOt61ilZl7pI' class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
                </div>
            </div>
            <div class="movie-item" style="    padding-top: 13px;">
                <div class="movie-thumbnail">
                    <a href="phim/toy-story-5.html">
                        <img src="../touchcinema.com/medias/hinh-phim-2021/mv5bm2mxmtnhntqtzgjkos00zwrklwizztctotaynwu3zwnhmtrkxkeyxkfqcgc-at-v1-fmjpg-ux1000-poster.jpg"
                            alt="Toy Story 5" />
                    </a>
                </div>
                <div class="movie-detail">
                    <h3>
                        <a href="phim/toy-story-5.html">
                            Toy Story 5
                        </a>
                    </h3>
                    <p>Khởi chiếu: <b>19/06/2026</b><br />
                        Diễn viên: <b style="text-transform: capitalize;">Tom Hanks, Tim Allen, Joan Cusack, Wallace
                            Shawn, Tony Hale,...</b>
                    </p>
                    <a href='https://www.youtube.com/embed/j7tO17h7beM?si=tsgcbQtwpZuhvVq8' class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
                </div>
            </div>
        </div>
        <div id="khuyenmai" class=" boxmovie ">
            <div class="promotition-item">
                <div class="thumbnail">
                    <a href="khuyen-mai/touchxyoungfest.html">
                        <img src="../touchcinema.com/uploads/slide-web/1000x1000-1680826524-thumbnail.jpg"
                            alt="TOUCHxYOUNGFEST" />
                    </a>
                </div>
                <div class="detail">
                    <h3><a href="khuyen-mai/touchxyoungfest.html">TOUCHxYOUNGFEST</a></h3>
                    <p>

                        THỜI GIAN DIỄN RA CHƯƠNG TR&amp;Igrave;NH: 07.4.2023-08.04.2023
                        &amp;Aacute;P DỤNG TẠI: OLINE V&amp;Agrave; TẠI QUẦY TOUCH CINEMA
                        NỘI DUNG
                    </p>
                    <p class="text-right">
                        <a class="linkdetail" href="khuyen-mai/touchxyoungfest.html">Chi tiết</a>
                    </p>
                </div>
            </div>
            <div class="promotition-item">
                <div class="thumbnail">
                    <a href="khuyen-mai/xuan-nhu-y.html">
                        <img src="uploads/phim-2021/32fa2219-8f2e-41b6-9033-7e4007c3c976-thumbnail.jpg"
                            alt="𝐗𝐮𝐚̂𝐧 𝐍𝐡𝐮̛ 𝐘́ - 𝐓𝐞̂́𝐭 𝐀𝐧 𝐊𝐡𝐚𝐧𝐠" />
                    </a>
                </div>
                <div class="detail">
                    <h3><a href="khuyen-mai/xuan-nhu-y.html">𝐗𝐮𝐚̂𝐧 𝐍𝐡𝐮̛ 𝐘́ - 𝐓𝐞̂́𝐭 𝐀𝐧 𝐊𝐡𝐚𝐧𝐠</a>
                    </h3>
                    <p>
                        🎊𝐂𝐇𝐔́𝐂 𝐌𝐔̛̀𝐍𝐆 𝐍𝐀̆𝐌 𝐌𝐎̛́𝐈 𝐐𝐔𝐘́ 𝐌𝐀̃𝐎 𝟮𝟬𝟮𝟯😽
                        🎉Touch Cinema xin
                    </p>
                    <p class="text-right">
                        <a class="linkdetail" href="khuyen-mai/xuan-nhu-y.html">Chi tiết</a>
                    </p>
                </div>
            </div>
            <div class="promotition-item">
                <div class="thumbnail">
                    <a href="khuyen-mai/1010-deal-sieu-hoi-bap-rang-bo-10k.html">
                        <img src="../touchcinema.com/uploads/slide-web/1000x1000-1-thumbnail.png"
                            alt="10.10 DEAL SIÊU HỜI BẮP RANG BƠ 10K" />
                    </a>
                </div>
                <div class="detail">
                    <h3><a href="khuyen-mai/1010-deal-sieu-hoi-bap-rang-bo-10k.html">10.10 DEAL SIÊU HỜI BẮP RANG BƠ
                            10K</a></h3>
                    <p>

                        THỜI GIAN DIỄN RA CHƯƠNG TR&amp;Igrave;NH:&amp;nbsp;10.10.2022
                        &amp;Aacute;P DỤNG TẠI: Touch Cinema Gia Lai
                        NỘI DUNG CHƯƠNG
                    </p>
                    <p class="text-right">
                        <a class="linkdetail" href="khuyen-mai/1010-deal-sieu-hoi-bap-rang-bo-10k.html">Chi tiết</a>
                    </p>
                </div>
            </div>
            <div class="promotition-item">
                <div class="thumbnail">
                    <a href="khuyen-mai/1010-touchxgrab-mua-1-tang-1-bap-rang-bo.html">
                        <img src="../touchcinema.com/uploads/slide-web/1000x1000-1665158482-thumbnail.png"
                            alt="10.10 TOUCHxGRAB MUA 1 TẶNG 1 BẮP RANG BƠ" />
                    </a>
                </div>
                <div class="detail">
                    <h3><a href="khuyen-mai/1010-touchxgrab-mua-1-tang-1-bap-rang-bo.html">10.10 TOUCHxGRAB MUA 1
                            TẶNG 1 BẮP RANG BƠ</a></h3>
                    <p>

                        THỜI GIAN DIỄN RA CHƯƠNG TR&amp;Igrave;NH: 10.10.2022
                        &amp;Aacute;P DỤNG TẠI: Cửa h&amp;agrave;ng Touch Cinema tr&amp;ecirc;n ứng dụng Grab
                        NỘI
                    </p>
                    <p class="text-right">
                        <a class="linkdetail" href="khuyen-mai/1010-touchxgrab-mua-1-tang-1-bap-rang-bo.html">Chi
                            tiết</a>
                    </p>
                </div>
            </div>
            <div class="promotition-item">
                <div class="thumbnail">
                    <a href="khuyen-mai/giam-20-hoa-don-khi-xem-dr-strange.html">
                        <img src="uploads/phim-2021/d4bab0d4-b0b8-42e5-a0eb-35c98ec63dc9-thumbnail.jpg"
                            alt="GIẢM 20% HÓA ĐƠN KHI XEM DR. STRANGE" />
                    </a>
                </div>
                <div class="detail">
                    <h3><a href="khuyen-mai/giam-20-hoa-don-khi-xem-dr-strange.html">GIẢM 20% HÓA ĐƠN KHI XEM DR.
                            STRANGE</a></h3>
                    <p>
                        Nhận ngay ưu đ&amp;atilde;i giảm 20% h&amp;oacute;a đơn bắp nước KH&amp;Ocirc;NG GIỚI HẠN SỐ
                        LƯỢNG (&amp;aacute;p dụng tất cả c&amp;aacute;c
                    </p>
                    <p class="text-right">
                        <a class="linkdetail" href="khuyen-mai/giam-20-hoa-don-khi-xem-dr-strange.html">Chi tiết</a>
                    </p>
                </div>
            </div>
            <div class="promotition-item">
                <div class="thumbnail">
                    <a href="khuyen-mai/vong-quay-may-man.html">
                        <img src="../touchcinema.com/uploads/slide-web/1000x1000-thumbnail.jpg"
                            alt="Vòng Quay May Mắn: 100% nhận quà tặng Voucher từ Touch Cinema!" />
                    </a>
                </div>
                <div class="detail">
                    <h3><a href="khuyen-mai/vong-quay-may-man.html">Vòng Quay May Mắn: 100% nhận quà tặng Voucher từ
                            Touch Cinema!</a></h3>
                    <p>
                        Th&amp;ocirc;ng tin ch&amp;iacute;nh thức về chương tr&amp;igrave;nh V&amp;Ograve;NG QUAY
                        MAY MĂN tại Touch Cinema n&amp;egrave; cả nh&amp;agrave; ơi.
                        - Về
                    </p>
                    <p class="text-right">
                        <a class="linkdetail" href="khuyen-mai/vong-quay-may-man.html">Chi tiết</a>
                    </p>
                </div>
            </div>
            <div class="promotition-item">
                <div class="thumbnail">
                    <a href="khuyen-mai/xuan-nham-dan-2022-li-xi-tha-ga-phuc-loc-day-nha.html">
                        <img src="../touchcinema.com/uploads/phim-2021/li-xi-tha-ga-2022-thumbnail.jpg"
                            alt="🌼XUÂN NHÂM DẦN 2022: LÌ XÌ THẢ GA - PHÚC LỘC ĐẦY NHÀ" />
                    </a>
                </div>
                <div class="detail">
                    <h3><a href="khuyen-mai/xuan-nham-dan-2022-li-xi-tha-ga-phuc-loc-day-nha.html">🌼XUÂN NHÂM DẦN
                            2022: LÌ XÌ THẢ GA - PHÚC LỘC ĐẦY NHÀ</a></h3>
                    <p>
                        🌼 Đến hẹn lại l&amp;ecirc;n, nh&amp;acirc;n dịp Tết đến Touch Cinema c&amp;ugrave;ng với
                        chương tr&amp;igrave;nh ph&amp;uacute;c lộc đầy
                    </p>
                    <p class="text-right">
                        <a class="linkdetail" href="khuyen-mai/xuan-nham-dan-2022-li-xi-tha-ga-phuc-loc-day-nha.html">Chi
                            tiết</a>
                    </p>
                </div>
            </div>
            <div class="promotition-item">
                <div class="thumbnail">
                    <a href="khuyen-mai/mung-83-ca-nha-vui-ve-tang-ve-khu-vui-choi.html">
                        <img src="../touchcinema.com/uploads/event2021/mung-83-2021-thumbnail.jpg"
                            alt="“MÙNG 8/3 – CẢ NHÀ VUI VẺ” – TẶNG VÉ KHU VUI CHƠI" />
                    </a>
                </div>
                <div class="detail">
                    <h3><a href="khuyen-mai/mung-83-ca-nha-vui-ve-tang-ve-khu-vui-choi.html">“MÙNG 8/3 – CẢ NHÀ VUI
                            VẺ” – TẶNG VÉ KHU VUI CHƠI</a></h3>
                    <p>

                        &amp;nbsp;


                        🎊Mừng ng&amp;agrave;y Quốc Tế Phụ Nữ 8/3, Touch Cinema xin d&amp;agrave;nh những lời
                        ch&amp;uacute;c tốt đẹp nhất tới
                    </p>
                    <p class="text-right">
                        <a class="linkdetail" href="khuyen-mai/mung-83-ca-nha-vui-ve-tang-ve-khu-vui-choi.html">Chi
                            tiết</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
