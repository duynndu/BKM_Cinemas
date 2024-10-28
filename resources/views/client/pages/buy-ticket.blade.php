@extends('client.layouts.main2')

@section('title', 'BKM Cinemas - Rạp chiếu phim 3D công nghệ hàng đầu.')

@section('css')
    <style>
    </style>
@endsection

@section('content')
    <div id="content">
        <div id="wrap-datve">
            <div id="note-time">
                <div id="note">
                    * Không được bỏ trống 01 ghế bên cạnh hoặc ghế đầu tiên của dãy
                </div>
                <div id="time">
                    Thời gian đặt vé
                    <span id="count-time">05:00</span>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="note">
                        <div class="seat active"><span></span> Ghế có thể đặt</div>
                        <div class="seat selected"><span></span> Ghế đang chọn</div>
                        <div class="seat booking"><span></span> Ghế đã có người chọn</div>
                        <div class="seat booked"><span></span> Ghế đã có người đặt</div>
                        <div class="seat disable"><span></span> Ghế không thể đặt</div>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div id="manhinh">
                        Màn hình
                    </div>
                    <div id="map" class="map-wrap">
                        <div style="width: 1100px; max-width:800px;   margin: 0 auto;">
                            <div class="maps" id="maps" style="width: 1100px;height: 895px">
                                <div class="seat seat-20 active" style="top: 80px;left: 85px;width: 80px;height: 75px;"
                                    data-seat="10988937" data-name="A01">
                                    <span class="label">A01</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 80px;left: 170px;width: 80px;height: 75px;"
                                    data-seat="10988938" data-name="A02">
                                    <span class="label">A02</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 80px;left: 255px;width: 80px;height: 75px;"
                                    data-seat="10988939" data-name="A03">
                                    <span class="label">A03</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 80px;left: 340px;width: 80px;height: 75px;"
                                    data-seat="10988940" data-name="A04">
                                    <span class="label">A04</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 80px;left: 425px;width: 80px;height: 75px;"
                                    data-seat="10988941" data-name="A05">
                                    <span class="label">A05</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 80px;left: 510px;width: 80px;height: 75px;"
                                    data-seat="10988942" data-name="A06">
                                    <span class="label">A06</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 80px;left: 595px;width: 80px;height: 75px;"
                                    data-seat="10988943" data-name="A07">
                                    <span class="label">A07</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 80px;left: 680px;width: 80px;height: 75px;"
                                    data-seat="10988944" data-name="A08">
                                    <span class="label">A08</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 80px;left: 765px;width: 80px;height: 75px;"
                                    data-seat="10988945" data-name="A09">
                                    <span class="label">A09</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 80px;left: 850px;width: 80px;height: 75px;"
                                    data-seat="10988946" data-name="A10">
                                    <span class="label">A10</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 80px;left: 935px;width: 80px;height: 75px;"
                                    data-seat="10988947" data-name="A11">
                                    <span class="label">A11</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 80px;left: 1020px;width: 80px;height: 75px;"
                                    data-seat="10988948" data-name="A12">
                                    <span class="label">A12</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 160px;left: 85px;width: 80px;height: 75px;"
                                    data-seat="10988949" data-name="B01">
                                    <span class="label">B01</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 160px;left: 170px;width: 80px;height: 75px;"
                                    data-seat="10988950" data-name="B02">
                                    <span class="label">B02</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 160px;left: 255px;width: 80px;height: 75px;"
                                    data-seat="10988951" data-name="B03">
                                    <span class="label">B03</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 160px;left: 340px;width: 80px;height: 75px;"
                                    data-seat="10988952" data-name="B04">
                                    <span class="label">B04</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 160px;left: 425px;width: 80px;height: 75px;"
                                    data-seat="10988953" data-name="B05">
                                    <span class="label">B05</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 160px;left: 510px;width: 80px;height: 75px;"
                                    data-seat="10988954" data-name="B06">
                                    <span class="label">B06</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 160px;left: 595px;width: 80px;height: 75px;"
                                    data-seat="10988955" data-name="B07">
                                    <span class="label">B07</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 160px;left: 680px;width: 80px;height: 75px;"
                                    data-seat="10988956" data-name="B08">
                                    <span class="label">B08</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 160px;left: 765px;width: 80px;height: 75px;"
                                    data-seat="10988957" data-name="B09">
                                    <span class="label">B09</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 160px;left: 850px;width: 80px;height: 75px;"
                                    data-seat="10988958" data-name="B10">
                                    <span class="label">B10</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 160px;left: 935px;width: 80px;height: 75px;"
                                    data-seat="10988959" data-name="B11">
                                    <span class="label">B11</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 160px;left: 1020px;width: 80px;height: 75px;"
                                    data-seat="10988960" data-name="B12">
                                    <span class="label">B12</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 240px;left: 85px;width: 80px;height: 75px;"
                                    data-seat="10988961" data-name="C01">
                                    <span class="label">C01</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 240px;left: 170px;width: 80px;height: 75px;"
                                    data-seat="10988962" data-name="C02">
                                    <span class="label">C02</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 240px;left: 255px;width: 80px;height: 75px;"
                                    data-seat="10988963" data-name="C03">
                                    <span class="label">C03</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 240px;left: 340px;width: 80px;height: 75px;"
                                    data-seat="10988964" data-name="C04">
                                    <span class="label">C04</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 240px;left: 425px;width: 80px;height: 75px;"
                                    data-seat="10988965" data-name="C05">
                                    <span class="label">C05</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 240px;left: 510px;width: 80px;height: 75px;"
                                    data-seat="10988966" data-name="C06">
                                    <span class="label">C06</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 240px;left: 595px;width: 80px;height: 75px;"
                                    data-seat="10988967" data-name="C07">
                                    <span class="label">C07</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 240px;left: 680px;width: 80px;height: 75px;"
                                    data-seat="10988968" data-name="C08">
                                    <span class="label">C08</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 240px;left: 765px;width: 80px;height: 75px;"
                                    data-seat="10988969" data-name="C09">
                                    <span class="label">C09</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 240px;left: 850px;width: 80px;height: 75px;"
                                    data-seat="10988970" data-name="C10">
                                    <span class="label">C10</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 240px;left: 935px;width: 80px;height: 75px;"
                                    data-seat="10988971" data-name="C11">
                                    <span class="label">C11</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 240px;left: 1020px;width: 80px;height: 75px;"
                                    data-seat="10988972" data-name="C12">
                                    <span class="label">C12</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 320px;left: 85px;width: 80px;height: 75px;"
                                    data-seat="10988973" data-name="D01">
                                    <span class="label">D01</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 320px;left: 170px;width: 80px;height: 75px;"
                                    data-seat="10988974" data-name="D02">
                                    <span class="label">D02</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 320px;left: 255px;width: 80px;height: 75px;"
                                    data-seat="10988975" data-name="D03">
                                    <span class="label">D03</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 320px;left: 340px;width: 80px;height: 75px;"
                                    data-seat="10988976" data-name="D04">
                                    <span class="label">D04</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 320px;left: 425px;width: 80px;height: 75px;"
                                    data-seat="10988977" data-name="D05">
                                    <span class="label">D05</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 320px;left: 510px;width: 80px;height: 75px;"
                                    data-seat="10988978" data-name="D06">
                                    <span class="label">D06</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 320px;left: 595px;width: 80px;height: 75px;"
                                    data-seat="10988979" data-name="D07">
                                    <span class="label">D07</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 320px;left: 680px;width: 80px;height: 75px;"
                                    data-seat="10988980" data-name="D08">
                                    <span class="label">D08</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 320px;left: 765px;width: 80px;height: 75px;"
                                    data-seat="10988981" data-name="D09">
                                    <span class="label">D09</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 320px;left: 850px;width: 80px;height: 75px;"
                                    data-seat="10988982" data-name="D10">
                                    <span class="label">D10</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 320px;left: 935px;width: 80px;height: 75px;"
                                    data-seat="10988983" data-name="D11">
                                    <span class="label">D11</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 320px;left: 1020px;width: 80px;height: 75px;"
                                    data-seat="10988984" data-name="D12">
                                    <span class="label">D12</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 400px;left: 85px;width: 80px;height: 75px;"
                                    data-seat="10988985" data-name="E01">
                                    <span class="label">E01</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 400px;left: 170px;width: 80px;height: 75px;"
                                    data-seat="10988986" data-name="E02">
                                    <span class="label">E02</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 400px;left: 255px;width: 80px;height: 75px;"
                                    data-seat="10988987" data-name="E03">
                                    <span class="label">E03</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 400px;left: 340px;width: 80px;height: 75px;"
                                    data-seat="10988988" data-name="E04">
                                    <span class="label">E04</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 400px;left: 425px;width: 80px;height: 75px;"
                                    data-seat="10988989" data-name="E05">
                                    <span class="label">E05</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 400px;left: 510px;width: 80px;height: 75px;"
                                    data-seat="10988990" data-name="E06">
                                    <span class="label">E06</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 400px;left: 595px;width: 80px;height: 75px;"
                                    data-seat="10988991" data-name="E07">
                                    <span class="label">E07</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 400px;left: 680px;width: 80px;height: 75px;"
                                    data-seat="10988992" data-name="E08">
                                    <span class="label">E08</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 400px;left: 765px;width: 80px;height: 75px;"
                                    data-seat="10988993" data-name="E09">
                                    <span class="label">E09</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 400px;left: 850px;width: 80px;height: 75px;"
                                    data-seat="10988994" data-name="E10">
                                    <span class="label">E10</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 400px;left: 935px;width: 80px;height: 75px;"
                                    data-seat="10988995" data-name="E11">
                                    <span class="label">E11</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 400px;left: 1020px;width: 80px;height: 75px;"
                                    data-seat="10988996" data-name="E12">
                                    <span class="label">E12</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 480px;left: 85px;width: 80px;height: 75px;"
                                    data-seat="10988997" data-name="F01">
                                    <span class="label">F01</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 480px;left: 170px;width: 80px;height: 75px;"
                                    data-seat="10988998" data-name="F02">
                                    <span class="label">F02</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 480px;left: 255px;width: 80px;height: 75px;"
                                    data-seat="10988999" data-name="F03">
                                    <span class="label">F03</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 480px;left: 340px;width: 80px;height: 75px;"
                                    data-seat="10989000" data-name="F04">
                                    <span class="label">F04</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 480px;left: 425px;width: 80px;height: 75px;"
                                    data-seat="10989001" data-name="F05">
                                    <span class="label">F05</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 480px;left: 510px;width: 80px;height: 75px;"
                                    data-seat="10989002" data-name="F06">
                                    <span class="label">F06</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 480px;left: 595px;width: 80px;height: 75px;"
                                    data-seat="10989003" data-name="F07">
                                    <span class="label">F07</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 480px;left: 680px;width: 80px;height: 75px;"
                                    data-seat="10989004" data-name="F08">
                                    <span class="label">F08</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 480px;left: 765px;width: 80px;height: 75px;"
                                    data-seat="10989005" data-name="F09">
                                    <span class="label">F09</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 480px;left: 850px;width: 80px;height: 75px;"
                                    data-seat="10989006" data-name="F10">
                                    <span class="label">F10</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 480px;left: 935px;width: 80px;height: 75px;"
                                    data-seat="10989007" data-name="F11">
                                    <span class="label">F11</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 480px;left: 1020px;width: 80px;height: 75px;"
                                    data-seat="10989008" data-name="F12">
                                    <span class="label">F12</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 560px;left: 85px;width: 80px;height: 75px;"
                                    data-seat="10989009" data-name="G01">
                                    <span class="label">G01</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 560px;left: 170px;width: 80px;height: 75px;"
                                    data-seat="10989010" data-name="G02">
                                    <span class="label">G02</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 560px;left: 255px;width: 80px;height: 75px;"
                                    data-seat="10989011" data-name="G03">
                                    <span class="label">G03</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 560px;left: 340px;width: 80px;height: 75px;"
                                    data-seat="10989012" data-name="G04">
                                    <span class="label">G04</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 560px;left: 425px;width: 80px;height: 75px;"
                                    data-seat="10989013" data-name="G05">
                                    <span class="label">G05</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 560px;left: 510px;width: 80px;height: 75px;"
                                    data-seat="10989014" data-name="G06">
                                    <span class="label">G06</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 560px;left: 595px;width: 80px;height: 75px;"
                                    data-seat="10989015" data-name="G07">
                                    <span class="label">G07</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 560px;left: 680px;width: 80px;height: 75px;"
                                    data-seat="10989016" data-name="G08">
                                    <span class="label">G08</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 560px;left: 765px;width: 80px;height: 75px;"
                                    data-seat="10989017" data-name="G09">
                                    <span class="label">G09</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 560px;left: 850px;width: 80px;height: 75px;"
                                    data-seat="10989018" data-name="G10">
                                    <span class="label">G10</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 560px;left: 935px;width: 80px;height: 75px;"
                                    data-seat="10989019" data-name="G11">
                                    <span class="label">G11</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 560px;left: 1020px;width: 80px;height: 75px;"
                                    data-seat="10989020" data-name="G12">
                                    <span class="label">G12</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 640px;left: 85px;width: 80px;height: 75px;"
                                    data-seat="10989021" data-name="H01">
                                    <span class="label">H01</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 640px;left: 170px;width: 80px;height: 75px;"
                                    data-seat="10989022" data-name="H02">
                                    <span class="label">H02</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 640px;left: 255px;width: 80px;height: 75px;"
                                    data-seat="10989023" data-name="H03">
                                    <span class="label">H03</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 640px;left: 340px;width: 80px;height: 75px;"
                                    data-seat="10989024" data-name="H04">
                                    <span class="label">H04</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 640px;left: 425px;width: 80px;height: 75px;"
                                    data-seat="10989025" data-name="H05">
                                    <span class="label">H05</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 640px;left: 510px;width: 80px;height: 75px;"
                                    data-seat="10989026" data-name="H06">
                                    <span class="label">H06</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 640px;left: 595px;width: 80px;height: 75px;"
                                    data-seat="10989027" data-name="H07">
                                    <span class="label">H07</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 640px;left: 680px;width: 80px;height: 75px;"
                                    data-seat="10989028" data-name="H08">
                                    <span class="label">H08</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 640px;left: 765px;width: 80px;height: 75px;"
                                    data-seat="10989029" data-name="H09">
                                    <span class="label">H09</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 640px;left: 850px;width: 80px;height: 75px;"
                                    data-seat="10989030" data-name="H10">
                                    <span class="label">H10</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 640px;left: 935px;width: 80px;height: 75px;"
                                    data-seat="10989031" data-name="H11">
                                    <span class="label">H11</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 640px;left: 1020px;width: 80px;height: 75px;"
                                    data-seat="10989032" data-name="H12">
                                    <span class="label">H12</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 720px;left: 255px;width: 80px;height: 75px;"
                                    data-seat="10989033" data-name="I01">
                                    <span class="label">I01</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 720px;left: 340px;width: 80px;height: 75px;"
                                    data-seat="10989034" data-name="I02">
                                    <span class="label">I02</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 720px;left: 425px;width: 80px;height: 75px;"
                                    data-seat="10989035" data-name="I03">
                                    <span class="label">I03</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 720px;left: 510px;width: 80px;height: 75px;"
                                    data-seat="10989036" data-name="I04">
                                    <span class="label">I04</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 720px;left: 595px;width: 80px;height: 75px;"
                                    data-seat="10989037" data-name="I05">
                                    <span class="label">I05</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 720px;left: 680px;width: 80px;height: 75px;"
                                    data-seat="10989038" data-name="I06">
                                    <span class="label">I06</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 720px;left: 765px;width: 80px;height: 75px;"
                                    data-seat="10989039" data-name="I07">
                                    <span class="label">I07</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 720px;left: 850px;width: 80px;height: 75px;"
                                    data-seat="10989040" data-name="I08">
                                    <span class="label">I08</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 720px;left: 935px;width: 80px;height: 75px;"
                                    data-seat="10989041" data-name="I09">
                                    <span class="label">I09</span>
                                </div>
                                <div class="seat seat-20 active" style="top: 720px;left: 1020px;width: 80px;height: 75px;"
                                    data-seat="10989042" data-name="I10">
                                    <span class="label">I10</span>
                                </div>
                                <div class="seat seat-21 active" style="top: 800px;left: 84px;width: 250px;height: 75px;"
                                    data-seat="10989043" data-name="J01">
                                    <span class="label">J01</span>
                                </div>
                                <div class="seat seat-21 active" style="top: 800px;left: 340px;width: 250px;height: 75px;"
                                    data-seat="10989044" data-name="J02">
                                    <span class="label">J02</span>
                                </div>
                                <div class="seat seat-21 active" style="top: 800px;left: 595px;width: 250px;height: 75px;"
                                    data-seat="10989045" data-name="J03">
                                    <span class="label">J03</span>
                                </div>
                                <div class="seat seat-21 active" style="top: 800px;left: 850px;width: 250px;height: 75px;"
                                    data-seat="10989046" data-name="J04">
                                    <span class="label">J04</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- combo and login --}}
    <div id="main-right">
        <div id="main-right-content">
            <div class="right-content">
                <div id="price-total">
                    <span id="totalPrice">0</span> đ
                </div>
                <div id="showtimes-detail">
                    <div class="movie-name">Chàng Nữ Phi Công</div>
                    <div>Thứ Hai, ngày 2/9 16:05 - RẠP 02 </div>
                </div>

                <div id="current-select">
                    <div class="select seats">
                        Ghế: <span id="seat-code"></span>
                        <span class="price"><span id="totalPriceSeat">0</span> đ</span>
                    </div>
                    <div class="select combo">
                        <a href="javascript:void(0);" class="show-combo">
                            {{-- <span class="glyphicon glyphicon-star tada animated infinite"></span> --}}
                            <i class="fa-regular fa-star fa-beat"></i>
                            Chọn Combo </a>
                        <span class="price"><span id="totalPriceCombo">0</span> đ</span>
                    </div>
                    <div class="login">
                        <h3><a href="javasctip:;" class="show-login">Đăng nhập</a></h3>
                        <div class="text-center">
                            Hoặc
                            <p class="note-nologin">Mua vé không cần đăng nhập</p>
                        </div>
                        <div class="info-form">
                            <div class="info-group">
                                <input id="guestname" type="text" name="username" value=""
                                    placeholder="* Họ và tên" />
                            </div>
                            <div class="info-group">
                                <input id="guestphone" type="text" name="userphone" value=""
                                    placeholder="* Số điện thoại" />
                                <p id="phoneFormatError" class="error">Định dạng Số điện thoại không chính xác!
                                </p>
                            </div>
                            <div class="info-group">
                                <input id="guestemail" type="email" name="useremail" value=""
                                    placeholder="* Email" />
                                <p id="emailFormatError" class="error">Email không chính xác</p>
                            </div>
                            <p id="enterGuestError">Vui lòng nhập đầy đủ thông tin của bạn</p>

                            <div class="info-group action-group">
                                <p>
                                    <strong>Để hưởng ưu đãi và tích điểm</strong> hãy <a
                                        href="https://touchcinema.com/login"><strong class="note-nologin">ĐĂNG
                                            NHẬP</strong></a> nếu bạn đã có tài khoản và thẻ thành viên tại quầy.
                                </p>
                                <button id="enterGuest" class="btn btn-info">Nhập thông tin</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="tab-combo">
        <div id="login">

            <div class="title">
                <p>Vui lòng đăng nhập hoặc nhập thông tin để đặt vé</p>
                <h2>Đăng nhập</h2>
            </div>
            <div class="box-body">
                <form action="https://touchcinema.com/login" method="post">
                    <input type="hidden" name="_token" value="BXV7TW2mEar4PBN8BArnTk122Kc6ghxfnEGHC0fk">

                    <input type="hidden" name="redirect" value="https://touchcinema.com/dat-ve/79240" />
                    <div class="login-group">
                        <input id="username" type="text" name="name" value="" placeholder="Username"
                            required />
                    </div>
                    <div class="login-group">
                        <input id="password" type="password" name="password" placeholder="Password" required />
                    </div>
                    <input type="submit" class="btn btn-login" value="Đăng nhập" />
                    <div class="attr-link">
                        <a href="https://touchcinema.com/password/reset">Quên mật khẩu</a>
                        <a class="register" href="https://touchcinema.com/register">Đăng kí tài khoản</a>
                    </div>
                </form>
                Hoặc
                <a class="login-social facebook" href="https://touchcinema.com/auth/facebook"
                    title="Đăng nhập bằng Facebook">
                    Đăng nhập bằng Facebook
                </a>
                <a class="login-social google" href="https://touchcinema.com/auth/google" title="Đăng nhập bằng Google">
                    Đăng nhập bằng Google
                </a>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('client/js/movie-detail.js') }}"></script>
@endsection
