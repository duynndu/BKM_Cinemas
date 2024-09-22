@extends('admin.layouts.main')

@section('title', 'Bảng điều khiển')

@section('content')
    <div class="wallet-bar wow fadeInRight dlab-scroll" id="wallet-bar" data-wow-delay="0.7s">
        <div class="row ">
            <!--column-->
            <div class="col-xl-12">
                <div class="card bg-transparent contacts mb-1">
                    <div class="card-header border-0 pb-0 px-3 pt-0">
                        <div>
                            <h5 class="mb-0">Contacts</h5>
                            <p class="mb-0">You have <strong>456</strong> contacts</p>
                        </div>
                        <div>
                            <a href="#" class="add" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 3C7.05 3 3 7.05 3 12C3 16.95 7.05 21 12 21C16.95 21 21 16.95 21 12C21 7.05 16.95 3 12 3ZM12 19.125C8.1 19.125 4.875 15.9 4.875 12C4.875 8.1 8.1 4.875 12 4.875C15.9 4.875 19.125 8.1 19.125 12C19.125 15.9 15.9 19.125 12 19.125Z"
                                        fill="white"/>
                                    <path
                                        d="M16.3503 11.0251H12.9753V7.65009C12.9753 7.12509 12.5253 6.67509 12.0003 6.67509C11.4753 6.67509 11.0253 7.12509 11.0253 7.65009V11.0251H7.65029C7.12529 11.0251 6.67529 11.4751 6.67529 12.0001C6.67529 12.5251 7.12529 12.9751 7.65029 12.9751H11.0253V16.3501C11.0253 16.8751 11.4753 17.3251 12.0003 17.3251C12.5253 17.3251 12.9753 16.8751 12.9753 16.3501V12.9751H16.3503C16.8753 12.9751 17.3253 12.5251 17.3253 12.0001C17.3253 11.4751 16.8753 11.0251 16.3503 11.0251Z"
                                        fill="white"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="card-body loadmore-content  dlab-scroll height400 recent-activity-wrapper p-3 pt-2"
                         id="RecentActivityContent">
                        <!--student-->
                        <div class="d-flex align-items-center student">
                            <div class="dz-media">
                                <img src="../images/profile/small/pic1.jpg" alt="" class="avatar">
                            </div>
                            <div class="user-info">
                                <h6 class="card-title card-title--small mb-1"><a href="app-profile.html">Samantha
                                        William</a></h6>
                                <p class="mb-0">Marketing Manager</p>
                            </div>
                            <div class="indox">
                                <a href="#">
                                    <svg width="19" height="14" viewBox="0 0 19 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M18 0.889911C18.0057 0.823365 18.0057 0.756458 18 0.689911L17.91 0.499911C17.91 0.499911 17.91 0.429911 17.86 0.399911L17.81 0.349911L17.65 0.219911C17.6062 0.175413 17.5556 0.138269 17.5 0.109911L17.33 0.0499115H17.13H0.93H0.73L0.56 0.119911C0.504246 0.143681 0.453385 0.177588 0.41 0.219911L0.25 0.349911C0.25 0.349911 0.25 0.349911 0.25 0.399911C0.25 0.449911 0.25 0.469911 0.2 0.499911L0.11 0.689911C0.10434 0.756458 0.10434 0.823365 0.11 0.889911L0 0.999911V12.9999C0 13.2651 0.105357 13.5195 0.292893 13.707C0.48043 13.8946 0.734784 13.9999 1 13.9999H10C10.2652 13.9999 10.5196 13.8946 10.7071 13.707C10.8946 13.5195 11 13.2651 11 12.9999C11 12.7347 10.8946 12.4803 10.7071 12.2928C10.5196 12.1053 10.2652 11.9999 10 11.9999H2V2.99991L8.4 7.79991C8.5731 7.92973 8.78363 7.99991 9 7.99991C9.21637 7.99991 9.4269 7.92973 9.6 7.79991L16 2.99991V11.9999H14C13.7348 11.9999 13.4804 12.1053 13.2929 12.2928C13.1054 12.4803 13 12.7347 13 12.9999C13 13.2651 13.1054 13.5195 13.2929 13.707C13.4804 13.8946 13.7348 13.9999 14 13.9999H17C17.2652 13.9999 17.5196 13.8946 17.7071 13.707C17.8946 13.5195 18 13.2651 18 12.9999V0.999911C18 0.999911 18 0.929911 18 0.889911ZM9 5.74991L4 1.99991H14L9 5.74991Z"
                                            fill="#01A3FF"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <!--/student-->
                        <!--student-->
                        <div class="d-flex align-items-center student">
                            <div class="dz-media">
                                <img src="../images/profile/small/pic2.jpg" alt="" class="avatar">
                            </div>
                            <div class="user-info">
                                <h6 class="card-title card-title--small mb-1"><a href="app-profile.html">Tony
                                        Soap</a></h6>
                                <p class="mb-0">UI Designer</p>
                            </div>
                            <div class="indox">
                                <a href="#">
                                    <svg width="19" height="14" viewBox="0 0 19 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M18 0.889911C18.0057 0.823365 18.0057 0.756458 18 0.689911L17.91 0.499911C17.91 0.499911 17.91 0.429911 17.86 0.399911L17.81 0.349911L17.65 0.219911C17.6062 0.175413 17.5556 0.138269 17.5 0.109911L17.33 0.0499115H17.13H0.93H0.73L0.56 0.119911C0.504246 0.143681 0.453385 0.177588 0.41 0.219911L0.25 0.349911C0.25 0.349911 0.25 0.349911 0.25 0.399911C0.25 0.449911 0.25 0.469911 0.2 0.499911L0.11 0.689911C0.10434 0.756458 0.10434 0.823365 0.11 0.889911L0 0.999911V12.9999C0 13.2651 0.105357 13.5195 0.292893 13.707C0.48043 13.8946 0.734784 13.9999 1 13.9999H10C10.2652 13.9999 10.5196 13.8946 10.7071 13.707C10.8946 13.5195 11 13.2651 11 12.9999C11 12.7347 10.8946 12.4803 10.7071 12.2928C10.5196 12.1053 10.2652 11.9999 10 11.9999H2V2.99991L8.4 7.79991C8.5731 7.92973 8.78363 7.99991 9 7.99991C9.21637 7.99991 9.4269 7.92973 9.6 7.79991L16 2.99991V11.9999H14C13.7348 11.9999 13.4804 12.1053 13.2929 12.2928C13.1054 12.4803 13 12.7347 13 12.9999C13 13.2651 13.1054 13.5195 13.2929 13.707C13.4804 13.8946 13.7348 13.9999 14 13.9999H17C17.2652 13.9999 17.5196 13.8946 17.7071 13.707C17.8946 13.5195 18 13.2651 18 12.9999V0.999911C18 0.999911 18 0.929911 18 0.889911ZM9 5.74991L4 1.99991H14L9 5.74991Z"
                                            fill="#01A3FF"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <!--/student-->
                        <!--student-->
                        <div class="d-flex align-items-center student">
                            <div class="dz-media">
                                <img src="../images/profile/small/pic3.jpg" alt="" class="avatar">
                            </div>
                            <div class="user-info">
                                <h6 class="card-title card-title--small mb-1"><a href="app-profile.html">Karen
                                        Hope</a></h6>
                                <span>Web Developer</span>
                            </div>
                            <div class="indox">
                                <a href="#">
                                    <svg width="19" height="14" viewBox="0 0 19 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M18 0.889911C18.0057 0.823365 18.0057 0.756458 18 0.689911L17.91 0.499911C17.91 0.499911 17.91 0.429911 17.86 0.399911L17.81 0.349911L17.65 0.219911C17.6062 0.175413 17.5556 0.138269 17.5 0.109911L17.33 0.0499115H17.13H0.93H0.73L0.56 0.119911C0.504246 0.143681 0.453385 0.177588 0.41 0.219911L0.25 0.349911C0.25 0.349911 0.25 0.349911 0.25 0.399911C0.25 0.449911 0.25 0.469911 0.2 0.499911L0.11 0.689911C0.10434 0.756458 0.10434 0.823365 0.11 0.889911L0 0.999911V12.9999C0 13.2651 0.105357 13.5195 0.292893 13.707C0.48043 13.8946 0.734784 13.9999 1 13.9999H10C10.2652 13.9999 10.5196 13.8946 10.7071 13.707C10.8946 13.5195 11 13.2651 11 12.9999C11 12.7347 10.8946 12.4803 10.7071 12.2928C10.5196 12.1053 10.2652 11.9999 10 11.9999H2V2.99991L8.4 7.79991C8.5731 7.92973 8.78363 7.99991 9 7.99991C9.21637 7.99991 9.4269 7.92973 9.6 7.79991L16 2.99991V11.9999H14C13.7348 11.9999 13.4804 12.1053 13.2929 12.2928C13.1054 12.4803 13 12.7347 13 12.9999C13 13.2651 13.1054 13.5195 13.2929 13.707C13.4804 13.8946 13.7348 13.9999 14 13.9999H17C17.2652 13.9999 17.5196 13.8946 17.7071 13.707C17.8946 13.5195 18 13.2651 18 12.9999V0.999911C18 0.999911 18 0.929911 18 0.889911ZM9 5.74991L4 1.99991H14L9 5.74991Z"
                                            fill="#01A3FF"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <!--/student-->
                        <!--student-->
                        <div class="d-flex align-items-center student">
                            <div class="dz-media">
                                <img src="../images/profile/small/pic4.jpg" alt="" class="avatar">
                            </div>
                            <div class="user-info">
                                <h6 class="card-title card-title--small mb-1"><a href="app-profile.html">Jordan
                                        Nico</a>
                                </h6>
                                <p class="mb-0">Graphic Design</p>
                            </div>
                            <div class="indox">
                                <a href="#">
                                    <svg width="19" height="14" viewBox="0 0 19 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M18 0.889911C18.0057 0.823365 18.0057 0.756458 18 0.689911L17.91 0.499911C17.91 0.499911 17.91 0.429911 17.86 0.399911L17.81 0.349911L17.65 0.219911C17.6062 0.175413 17.5556 0.138269 17.5 0.109911L17.33 0.0499115H17.13H0.93H0.73L0.56 0.119911C0.504246 0.143681 0.453385 0.177588 0.41 0.219911L0.25 0.349911C0.25 0.349911 0.25 0.349911 0.25 0.399911C0.25 0.449911 0.25 0.469911 0.2 0.499911L0.11 0.689911C0.10434 0.756458 0.10434 0.823365 0.11 0.889911L0 0.999911V12.9999C0 13.2651 0.105357 13.5195 0.292893 13.707C0.48043 13.8946 0.734784 13.9999 1 13.9999H10C10.2652 13.9999 10.5196 13.8946 10.7071 13.707C10.8946 13.5195 11 13.2651 11 12.9999C11 12.7347 10.8946 12.4803 10.7071 12.2928C10.5196 12.1053 10.2652 11.9999 10 11.9999H2V2.99991L8.4 7.79991C8.5731 7.92973 8.78363 7.99991 9 7.99991C9.21637 7.99991 9.4269 7.92973 9.6 7.79991L16 2.99991V11.9999H14C13.7348 11.9999 13.4804 12.1053 13.2929 12.2928C13.1054 12.4803 13 12.7347 13 12.9999C13 13.2651 13.1054 13.5195 13.2929 13.707C13.4804 13.8946 13.7348 13.9999 14 13.9999H17C17.2652 13.9999 17.5196 13.8946 17.7071 13.707C17.8946 13.5195 18 13.2651 18 12.9999V0.999911C18 0.999911 18 0.929911 18 0.889911ZM9 5.74991L4 1.99991H14L9 5.74991Z"
                                            fill="#01A3FF"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <!--/student-->
                        <!--student-->
                        <div class="d-flex align-items-center student pb-0">
                            <div class="dz-media">
                                <img src="../images/profile/small/pic5.jpg" alt="" class="avatar">
                            </div>
                            <div class="user-info">
                                <h6 class="card-title card-title--small mb-1"><a href="app-profile.html">Nadila
                                        Adja</a>
                                </h6>
                                <p class="mb-0">QA Engineer</p>
                            </div>
                            <div class="indox">
                                <a href="#">
                                    <svg width="19" height="14" viewBox="0 0 19 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M18 0.889911C18.0057 0.823365 18.0057 0.756458 18 0.689911L17.91 0.499911C17.91 0.499911 17.91 0.429911 17.86 0.399911L17.81 0.349911L17.65 0.219911C17.6062 0.175413 17.5556 0.138269 17.5 0.109911L17.33 0.0499115H17.13H0.93H0.73L0.56 0.119911C0.504246 0.143681 0.453385 0.177588 0.41 0.219911L0.25 0.349911C0.25 0.349911 0.25 0.349911 0.25 0.399911C0.25 0.449911 0.25 0.469911 0.2 0.499911L0.11 0.689911C0.10434 0.756458 0.10434 0.823365 0.11 0.889911L0 0.999911V12.9999C0 13.2651 0.105357 13.5195 0.292893 13.707C0.48043 13.8946 0.734784 13.9999 1 13.9999H10C10.2652 13.9999 10.5196 13.8946 10.7071 13.707C10.8946 13.5195 11 13.2651 11 12.9999C11 12.7347 10.8946 12.4803 10.7071 12.2928C10.5196 12.1053 10.2652 11.9999 10 11.9999H2V2.99991L8.4 7.79991C8.5731 7.92973 8.78363 7.99991 9 7.99991C9.21637 7.99991 9.4269 7.92973 9.6 7.79991L16 2.99991V11.9999H14C13.7348 11.9999 13.4804 12.1053 13.2929 12.2928C13.1054 12.4803 13 12.7347 13 12.9999C13 13.2651 13.1054 13.5195 13.2929 13.707C13.4804 13.8946 13.7348 13.9999 14 13.9999H17C17.2652 13.9999 17.5196 13.8946 17.7071 13.707C17.8946 13.5195 18 13.2651 18 12.9999V0.999911C18 0.999911 18 0.929911 18 0.889911ZM9 5.74991L4 1.99991H14L9 5.74991Z"
                                            fill="#01A3FF"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <!--/student-->

                    </div>
                    <div class="card-footer text-center border-0 px-3">
                        <a href="javascritpt%20void(0)%3b.html" class="btn btn-block btn-primary  dlab-load-more"
                           id="RecentActivity"
                           rel="/cakephp/demo/fin-lab-admin/ajax-recentactivity">View More</a>
                    </div>
                </div>
            </div>
            <!--/column-->
            <!--column-->
            <div class="col-xl-12">
                <div class="card progressbar bg-transparent mb-0">
                    <div class="card-header border-0 px-3 py-0">
                        <div>
                            <h5 class="mb-0">Project</h5>
                            <p class="mb-0">You have <strong>456 </strong>contacts</span>
                        </div>
                        <div class="dropdown custom-dropdown">
                            <div class="btn sharp btn-primary tp-btn " data-bs-toggle="dropdown">
                                <svg width="5" height="15" viewBox="0 0 6 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.19995 10.001C5.19995 9.71197 5.14302 9.42576 5.03241 9.15872C4.9218 8.89169 4.75967 8.64905 4.55529 8.44467C4.35091 8.24029 4.10828 8.07816 3.84124 7.96755C3.5742 7.85694 3.28799 7.80001 2.99895 7.80001C2.70991 7.80001 2.4237 7.85694 2.15667 7.96755C1.88963 8.07816 1.64699 8.24029 1.44261 8.44467C1.23823 8.64905 1.0761 8.89169 0.965493 9.15872C0.854882 9.42576 0.797952 9.71197 0.797952 10.001C0.798085 10.5848 1.0301 11.1445 1.44296 11.5572C1.85582 11.9699 2.41571 12.2016 2.99945 12.2015C3.58319 12.2014 4.14297 11.9694 4.55565 11.5565C4.96832 11.1436 5.20008 10.5838 5.19995 10L5.19995 10.001ZM5.19995 3.00101C5.19995 2.71197 5.14302 2.42576 5.03241 2.15872C4.9218 1.89169 4.75967 1.64905 4.55529 1.44467C4.35091 1.24029 4.10828 1.07816 3.84124 0.967552C3.5742 0.856941 3.28799 0.800011 2.99895 0.800011C2.70991 0.800011 2.4237 0.856941 2.15667 0.967552C1.88963 1.07816 1.64699 1.24029 1.44261 1.44467C1.23823 1.64905 1.0761 1.89169 0.965493 2.15872C0.854883 2.42576 0.797953 2.71197 0.797953 3.00101C0.798085 3.58475 1.0301 4.14453 1.44296 4.55721C1.85582 4.96988 2.41571 5.20164 2.99945 5.20151C3.58319 5.20138 4.14297 4.96936 4.55565 4.5565C4.96832 4.14364 5.20008 3.58375 5.19995 3.00001L5.19995 3.00101ZM5.19995 17.001C5.19995 16.712 5.14302 16.4258 5.03241 16.1587C4.9218 15.8917 4.75967 15.6491 4.55529 15.4447C4.35091 15.2403 4.10828 15.0782 3.84124 14.9676C3.5742 14.8569 3.28799 14.8 2.99895 14.8C2.70991 14.8 2.4237 14.8569 2.15666 14.9676C1.88963 15.0782 1.64699 15.2403 1.44261 15.4447C1.23823 15.6491 1.0761 15.8917 0.965493 16.1587C0.854882 16.4258 0.797952 16.712 0.797952 17.001C0.798084 17.5848 1.0301 18.1445 1.44296 18.5572C1.85582 18.9699 2.41571 19.2016 2.99945 19.2015C3.58319 19.2014 4.14297 18.9694 4.55565 18.5565C4.96832 18.1436 5.20008 17.5838 5.19995 17L5.19995 17.001Z"
                                        fill="#01A3FF"/>
                                </svg>

                            </div>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="javascript:void(0);">Option 1</a>
                                <a class="dropdown-item" href="javascript:void(0);">Option 2</a>
                                <a class="dropdown-item" href="javascript:void(0);">Option 3</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body  p-3">
                        <div>
                            <div class="progress default-progress" style="height:8px;">
                                <div class="progress-bar bg-vigit progress-animated bg-secondary"
                                     style="width: 50%; height:100%;" role="progressbar">
                                    <span class="sr-only">90% Complete</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                <p class="mb-0 text-secondary">Web Design</p>
                                <p class="mb-0">452 times</p>
                            </div>
                        </div>
                        <div>
                            <div class="progress default-progress" style="height:8px;">
                                <div class="progress-bar bg-contact progress-animated "
                                     style="width: 68%; height:100%;"
                                     role="progressbar">
                                    <span class="sr-only">45% Complete</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                <p class="mb-0 text-primary">Graphic Design</p>
                                <p class="mb-0">97 times</p>
                            </div>
                        </div>
                        <div>
                            <div class="progress default-progress" style="height:8px;">
                                <div class="progress-bar bg-contact progress-animated bg-danger"
                                     style="width: 40%; height:100%;" role="progressbar">
                                    <span class="sr-only">45% Complete</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-end mt-2 justify-content-between">
                                <p class="mb-0 text-danger">Front-End</p>
                                <p class="mb-0">61 times</p>
                            </div>
                        </div>
                    </div>
                    <hr style="margin: 0px -15px 0px -15px; ">
                </div>
            </div>
            <!--/column-->
            <!--column-->
            <div class="col-xl-12 ">
                <div class="card tags mb-0 bg-transparent ">
                    <div class="card-header border-0  p-3 py-3 pb-0">
                        <div>
                            <h5>Tag</h5>
                        </div>

                    </div>
                    <div class="card-body  p-3 py-1 ">
                        <div>
                            <a href="javascript:void(0);" class="tag">#teamwork</a>
                            <a href="javascript:void(0);" class="tag">#design</a>
                            <a href="javascript:void(0);" class="tag">#projectmanagement</a>
                            <a href="javascript:void(0);" class="tag">16+</a>
                        </div>

                    </div>
                </div>
            </div>
            <hr style="margin: 0px -15px 0px -15px; ">
            <!--/column-->
            <!--column-->
            <div class="col-xl-12">
                <div class="card progressbar bg-transparent ">
                    <div class="card-header border-0  p-3 pb-0">
                        <div>
                            <h5 class="mb-0">Server Status</h5>
                        </div>
                        <div class="dropdown custom-dropdown">
                            <div class="btn sharp btn-primary tp-btn " data-bs-toggle="dropdown">
                                <svg width="5" height="15" viewBox="0 0 6 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.19995 10.001C5.19995 9.71197 5.14302 9.42576 5.03241 9.15872C4.9218 8.89169 4.75967 8.64905 4.55529 8.44467C4.35091 8.24029 4.10828 8.07816 3.84124 7.96755C3.5742 7.85694 3.28799 7.80001 2.99895 7.80001C2.70991 7.80001 2.4237 7.85694 2.15667 7.96755C1.88963 8.07816 1.64699 8.24029 1.44261 8.44467C1.23823 8.64905 1.0761 8.89169 0.965493 9.15872C0.854882 9.42576 0.797952 9.71197 0.797952 10.001C0.798085 10.5848 1.0301 11.1445 1.44296 11.5572C1.85582 11.9699 2.41571 12.2016 2.99945 12.2015C3.58319 12.2014 4.14297 11.9694 4.55565 11.5565C4.96832 11.1436 5.20008 10.5838 5.19995 10L5.19995 10.001ZM5.19995 3.00101C5.19995 2.71197 5.14302 2.42576 5.03241 2.15872C4.9218 1.89169 4.75967 1.64905 4.55529 1.44467C4.35091 1.24029 4.10828 1.07816 3.84124 0.967552C3.5742 0.856941 3.28799 0.800011 2.99895 0.800011C2.70991 0.800011 2.4237 0.856941 2.15667 0.967552C1.88963 1.07816 1.64699 1.24029 1.44261 1.44467C1.23823 1.64905 1.0761 1.89169 0.965493 2.15872C0.854883 2.42576 0.797953 2.71197 0.797953 3.00101C0.798085 3.58475 1.0301 4.14453 1.44296 4.55721C1.85582 4.96988 2.41571 5.20164 2.99945 5.20151C3.58319 5.20138 4.14297 4.96936 4.55565 4.5565C4.96832 4.14364 5.20008 3.58375 5.19995 3.00001L5.19995 3.00101ZM5.19995 17.001C5.19995 16.712 5.14302 16.4258 5.03241 16.1587C4.9218 15.8917 4.75967 15.6491 4.55529 15.4447C4.35091 15.2403 4.10828 15.0782 3.84124 14.9676C3.5742 14.8569 3.28799 14.8 2.99895 14.8C2.70991 14.8 2.4237 14.8569 2.15666 14.9676C1.88963 15.0782 1.64699 15.2403 1.44261 15.4447C1.23823 15.6491 1.0761 15.8917 0.965493 16.1587C0.854882 16.4258 0.797952 16.712 0.797952 17.001C0.798084 17.5848 1.0301 18.1445 1.44296 18.5572C1.85582 18.9699 2.41571 19.2016 2.99945 19.2015C3.58319 19.2014 4.14297 18.9694 4.55565 18.5565C4.96832 18.1436 5.20008 17.5838 5.19995 17L5.19995 17.001Z"
                                        fill="#01A3FF"/>
                                </svg>

                            </div>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="javascript:void(0);">Option 1</a>
                                <a class="dropdown-item" href="javascript:void(0);">Option 2</a>
                                <a class="dropdown-item" href="javascript:void(0);">Option 3</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body  p-3">
                        <div class="server-content">
                            <div class="progress default-progress">
                                <div class="progress-bar bg-vigit progress-animated bg-pink"
                                     style="width: 15%; height:100%;" role="progressbar">
                                    <span class="sr-only">30% Complete</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-end  pe-2 justify-content-between">
                                <span class=" value text-pink">10 AM</span>

                            </div>
                        </div>
                        <div class="server-content">
                            <div class="progress default-progress">
                                <div class="progress-bar bg-contact progress-animated bg-secondary"
                                     style="width: 45%; height:100%;" role="progressbar">
                                    <span class="sr-only">45% Complete</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-end  pe-2 justify-content-between">
                                <span class=" value text-secondary">8 AM</span>

                            </div>
                        </div>
                        <div class="server-content">
                            <div class="progress default-progress">
                                <div class="progress-bar bg-contact progress-animated bg-success"
                                     style="width: 45%; height:100%;" role="progressbar">
                                    <span class="sr-only">45% Complete</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-end  pe-2 justify-content-between">
                                <span class=" value text-success">6 AM</span>
                            </div>
                        </div>
                        <div class="server-content">
                            <div class="progress default-progress">
                                <div class="progress-bar bg-contact progress-animated bg-primary"
                                     style="width: 25%; height:100%;" role="progressbar">
                                    <span class="sr-only">25% Complete</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-end  pe-2 justify-content-between">
                                <span class=" value text-primary">4 AM</span>
                            </div>
                        </div>
                        <div class="server-content mb-0">
                            <div class="progress default-progress">
                                <div class="progress-bar bg-contact progress-animated bg-danger"
                                     style="width: 10%; height:100%;" role="progressbar">
                                    <span class="sr-only">15% Complete</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-end  pe-2 justify-content-between">
                                <span class=" value text-danger">2 AM</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/column-->
            <!--column-->
            <div class="sidebar-footer">
                <div class="col-xl-12">
                    <!--row-->
                    <div class="row">
                        <!--column-->
                        <div class="col-xl-4">
                            <div class="sidebar-info">
                                <p class="mb-0 text-black">Country</p>
                                <h4 class="card-title card-title--small mb-0"><a href="javascript:void(0);"
                                                                                 class="text-primary">Indonesia</a>
                                </h4>
                            </div>
                        </div>
                        <!--/column-->
                        <!--column-->
                        <div class="col-xl-4">
                            <div class="sidebar-info">
                                <p class="mb-0 text-black">Domain</p>
                                <h4 class="card-title card-title--small mb-0"><a href="javascript:void(0);"
                                                                                 class="text-primary">
                                        dexiglab.com </a></h4>
                            </div>
                        </div>
                        <!--/column-->
                        <!--column-->
                        <div class="col-xl-4 text-end">
                            <div class="sidebar-info text-center">
                            <span>
                                <svg width="16" height="10" viewBox="0 0 16 10" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.367887 8.38398L7.44789 0.535979C7.73589 0.199978 8.26389 0.199978 8.55189 0.535979L15.6319 8.38398C16.0879 8.88798 15.7519 9.70398 15.0799 9.70398L0.919888 9.70398C0.247888 9.70398 -0.0881128 8.88798 0.367887 8.38398Z"
                                        fill="var(--primary)"/>
                                </svg>
                            </span>
                                <h4 class="card-title card-title--small mb-0 text-primary"><a
                                        href="javascript:void(0);"></a>2.0 mbps</a></h4>
                            </div>
                        </div>
                        <!--/column-->
                    </div>
                    <!-- /row-->
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-titles">
                            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a
                                            href="{{ route('admin.dashboard') }}">{{ __('language.admin.home') }}</a>
                                    </li>
                                    <li class="breadcrumb-item active">{{ __('language.admin.dashboards.name') }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="swiper mySwiper-counter position-relative overflow-hidden">
                    <div class="swiper-wrapper ">
                        <!--swiper-slide-->
                        <div class="swiper-slide">
                            <div class="card counter">
                                <div class="card-body d-flex align-items-center">
                                    <div class="card-box-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 576 512" fill="none">
                                            <path fill="var(--primary)" stroke="var(--primary)" d="M0 24C0 10.7 10.7 0 24 0L69.5 0c22 0 41.5 12.8 50.6 32l411 0c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3l-288.5 0 5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5L488 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-288.3 0c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5L24 48C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96zM252 160c0 11 9 20 20 20l44 0 0 44c0 11 9 20 20 20s20-9 20-20l0-44 44 0c11 0 20-9 20-20s-9-20-20-20l-44 0 0-44c0-11-9-20-20-20s-20 9-20 20l0 44-44 0c-11 0-20 9-20 20z"/>
                                        </svg>
                                    </div>
                                    <div class="chart-num">
                                        <h2 class="mb-0">932</h2>
                                        <p class="mb-0">
                                            {{ __('language.admin.dashboards.order') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card counter">
                                <div class="card-body d-flex align-items-center">
                                    <div class="card-box-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                             fill="none" viewBox="0 0 448 512">
                                            <path fill="#9568FF" d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464l349.5 0c-8.9-63.3-63.3-112-129-112l-91.4 0c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304l91.4 0C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7L29.7 512C13.3 512 0 498.7 0 482.3z"/></svg>
                                    </div>
                                    <div class="chart-num">
                                        <h2 class="mb-0">102k</h2>
                                        <p class="mb-0">
                                            {{ __('language.admin.dashboards.member') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card counter">
                                <div class="card-body d-flex align-items-center">
                                    <div class="card-box-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 576 512">
                                            <path fill="#EB62D0" d="M253.3 35.1c6.1-11.8 1.5-26.3-10.2-32.4s-26.3-1.5-32.4 10.2L117.6 192 32 192c-17.7 0-32 14.3-32 32s14.3 32 32 32L83.9 463.5C91 492 116.6 512 146 512L430 512c29.4 0 55-20 62.1-48.5L544 256c17.7 0 32-14.3 32-32s-14.3-32-32-32l-85.6 0L365.3 12.9C359.2 1.2 344.7-3.4 332.9 2.7s-16.3 20.6-10.2 32.4L404.3 192l-232.6 0L253.3 35.1zM192 304l0 96c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-96c0-8.8 7.2-16 16-16s16 7.2 16 16zm96-16c8.8 0 16 7.2 16 16l0 96c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-96c0-8.8 7.2-16 16-16zm128 16l0 96c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-96c0-8.8 7.2-16 16-16s16 7.2 16 16z"/>
                                        </svg>
                                    </div>
                                    <div class="chart-num">
                                        <h2 class="font-w600 mb-0">{{ !empty($data['products']) ? count($data['products']) : 0 }}</h2>
                                        <p class="mb-0">
                                            {{ __('language.admin.dashboards.product') }}
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card counter">
                                <div class="card-body d-flex align-items-center">
                                    <div class="card-box-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 512 512">
                                            <path fill="#FF4646" d="M168 80c-13.3 0-24 10.7-24 24l0 304c0 8.4-1.4 16.5-4.1 24L440 432c13.3 0 24-10.7 24-24l0-304c0-13.3-10.7-24-24-24L168 80zM72 480c-39.8 0-72-32.2-72-72L0 112C0 98.7 10.7 88 24 88s24 10.7 24 24l0 296c0 13.3 10.7 24 24 24s24-10.7 24-24l0-304c0-39.8 32.2-72 72-72l272 0c39.8 0 72 32.2 72 72l0 304c0 39.8-32.2 72-72 72L72 480zM176 136c0-13.3 10.7-24 24-24l96 0c13.3 0 24 10.7 24 24l0 80c0 13.3-10.7 24-24 24l-96 0c-13.3 0-24-10.7-24-24l0-80zm200-24l32 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-32 0c-13.3 0-24-10.7-24-24s10.7-24 24-24zm0 80l32 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-32 0c-13.3 0-24-10.7-24-24s10.7-24 24-24zM200 272l208 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-208 0c-13.3 0-24-10.7-24-24s10.7-24 24-24zm0 80l208 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-208 0c-13.3 0-24-10.7-24-24s10.7-24 24-24z"/></svg>
                                    </div>
                                    <div class="chart-num">
                                        <h2 class="mb-0">{{ !empty($data['posts']) ? count($data['posts']) : 0 }}</h2>
                                        <p class="mb-0">
                                            {{ __('language.admin.dashboards.post') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-8 wow fadeInUp" data-wow-delay="1.5s">
                        <div class="card crypto-chart ">
                            <div class="card-header pb-0 border-0 flex-wrap">
                                <div class="mb-2 mb-sm-0">
                                    <div class="chart-title mb-3">
                                        <h2 class="card-title">{{ __('language.admin.dashboards.statisticalOrder') }}</h2>
                                    </div>
{{--                                    <div class="d-flex align-items-center mb-3 mb-sm-0">--}}
{{--                                        <div class="round weekly" id="dzOldSeries">--}}
{{--                                            <div>--}}
{{--                                                <input type="checkbox" id="checkbox1" name="radio" value="weekly">--}}
{{--                                                <label for="checkbox1" class="checkmark"></label>--}}
{{--                                            </div>--}}
{{--                                            <div>--}}
{{--                                                <p class="mb-0">Theo tuần</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="round" id="dzNewSeries">--}}
{{--                                            <div>--}}
{{--                                                <input type="checkbox" id="checkbox" name="radio" value="monthly">--}}
{{--                                                <label for="checkbox" class="checkmark"></label>--}}
{{--                                            </div>--}}
{{--                                            <div>--}}
{{--                                                <p class="mb-0">Theo tháng</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                </div>
                                <div class="p-static">
                                    <div class="d-flex align-items-center mb-3 ">
                                        <select class="image-select default-select dashboard-select"
                                                aria-label="Default">
                                            <option value="" selected>--{{ __('language.admin.dashboards.select') }}--</option>
                                            <option value="1">{{ __('language.admin.dashboards.day') }}</option>
                                            <option value="2">{{ __('language.admin.dashboards.month') }}</option>
                                            <option value="3">{{ __('language.admin.dashboards.year') }}</option>
                                        </select>
                                    </div>
                                    <div class="progress-content">
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-0">{{ __('language.admin.dashboards.revenue') }}</p>
                                            <p class="pull-end mb-0">3.982</p>
                                        </div>
                                        <div class="progress mt-1">
                                            <div class="progress-bar bg-primary" style="width: 70%; height:	100%;"
                                                 role="progressbar">
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body pt-2 custome-tooltip pb-0">
                                <div id="activity"></div>
                            </div>
                        </div>
                    </div>
                    <!--column-->
                    <div class="col-xl-4 wow fadeInUp" data-wow-delay="1s">
                        <div class="card">
                            <div class="card-header border-0">
                                <h2 class="card-title">{{ __('language.admin.dashboards.statisticalStatusOrder') }}</h2>
                            </div>
                            <div class="card-body text-center pt-0 pb-2">
                                <div id="pieChart" class="d-inline-block">

                                </div>
                                <div class="chart-items">
                                    <!--row-->
                                    <div class="row">
                                        <!--column-->
                                        <div class=" col-xl-12 col-sm-12">
                                            <div class="text-start mt-2">
                                                <h6>{{ __('language.admin.dashboards.suggest') }}</h6>
                                                <div class="color-picker">
                                                    <p class="mb-0  text-gray">
                                                        <svg class="me-2" width="14" height="14" viewBox="0 0 14 14"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="14" height="14" rx="4" fill="#9568FF"/>
                                                        </svg>
                                                        Primary (27%)
                                                    </p>
                                                    <h6 class="mb-0">763</h6>
                                                </div>
                                                <div class="color-picker">
                                                    <p class="mb-0 text-gray">
                                                        <svg class="me-2" width="14" height="14" viewBox="0 0 14 14"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="14" height="14" rx="4" fill="#000"/>
                                                        </svg>
                                                        Promotion (11%)
                                                    </p>
                                                    <h6 class="mb-0">321</h6>
                                                </div>
                                                <div class="color-picker">
                                                    <p class="mb-0 text-gray">
                                                        <svg class="me-2" width="14" height="14" viewBox="0 0 14 14"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="14" height="14" rx="4"
                                                                  fill="var(--primary)"/>
                                                        </svg>
                                                        Forum (22%)
                                                    </p>
                                                    <h6 class="mb-0">154</h6>
                                                </div>
                                                <div class="color-picker">
                                                    <p class="mb-0 text-gray">
                                                        <svg class="me-2" width="14" height="14" viewBox="0 0 14 14"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="14" height="14" rx="4" fill="#2BC844"/>
                                                        </svg>
                                                        Socials (15%)
                                                    </p>
                                                    <h6 class="mb-0">154</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/column-->
                                    </div>
                                    <!--/row-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/column-->
                </div>
                <div class="row">
                    <!--column-->
                    <div class="col-xl-6">
                        <div class="card overflow-hidden">
                            <div class="card-body p-4">
                                <h4 class="mb-0">{{ __('language.admin.dashboards.recentOrders') }}</h4>
                                <div class="mail-img">
                                    <svg width="120" height="84" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path fill="#e56a00" opacity="0.1" d="M160 112c0-35.3 28.7-64 64-64s64 28.7 64 64l0 48-128 0 0-48zm-48 48l-64 0c-26.5 0-48 21.5-48 48L0 416c0 53 43 96 96 96l256 0c53 0 96-43 96-96l0-208c0-26.5-21.5-48-48-48l-64 0 0-48C336 50.1 285.9 0 224 0S112 50.1 112 112l0 48zm24 48a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm152 24a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"/></svg>
                                </div>
                                <div class="card-body p-0">

                                </div>
                                <div class="card-footer border-0" style="padding: 30px 0 0 0;">
                                    <a href="" class="btn btn-primary w-100">{{ __('language.admin.dashboards.viewAll') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/column-->
                    <!--column-->
                    <div class="col-xl-6">
                        <div class="card overflow-hidden">
                            <div class="card-body p-4">
                                <h4 class="mb-0">{{ __('language.admin.dashboards.postNew') }}</h4>
                                <div class="mail-img">
                                    <svg width="120" height="84" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path opacity="0.1" fill="#9568FF" d="M168 80c-13.3 0-24 10.7-24 24l0 304c0 8.4-1.4 16.5-4.1 24L440 432c13.3 0 24-10.7 24-24l0-304c0-13.3-10.7-24-24-24L168 80zM72 480c-39.8 0-72-32.2-72-72L0 112C0 98.7 10.7 88 24 88s24 10.7 24 24l0 296c0 13.3 10.7 24 24 24s24-10.7 24-24l0-304c0-39.8 32.2-72 72-72l272 0c39.8 0 72 32.2 72 72l0 304c0 39.8-32.2 72-72 72L72 480zM176 136c0-13.3 10.7-24 24-24l96 0c13.3 0 24 10.7 24 24l0 80c0 13.3-10.7 24-24 24l-96 0c-13.3 0-24-10.7-24-24l0-80zm200-24l32 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-32 0c-13.3 0-24-10.7-24-24s10.7-24 24-24zm0 80l32 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-32 0c-13.3 0-24-10.7-24-24s10.7-24 24-24zM200 272l208 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-208 0c-13.3 0-24-10.7-24-24s10.7-24 24-24zm0 80l208 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-208 0c-13.3 0-24-10.7-24-24s10.7-24 24-24z"/>
                                    </svg>
                                </div>
                                <div class="card-body p-0">
                                    @if(!empty($data['top10PostLatest']))
                                        @foreach($data['top10PostLatest'] as $post)
                                            <div class="quick-info mt-3" style="padding: 20px 10px !important; border-radius: 4px;">
                                                <div class="quick-content">
                                                    <img src="{{ $post->avatar ?? '' }}" class="avatar me-2" alt="">
                                                    <div class="user-name">
                                                        <h6 class="mb-0">{{ $post->getTranslated('name') }}</h6>
                                                    </div>
                                                </div>
                                                <div class="count">
                                                    <span>{{ date('d/m/Y', strtotime($post->created_at)) }}</span>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="card-footer border-0" style="padding: 30px 0 0 0;">
                                    <a href="{{ route('admin.posts.index') }}" class="btn btn-primary w-100">{{ __('language.admin.dashboards.viewAll') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/column-->
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
