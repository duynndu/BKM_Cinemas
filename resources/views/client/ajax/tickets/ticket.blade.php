@if($tickets->isNotEmpty())
    <div class="transaction-booking">
        <table id="tickets-table" class="reward-table transaction-reward">
            <thead>
            <tr>
                <th>STT</th>
                <th>Thời gian giao dịch</th>
                <th>Mã lấy vé</th>
                <th>Thông tin rạp</th>
                <th>Tổng tiền</th>
                <th>Điểm thưởng</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody id="tickets-tbody">
            @php
                $tong = 0;
            @endphp
            @foreach($tickets as $key => $ticket)
                @php
                    $tong += $ticket->total_price;
                @endphp
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ date('d/m/Y H:i:s', strtotime($ticket->created_at)) }}</td>
                    <td>
                        <a href="javascript:void(0)" data-modal="#modalTikets_{{ $ticket->id }}" class="open-modal">{{ $ticket->code }}</a>
                        <div id="modalTikets_{{ $ticket->id }}" style="height: 100%;" class="custom-modal">
                            <div class="custom-modal-content modal-tikets">
                                <!-- Nút đóng -->
                                <span class="custom-close">&times;</span>

                                <!-- Tiêu đề -->
                                <div class="modal-header d-flex justify-content-center">
                                    <h3 class="title-payment">Thông tin vé đã đặt</h3>
                                </div>

                                <!-- Nội dung chính -->
                                <div class="main-modal">
                                    <div class="col-inner">
                                        <div class="order-view-container">
                                            <div class="order-view-content">
                                                <div class="row align-center align-middle row-collapse">
                                                    <div class="col content-col medium-12 small-12 large-12">
                                                        <div class="col-inner">
                                                            <div class="row align-middle row-divided order-details-row row-collapse">
                                                                <div class="col medium-3 small-12 large-3">
                                                                    <div class="col-inner">
                                                                        <div class="qrcode-image text-center">
                                                                            <div>Thông tin vé</div>
                                                                            <div>
                                                                                <img src="{{ asset('client/images/offline-ticket.jpg') }}">
                                                                            </div>
                                                                            <div><span class="code">Vé đặt online</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col medium-9 small-12 large-9">
                                                                    <div class="col-inner">
                                                                        <div class="icon-box icon-box-left align-middle text-left order-film-box">
                                                                            <div class="icon-box-img">
                                                                                <img src="{{ $ticket->movie->image }}">
                                                                            </div>
                                                                            <div class="icon-box-text p-last-0">
                                                                                <h4 class="fw-700">{{ $ticket->movie->title }}</h4>
                                                                                <div class="metas">
                                                                                    <ul>
                                                                                        <li>
                                                                                            <img src="{{ asset('client/images/helpIcon.png') }}">
                                                                                            <span>Phụ đề, {{ $ticket->movie->format }}</span>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="{{ asset('client/images/calendarIcon.png') }}">
                                                                                            <span>{{ date('d/m/Y', strtotime($ticket->showtime->start_time)) }}</span>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="{{ asset('client/images/clockIcon.png') }}"> Suất chiếu: <span>{{ date('H:i', strtotime($ticket->showtime->start_time)) }}</span>
                                                                                        </li>
                                                                                        <li>
                                                                                            <img src="{{ asset('client/images/locationIcon.png') }}">
                                                                                            <span>{{ $ticket->cinema->name }}</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="row row-small ticket-row row-divided">
                                                                                    <div class="col medium-12 small-12 large-3">
                                                                                        <div class="col-inner text-center">
                                                                                            <p>Ghế</p>
                                                                                            <div>
                                                                                                @if($ticket->seatsBooking && $ticket->seatsBooking->count())
                                                                                                    @foreach($ticket->seatsBooking as $seatBooking)
                                                                                                        <span>{{ $seatBooking->seat->seat_number ?? '' }}</span>@if(!$loop->last), @endif
                                                                                                    @endforeach
                                                                                                @else
                                                                                                    <span>Không có ghế</span>
                                                                                                @endif
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col medium-12 small-12 large-3">
                                                                                        <div class="col-inner text-center">
                                                                                            <p>Phòng chiếu</p>
                                                                                            <div>Vui lòng liên hệ rạp.</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="total">
                                                                                    Tổng tiền: <span>{{ number_format($ticket->total_price, 0, ',', '.') }}đ</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Footer -->
                                <div class="modal-footer mt-0">
                                    <button class="close-modal" type="button">Đóng</button>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>{{ $ticket->cinema->name }}</td>
                    <td>{{ number_format($ticket->total_price, 0, ',', '.') }}đ</td>
                    <td>20</td>
                    <td>
                        @if ($ticket->status == 'waiting_for_cancellation')
                            <span class="text-danger" id="order_text_{{ $ticket->id }}">Chờ xác nhận hủy!</span>
                        @elseif($ticket->status == 'rejected')
                            <span class="text-danger" id="order_text_{{ $ticket->id }}">Từ chối hủy!</span>
                        @elseif($ticket->status == 'cancelled' && $ticket->refund_status == 'pending')
                            <span class="text-danger" id="order_text_{{ $ticket->id }}">Chờ hoàn tiền!</span>
                        @elseif($ticket->status == 'cancelled' && $ticket->refund_status == 'completed')
                            <span class="text-danger" id="order_text_{{ $ticket->id }}">Hoàn tiền thành công!</span>
                        @elseif($ticket->getCanCancelAttribute() && $ticket->status == 'completed')
                            <a data-url="{{ route('api.orders.changeStatus', $ticket->id) }}" class="btn btn-danger btn-cancelled-ticket" id="cancelled_ticket_{{ $ticket->id }}">Hủy</a>
                        @else
                            <span class="text-danger" id="order_text_{{ $ticket->id }}">Không thể hủy vé</span>
                        @endif
                    </td>
                </tr>
            @endforeach

            <tr>
                <td class="highlight text-right" colspan="4">Tổng</td>
                <td>{{ number_format($tong, 0, ',', '.') }}đ</td>
                <td>5 Điểm</td>
                <td></td>
            </tr>
            </tbody>
        </table>
        <div class="d-flex justify-content-center align-items-center mt-3 pagination-container pagination-tickets">
            {{ $tickets->links('pagination::bootstrap-4') }}
        </div>
    </div>
@else
    <div class="d-flex justify-content-center align-items-center p-5 no-ticket">
        Bạn chưa có giao dịch nào trong tháng {{ \Carbon\Carbon::now()->format('m/Y') }}
    </div>
@endif
