@extends('client.layouts.main')

@section('title', 'Giới thiệu')

@section('content')
    <div class="prs_title_main_sec_wrapper">
        <div class="prs_title_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="prs_title_heading_wrapper">
                        <h2>Confirmation Screen</h2>
                        <ul>
                            <li><a href="#">Home</a>
                            </li>
                            <li>&nbsp;&nbsp; >&nbsp;&nbsp; Confirmation Screen</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- prs title wrapper End -->
    <!-- st bc Start -->
    <div class="st_bcc_main_main_wrapper float_left">
        <div class="st_bcc_main_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="st_bcc_heading_wrapper float_left"><i class="fa fa-check-circle"></i>
                            <h3>Payment of <span>Rs 373.00</span> Complete successfull</h3>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="st_bcc_ticket_boxes_wrapper float_left">
                            <div class="st_bcc_tecket_top_hesder float_left">
                                <p>Your Booking is Confirmed!</p>    <span>Booking ID SSST0000310644 </span>
                            </div>
                            <div class="st_bcc_tecket_bottom_hesder float_left">
                                <div class="st_bcc_tecket_bottom_left_wrapper">
                                    <div class="st_bcc_tecket_bottom_inner_left">
                                        <div class="st_bcc_teckt_bot_inner_img">
                                            <img src="images/content/tcc1.png" alt="img">
                                        </div>
                                        <div class="st_bcc_teckt_bot_inner_img_cont">
                                            <h4>Njan Prakashan</h4>
                                            <h5>Malayalam, 2D</h5>
                                            <h3>Mon, 31 Dec | 09.30PM</h3>
                                            <h6>Carnival: Artech Central Mall,<br>
                                                Trivandrum Audi-5</h6>
                                        </div>
                                        <div class="st_purchase_img">
                                            <img src="images/content/pur2.png" alt="img">
                                        </div>
                                    </div>
                                    <div class="st_bcc_tecket_bottom_inner_right"><i class="fas fa-chair"></i>
                                        <h3>2 TICKETS <br>
                                            <span>EXECUTIV - K1, K2</span></h3>
                                    </div>
                                </div>
                                <div class="st_bcc_tecket_bottom_right_wrapper">
                                    <img src="images/content/qr.png" alt="img">
                                    <h4>Booking ID<br>SSST0000310644</h4>
                                </div>
                                <div class="st_bcc_tecket_bottom_left_price_wrapper">
                                    <h4>Total Amount</h4>
                                    <h5>₹373.00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="st_bcc_ticket_boxes_bottom_wrapper float_left">
                            <p>You can access your ticket from your Profile. We will send you
                                <br>an e-Mail/SMS Confirmation with in 15 Minutes.</p>
                            <ul>
                                <li><a href="#">INVITE FRIENDS</a>
                                </li>
                                <li><a href="#">Locate Friend</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- st bc End -->
@endsection

@section('js')

@endsection
