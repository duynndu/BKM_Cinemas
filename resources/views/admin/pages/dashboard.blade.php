@extends('admin.layouts.main')

@section('title', 'Bảng điều khiển')

@section('content')
    <div class="wallet-bar wow fadeInRight dlab-scroll active" id="wallet-bar" data-wow-delay="0.7s">
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
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                            <div id="datepicker" class="input-group date dz-calender" data-date-format="mm-dd-yyyy">
							<span class="input-group-addon d-flex align-items-center">
								<svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
									<path
                                        d="M12 14.0001C12.1978 14.0001 12.3911 13.9415 12.5556 13.8316C12.72 13.7217 12.8482 13.5655 12.9239 13.3828C12.9996 13.2001 13.0194 12.999 12.9808 12.805C12.9422 12.611 12.847 12.4329 12.7071 12.293C12.5673 12.1531 12.3891 12.0579 12.1951 12.0193C12.0011 11.9807 11.8 12.0005 11.6173 12.0762C11.4346 12.1519 11.2784 12.2801 11.1685 12.4445C11.0586 12.609 11 12.8023 11 13.0001C11 13.2653 11.1054 13.5197 11.2929 13.7072C11.4804 13.8947 11.7348 14.0001 12 14.0001ZM17 14.0001C17.1978 14.0001 17.3911 13.9415 17.5556 13.8316C17.72 13.7217 17.8482 13.5655 17.9239 13.3828C17.9996 13.2001 18.0194 12.999 17.9808 12.805C17.9422 12.611 17.847 12.4329 17.7071 12.293C17.5673 12.1531 17.3891 12.0579 17.1951 12.0193C17.0011 11.9807 16.8 12.0005 16.6173 12.0762C16.4346 12.1519 16.2784 12.2801 16.1685 12.4445C16.0586 12.609 16 12.8023 16 13.0001C16 13.2653 16.1054 13.5197 16.2929 13.7072C16.4804 13.8947 16.7348 14.0001 17 14.0001ZM12 18.0001C12.1978 18.0001 12.3911 17.9415 12.5556 17.8316C12.72 17.7217 12.8482 17.5655 12.9239 17.3828C12.9996 17.2001 13.0194 16.999 12.9808 16.805C12.9422 16.611 12.847 16.4328 12.7071 16.293C12.5673 16.1531 12.3891 16.0579 12.1951 16.0193C12.0011 15.9807 11.8 16.0005 11.6173 16.0762C11.4346 16.1519 11.2784 16.2801 11.1685 16.4445C11.0586 16.609 11 16.8023 11 17.0001C11 17.2653 11.1054 17.5197 11.2929 17.7072C11.4804 17.8947 11.7348 18.0001 12 18.0001ZM17 18.0001C17.1978 18.0001 17.3911 17.9415 17.5556 17.8316C17.72 17.7217 17.8482 17.5655 17.9239 17.3828C17.9996 17.2001 18.0194 16.999 17.9808 16.805C17.9422 16.611 17.847 16.4328 17.7071 16.293C17.5673 16.1531 17.3891 16.0579 17.1951 16.0193C17.0011 15.9807 16.8 16.0005 16.6173 16.0762C16.4346 16.1519 16.2784 16.2801 16.1685 16.4445C16.0586 16.609 16 16.8023 16 17.0001C16 17.2653 16.1054 17.5197 16.2929 17.7072C16.4804 17.8947 16.7348 18.0001 17 18.0001ZM7 14.0001C7.19778 14.0001 7.39112 13.9415 7.55557 13.8316C7.72002 13.7217 7.84819 13.5655 7.92388 13.3828C7.99957 13.2001 8.01937 12.999 7.98078 12.805C7.9422 12.611 7.84696 12.4329 7.70711 12.293C7.56725 12.1531 7.38907 12.0579 7.19509 12.0193C7.00111 11.9807 6.80004 12.0005 6.61732 12.0762C6.43459 12.1519 6.27841 12.2801 6.16853 12.4445C6.05865 12.609 6 12.8023 6 13.0001C6 13.2653 6.10536 13.5197 6.29289 13.7072C6.48043 13.8947 6.73478 14.0001 7 14.0001ZM19 4.00011H18V3.00011C18 2.73489 17.8946 2.48054 17.7071 2.293C17.5196 2.10546 17.2652 2.00011 17 2.00011C16.7348 2.00011 16.4804 2.10546 16.2929 2.293C16.1054 2.48054 16 2.73489 16 3.00011V4.00011H8V3.00011C8 2.73489 7.89464 2.48054 7.70711 2.293C7.51957 2.10546 7.26522 2.00011 7 2.00011C6.73478 2.00011 6.48043 2.10546 6.29289 2.293C6.10536 2.48054 6 2.73489 6 3.00011V4.00011H5C4.20435 4.00011 3.44129 4.31618 2.87868 4.87879C2.31607 5.4414 2 6.20446 2 7.00011V19.0001C2 19.7958 2.31607 20.5588 2.87868 21.1214C3.44129 21.684 4.20435 22.0001 5 22.0001H19C19.7956 22.0001 20.5587 21.684 21.1213 21.1214C21.6839 20.5588 22 19.7958 22 19.0001V7.00011C22 6.20446 21.6839 5.4414 21.1213 4.87879C20.5587 4.31618 19.7956 4.00011 19 4.00011ZM20 19.0001C20 19.2653 19.8946 19.5197 19.7071 19.7072C19.5196 19.8947 19.2652 20.0001 19 20.0001H5C4.73478 20.0001 4.48043 19.8947 4.29289 19.7072C4.10536 19.5197 4 19.2653 4 19.0001V10.0001H20V19.0001ZM20 8.00011H4V7.00011C4 6.73489 4.10536 6.48054 4.29289 6.293C4.48043 6.10546 4.73478 6.00011 5 6.00011H19C19.2652 6.00011 19.5196 6.10546 19.7071 6.293C19.8946 6.48054 20 6.73489 20 7.00011V8.00011ZM7 18.0001C7.19778 18.0001 7.39112 17.9415 7.55557 17.8316C7.72002 17.7217 7.84819 17.5655 7.92388 17.3828C7.99957 17.2001 8.01937 16.999 7.98078 16.805C7.9422 16.611 7.84696 16.4328 7.70711 16.293C7.56725 16.1531 7.38907 16.0579 7.19509 16.0193C7.00111 15.9807 6.80004 16.0005 6.61732 16.0762C6.43459 16.1519 6.27841 16.2801 6.16853 16.4445C6.05865 16.609 6 16.8023 6 17.0001C6 17.2653 6.10536 17.5197 6.29289 17.7072C6.48043 17.8947 6.73478 18.0001 7 18.0001Z"
                                        fill="var(--primary)"/>
								</svg>
							</span>
                                <div class="calender-picker">
                                    <h6 class="fs-14 mb-0 ms-2 font-w600">Change Period</h6>
                                    <input class="form-control h-auto" type="text" readonly="">
                                </div>
                            </div>
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
                                        <svg width="22" height="22" viewBox="0 0 30 30" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M22.8333 6.66667V7.16667H23.3333H28.3333C28.6428 7.16667 28.9395 7.28958 29.1583 7.50838C29.3771 7.72717 29.5 8.02391 29.5 8.33333V28.3333C29.5 28.6428 29.3771 28.9395 29.1583 29.1583C28.9395 29.3771 28.6428 29.5 28.3333 29.5H13.3333C13.0239 29.5 12.7272 29.3771 12.5084 29.1583C12.2896 28.9395 12.1667 28.6428 12.1667 28.3333C12.1667 28.0239 12.2896 27.7272 12.5084 27.5084C12.7272 27.2896 13.0239 27.1667 13.3333 27.1667H26.6667H27.1667V26.6667V18.3333V17.8333H26.6667H20H19.5V18.3333V20C19.5 20.3094 19.3771 20.6062 19.1583 20.825C18.9395 21.0438 18.6428 21.1667 18.3333 21.1667H11.6667C11.3572 21.1667 11.0605 21.0438 10.8417 20.825C10.6229 20.6062 10.5 20.3094 10.5 20V18.3333V17.8333H10H3.33333H2.83333V18.3333V26.6667V27.1667H3.33333H6.66667C6.97609 27.1667 7.27283 27.2896 7.49162 27.5084C7.71042 27.7272 7.83333 28.0239 7.83333 28.3333C7.83333 28.6428 7.71042 28.9395 7.49162 29.1583C7.27283 29.3771 6.97609 29.5 6.66667 29.5H1.66667C1.35725 29.5 1.0605 29.3771 0.841709 29.1583C0.622917 28.9395 0.5 28.6428 0.5 28.3333V8.33333C0.5 8.02391 0.622916 7.72717 0.841709 7.50838C1.0605 7.28958 1.35725 7.16667 1.66667 7.16667H6.66667H7.16667V6.66667V1.66667C7.16667 1.35725 7.28958 1.0605 7.50838 0.841709C7.72717 0.622916 8.02391 0.5 8.33333 0.5H21.6667C21.9761 0.5 22.2728 0.622916 22.4916 0.841709C22.7104 1.0605 22.8333 1.35725 22.8333 1.66667V6.66667ZM10 2.83333H9.5V3.33333V6.66667V7.16667H10H20H20.5V6.66667V3.33333V2.83333H20H10ZM16.6667 18.8333H17.1667V18.3333V15V14.5H16.6667H13.3333H12.8333V15V18.3333V18.8333H13.3333H16.6667ZM19.5 15V15.5H20H26.6667H27.1667V15V10V9.5H26.6667H3.33333H2.83333V10V15V15.5H3.33333H10H10.5V15V13.3333C10.5 13.0239 10.6229 12.7272 10.8417 12.5084C11.0605 12.2896 11.3572 12.1667 11.6667 12.1667H18.3333C18.6428 12.1667 18.9395 12.2896 19.1583 12.5084C19.3771 12.7272 19.5 13.0239 19.5 13.3333V15Z"
                                                fill="var(--primary)" stroke="var(--primary)"/>
                                        </svg>
                                    </div>
                                    <div class="chart-num">
                                        <h2 class="mb-0">932</h2>
                                        <p class="mb-0">
                                            Project
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card counter">
                                <div class="card-body d-flex align-items-center">
                                    <div class="card-box-icon">
                                        <svg width="22" height="22" viewBox="0 0 28 30" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M26.9666 8.96667L20.3 0.633334C20.1447 0.436911 19.9473 0.277976 19.7222 0.168333C19.4972 0.0586894 19.2503 0.00115414 19 0H2.33329C1.89126 0 1.46734 0.175595 1.15478 0.488155C0.842221 0.800716 0.666626 1.22464 0.666626 1.66667V10C0.666626 10.442 0.842221 10.8659 1.15478 11.1785C1.46734 11.4911 1.89126 11.6667 2.33329 11.6667C2.77532 11.6667 3.19924 11.4911 3.5118 11.1785C3.82436 10.8659 3.99996 10.442 3.99996 10V3.33333H15.6666V10C15.6666 10.442 15.8422 10.8659 16.1548 11.1785C16.4673 11.4911 16.8913 11.6667 17.3333 11.6667H24V26.6667H3.99996V18.3333C3.99996 17.8913 3.82436 17.4674 3.5118 17.1548C3.19924 16.8423 2.77532 16.6667 2.33329 16.6667C1.89126 16.6667 1.46734 16.8423 1.15478 17.1548C0.842221 17.4674 0.666626 17.8913 0.666626 18.3333V28.3333C0.666626 28.7754 0.842221 29.1993 1.15478 29.5118C1.46734 29.8244 1.89126 30 2.33329 30H25.6666C26.1086 30 26.5326 29.8244 26.8451 29.5118C27.1577 29.1993 27.3333 28.7754 27.3333 28.3333V10C27.3311 9.62406 27.2019 9.2599 26.9666 8.96667ZM19 4.33333L22.2 8.33333H19V4.33333Z"
                                                fill="#FF4646"/>
                                            <path
                                                d="M26.9666 8.96667L20.3 0.633334C20.1447 0.436911 19.9473 0.277976 19.7222 0.168333C19.4972 0.0586894 19.2503 0.00115414 19 0H2.33329C1.89126 0 1.46734 0.175595 1.15478 0.488155C0.842221 0.800716 0.666626 1.22464 0.666626 1.66667V10C0.666626 10.442 0.842221 10.8659 1.15478 11.1785C1.46734 11.4911 1.89126 11.6667 2.33329 11.6667C2.77532 11.6667 3.19924 11.4911 3.5118 11.1785C3.82436 10.8659 3.99996 10.442 3.99996 10V3.33333H15.6666V10C15.6666 10.442 15.8422 10.8659 16.1548 11.1785C16.4673 11.4911 16.8913 11.6667 17.3333 11.6667H24V26.6667H3.99996V18.3333C3.99996 17.8913 3.82436 17.4674 3.5118 17.1548C3.19924 16.8423 2.77532 16.6667 2.33329 16.6667C1.89126 16.6667 1.46734 16.8423 1.15478 17.1548C0.842221 17.4674 0.666626 17.8913 0.666626 18.3333V28.3333C0.666626 28.7754 0.842221 29.1993 1.15478 29.5118C1.46734 29.8244 1.89126 30 2.33329 30H25.6666C26.1086 30 26.5326 29.8244 26.8451 29.5118C27.1577 29.1993 27.3333 28.7754 27.3333 28.3333V10C27.3311 9.62406 27.2019 9.2599 26.9666 8.96667ZM19 4.33333L22.2 8.33333H19V4.33333Z"
                                                stroke="none"/>
                                            <path
                                                d="M14 13.3333C13.558 13.3333 13.134 13.5089 12.8215 13.8215C12.5089 14.1341 12.3333 14.558 12.3333 15V16.6667H10.6667C10.2246 16.6667 9.80072 16.8423 9.48816 17.1548C9.1756 17.4674 9 17.8913 9 18.3333C9 18.7754 9.1756 19.1993 9.48816 19.5118C9.80072 19.8244 10.2246 20 10.6667 20H12.3333V21.6667C12.3333 22.1087 12.5089 22.5326 12.8215 22.8452C13.134 23.1577 13.558 23.3333 14 23.3333C14.442 23.3333 14.866 23.1577 15.1785 22.8452C15.4911 22.5326 15.6667 22.1087 15.6667 21.6667V20H17.3333C17.7754 20 18.1993 19.8244 18.5118 19.5118C18.8244 19.1993 19 18.7754 19 18.3333C19 17.8913 18.8244 17.4674 18.5118 17.1548C18.1993 16.8423 17.7754 16.6667 17.3333 16.6667H15.6667V15C15.6667 14.558 15.4911 14.1341 15.1785 13.8215C14.866 13.5089 14.442 13.3333 14 13.3333Z"
                                                fill="#FF4646"/>
                                            <path
                                                d="M14 13.3333C13.558 13.3333 13.134 13.5089 12.8215 13.8215C12.5089 14.1341 12.3333 14.558 12.3333 15V16.6667H10.6667C10.2246 16.6667 9.80072 16.8423 9.48816 17.1548C9.1756 17.4674 9 17.8913 9 18.3333C9 18.7754 9.1756 19.1993 9.48816 19.5118C9.80072 19.8244 10.2246 20 10.6667 20H12.3333V21.6667C12.3333 22.1087 12.5089 22.5326 12.8215 22.8452C13.134 23.1577 13.558 23.3333 14 23.3333C14.442 23.3333 14.866 23.1577 15.1785 22.8452C15.4911 22.5326 15.6667 22.1087 15.6667 21.6667V20H17.3333C17.7754 20 18.1993 19.8244 18.5118 19.5118C18.8244 19.1993 19 18.7754 19 18.3333C19 17.8913 18.8244 17.4674 18.5118 17.1548C18.1993 16.8423 17.7754 16.6667 17.3333 16.6667H15.6667V15C15.6667 14.558 15.4911 14.1341 15.1785 13.8215C14.866 13.5089 14.442 13.3333 14 13.3333Z"
                                                stroke="transparent"/>
                                        </svg>
                                    </div>
                                    <div class="chart-num">
                                        <h2 class="mb-0">1,032</h2>
                                        <p class="mb-0">
                                            Inquiries
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card counter">
                                <div class="card-body d-flex align-items-center">
                                    <div class="card-box-icon">
                                        <svg width="22" height="22" viewBox="0 0 30 30" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M22.2833 9.18334C23.091 9.71212 24.0346 9.99576 25 10C25.9889 10 26.9556 9.70676 27.7778 9.15735C28.6001 8.60794 29.2409 7.82705 29.6194 6.91342C29.9978 5.99979 30.0968 4.99446 29.9039 4.02455C29.711 3.05465 29.2348 2.16373 28.5355 1.46447C27.8362 0.765206 26.9453 0.289002 25.9754 0.0960758C25.0055 -0.0968503 24.0002 0.00216643 23.0865 0.380605C22.1729 0.759043 21.392 1.39991 20.8426 2.22215C20.2932 3.0444 20 4.0111 20 5C20.0045 5.50999 20.0888 6.01612 20.25 6.5L17.6666 9.11667C16.7019 8.50671 15.5575 8.2452 14.4236 8.37557C13.2896 8.50594 12.2344 9.02035 11.4333 9.83333L9.89997 9.33334C9.96784 9.00436 10.0014 8.66923 9.99997 8.33334C10.0044 7.20166 9.62475 6.10197 8.92315 5.21402C8.22154 4.32607 7.23946 3.70239 6.13745 3.44495C5.03544 3.1875 3.87869 3.31151 2.8563 3.79671C1.83391 4.28191 1.00636 5.09959 0.508922 6.11609C0.011488 7.13258 -0.126399 8.28776 0.117802 9.39278C0.362002 10.4978 0.973844 11.4873 1.85331 12.1995C2.73277 12.9117 3.82783 13.3045 4.95948 13.3137C6.09112 13.3229 7.19241 12.9479 8.0833 12.25L9.99997 12.8833C9.9918 13.0332 9.9918 13.1834 9.99997 13.3333C9.99997 14.6594 10.5267 15.9312 11.4644 16.8689C12.4021 17.8066 13.6739 18.3333 15 18.3333C16.326 18.3333 17.5978 17.8066 18.5355 16.8689C19.4732 15.9312 20 14.6594 20 13.3333C19.9886 12.8008 19.8987 12.2729 19.7333 11.7667L22.2833 9.18334ZM25 3.33334C25.3296 3.33334 25.6518 3.43108 25.9259 3.61422C26.2 3.79736 26.4136 4.05765 26.5398 4.3622C26.6659 4.66674 26.6989 5.00185 26.6346 5.32515C26.5703 5.64845 26.4116 5.94543 26.1785 6.17851C25.9454 6.4116 25.6484 6.57034 25.3251 6.63464C25.0018 6.69895 24.6667 6.66595 24.3622 6.5398C24.0576 6.41366 23.7973 6.20003 23.6142 5.92595C23.431 5.65187 23.3333 5.32964 23.3333 5C23.3333 4.55797 23.5089 4.13405 23.8215 3.82149C24.134 3.50893 24.5579 3.33334 25 3.33334ZM3.3333 8.33334C3.3333 8.0037 3.43105 7.68147 3.61418 7.40739C3.79732 7.1333 4.05762 6.91968 4.36216 6.79354C4.66671 6.66739 5.00182 6.63438 5.32512 6.69869C5.64842 6.763 5.94539 6.92174 6.17848 7.15482C6.41157 7.38791 6.5703 7.68488 6.63461 8.00819C6.69892 8.33149 6.66591 8.6666 6.53977 8.97114C6.41362 9.27569 6.2 9.53598 5.92592 9.71912C5.65183 9.90225 5.3296 10 4.99997 10C4.55794 10 4.13402 9.82441 3.82146 9.51185C3.5089 9.19929 3.3333 8.77536 3.3333 8.33334ZM15 15C14.6703 15 14.3481 14.9023 14.074 14.7191C13.7999 14.536 13.5863 14.2757 13.4602 13.9711C13.334 13.6666 13.301 13.3315 13.3653 13.0082C13.4296 12.6849 13.5884 12.3879 13.8215 12.1548C14.0545 11.9217 14.3515 11.763 14.6748 11.6987C14.9981 11.6344 15.3332 11.6674 15.6378 11.7935C15.9423 11.9197 16.2026 12.1333 16.3857 12.4074C16.5689 12.6815 16.6666 13.0037 16.6666 13.3333C16.6666 13.7754 16.491 14.1993 16.1785 14.5118C15.8659 14.8244 15.442 15 15 15Z"
                                                fill="#9568FF"/>
                                            <path
                                                d="M22.2833 9.18334C23.091 9.71212 24.0346 9.99576 25 10C25.9889 10 26.9556 9.70676 27.7778 9.15735C28.6001 8.60794 29.2409 7.82705 29.6194 6.91342C29.9978 5.99979 30.0968 4.99446 29.9039 4.02455C29.711 3.05465 29.2348 2.16373 28.5355 1.46447C27.8362 0.765206 26.9453 0.289002 25.9754 0.0960758C25.0055 -0.0968503 24.0002 0.00216643 23.0865 0.380605C22.1729 0.759043 21.392 1.39991 20.8426 2.22215C20.2932 3.0444 20 4.0111 20 5C20.0045 5.50999 20.0888 6.01612 20.25 6.5L17.6666 9.11667C16.7019 8.50671 15.5575 8.2452 14.4236 8.37557C13.2896 8.50594 12.2344 9.02035 11.4333 9.83333L9.89997 9.33334C9.96784 9.00436 10.0014 8.66923 9.99997 8.33334C10.0044 7.20166 9.62475 6.10197 8.92315 5.21402C8.22154 4.32607 7.23946 3.70239 6.13745 3.44495C5.03544 3.1875 3.87869 3.31151 2.8563 3.79671C1.83391 4.28191 1.00636 5.09959 0.508922 6.11609C0.011488 7.13258 -0.126399 8.28776 0.117802 9.39278C0.362002 10.4978 0.973844 11.4873 1.85331 12.1995C2.73277 12.9117 3.82783 13.3045 4.95948 13.3137C6.09112 13.3229 7.19241 12.9479 8.0833 12.25L9.99997 12.8833C9.9918 13.0332 9.9918 13.1834 9.99997 13.3333C9.99997 14.6594 10.5267 15.9312 11.4644 16.8689C12.4021 17.8066 13.6739 18.3333 15 18.3333C16.326 18.3333 17.5978 17.8066 18.5355 16.8689C19.4732 15.9312 20 14.6594 20 13.3333C19.9886 12.8008 19.8987 12.2729 19.7333 11.7667L22.2833 9.18334ZM25 3.33334C25.3296 3.33334 25.6518 3.43108 25.9259 3.61422C26.2 3.79736 26.4136 4.05765 26.5398 4.3622C26.6659 4.66674 26.6989 5.00185 26.6346 5.32515C26.5703 5.64845 26.4116 5.94543 26.1785 6.17851C25.9454 6.4116 25.6484 6.57034 25.3251 6.63464C25.0018 6.69895 24.6667 6.66595 24.3622 6.5398C24.0576 6.41366 23.7973 6.20003 23.6142 5.92595C23.431 5.65187 23.3333 5.32964 23.3333 5C23.3333 4.55797 23.5089 4.13405 23.8215 3.82149C24.134 3.50893 24.5579 3.33334 25 3.33334ZM3.3333 8.33334C3.3333 8.0037 3.43105 7.68147 3.61418 7.40739C3.79732 7.1333 4.05762 6.91968 4.36216 6.79354C4.66671 6.66739 5.00182 6.63438 5.32512 6.69869C5.64842 6.763 5.94539 6.92174 6.17848 7.15482C6.41157 7.38791 6.5703 7.68488 6.63461 8.00819C6.69892 8.33149 6.66591 8.6666 6.53977 8.97114C6.41362 9.27569 6.2 9.53598 5.92592 9.71912C5.65183 9.90225 5.3296 10 4.99997 10C4.55794 10 4.13402 9.82441 3.82146 9.51185C3.5089 9.19929 3.3333 8.77536 3.3333 8.33334ZM15 15C14.6703 15 14.3481 14.9023 14.074 14.7191C13.7999 14.536 13.5863 14.2757 13.4602 13.9711C13.334 13.6666 13.301 13.3315 13.3653 13.0082C13.4296 12.6849 13.5884 12.3879 13.8215 12.1548C14.0545 11.9217 14.3515 11.763 14.6748 11.6987C14.9981 11.6344 15.3332 11.6674 15.6378 11.7935C15.9423 11.9197 16.2026 12.1333 16.3857 12.4074C16.5689 12.6815 16.6666 13.0037 16.6666 13.3333C16.6666 13.7754 16.491 14.1993 16.1785 14.5118C15.8659 14.8244 15.442 15 15 15Z"
                                                stroke="none"/>
                                            <path
                                                d="M8.33329 15H3.33329C2.89127 15 2.46734 15.1756 2.15478 15.4882C1.84222 15.8007 1.66663 16.2246 1.66663 16.6667V28.3333C1.66663 28.7754 1.84222 29.1993 2.15478 29.5118C2.46734 29.8244 2.89127 30 3.33329 30H8.33329C8.77532 30 9.19924 29.8244 9.5118 29.5118C9.82436 29.1993 9.99996 28.7754 9.99996 28.3333V16.6667C9.99996 16.2246 9.82436 15.8007 9.5118 15.4882C9.19924 15.1756 8.77532 15 8.33329 15ZM6.66663 26.6667H4.99996V18.3333H6.66663V26.6667ZM28.3333 11.6667H23.3333C22.8913 11.6667 22.4673 11.8423 22.1548 12.1548C21.8422 12.4674 21.6666 12.8913 21.6666 13.3333V28.3333C21.6666 28.7754 21.8422 29.1993 22.1548 29.5118C22.4673 29.8244 22.8913 30 23.3333 30H28.3333C28.7753 30 29.1992 29.8244 29.5118 29.5118C29.8244 29.1993 30 28.7754 30 28.3333V23.3333C30 22.8913 29.8244 22.4674 29.5118 22.1548C29.1992 21.8423 28.7753 21.6667 28.3333 21.6667C27.8913 21.6667 27.4673 21.8423 27.1548 22.1548C26.8422 22.4674 26.6666 22.8913 26.6666 23.3333V26.6667H25V15H26.6666V18.3333C26.6666 18.7754 26.8422 19.1993 27.1548 19.5118C27.4673 19.8244 27.8913 20 28.3333 20C28.7753 20 29.1992 19.8244 29.5118 19.5118C29.8244 19.1993 30 18.7754 30 18.3333V13.3333C30 12.8913 29.8244 12.4674 29.5118 12.1548C29.1992 11.8423 28.7753 11.6667 28.3333 11.6667ZM18.3333 20H13.3333C12.8913 20 12.4673 20.1756 12.1548 20.4882C11.8422 20.8007 11.6666 21.2246 11.6666 21.6667V28.3333C11.6666 28.7754 11.8422 29.1993 12.1548 29.5118C12.4673 29.8244 12.8913 30 13.3333 30H18.3333C18.7753 30 19.1992 29.8244 19.5118 29.5118C19.8244 29.1993 20 28.7754 20 28.3333V21.6667C20 21.2246 19.8244 20.8007 19.5118 20.4882C19.1992 20.1756 18.7753 20 18.3333 20ZM16.6666 26.6667H15V23.3333H16.6666V26.6667Z"
                                                fill="#9568FF"/>
                                            <path
                                                d="M8.33329 15H3.33329C2.89127 15 2.46734 15.1756 2.15478 15.4882C1.84222 15.8007 1.66663 16.2246 1.66663 16.6667V28.3333C1.66663 28.7754 1.84222 29.1993 2.15478 29.5118C2.46734 29.8244 2.89127 30 3.33329 30H8.33329C8.77532 30 9.19924 29.8244 9.5118 29.5118C9.82436 29.1993 9.99996 28.7754 9.99996 28.3333V16.6667C9.99996 16.2246 9.82436 15.8007 9.5118 15.4882C9.19924 15.1756 8.77532 15 8.33329 15ZM6.66663 26.6667H4.99996V18.3333H6.66663V26.6667ZM28.3333 11.6667H23.3333C22.8913 11.6667 22.4673 11.8423 22.1548 12.1548C21.8422 12.4674 21.6666 12.8913 21.6666 13.3333V28.3333C21.6666 28.7754 21.8422 29.1993 22.1548 29.5118C22.4673 29.8244 22.8913 30 23.3333 30H28.3333C28.7753 30 29.1992 29.8244 29.5118 29.5118C29.8244 29.1993 30 28.7754 30 28.3333V23.3333C30 22.8913 29.8244 22.4674 29.5118 22.1548C29.1992 21.8423 28.7753 21.6667 28.3333 21.6667C27.8913 21.6667 27.4673 21.8423 27.1548 22.1548C26.8422 22.4674 26.6666 22.8913 26.6666 23.3333V26.6667H25V15H26.6666V18.3333C26.6666 18.7754 26.8422 19.1993 27.1548 19.5118C27.4673 19.8244 27.8913 20 28.3333 20C28.7753 20 29.1992 19.8244 29.5118 19.5118C29.8244 19.1993 30 18.7754 30 18.3333V13.3333C30 12.8913 29.8244 12.4674 29.5118 12.1548C29.1992 11.8423 28.7753 11.6667 28.3333 11.6667ZM18.3333 20H13.3333C12.8913 20 12.4673 20.1756 12.1548 20.4882C11.8422 20.8007 11.6666 21.2246 11.6666 21.6667V28.3333C11.6666 28.7754 11.8422 29.1993 12.1548 29.5118C12.4673 29.8244 12.8913 30 13.3333 30H18.3333C18.7753 30 19.1992 29.8244 19.5118 29.5118C19.8244 29.1993 20 28.7754 20 28.3333V21.6667C20 21.2246 19.8244 20.8007 19.5118 20.4882C19.1992 20.1756 18.7753 20 18.3333 20ZM16.6666 26.6667H15V23.3333H16.6666V26.6667Z"
                                                stroke="none"/>
                                        </svg>
                                    </div>
                                    <div class="chart-num">
                                        <h2 class="mb-0">102k</h2>
                                        <p class="mb-0">
                                            Investment
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card counter">
                                <div class="card-body d-flex align-items-center">
                                    <div class="card-box-icon">
                                        <svg width="22" height="22" viewBox="0 0 40 40" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M35.0001 21.4C34.9363 21.0057 34.7328 20.6474 34.4269 20.3904C34.121 20.1334 33.733 19.9949 33.3335 20H26.6668C26.91 20.0032 27.151 19.953 27.3728 19.8531C27.5946 19.7532 27.7918 19.606 27.9507 19.4217C28.1095 19.2375 28.2261 19.0207 28.2922 18.7866C28.3583 18.5525 28.3724 18.3068 28.3335 18.0667L26.6668 8.0667C26.6029 7.67233 26.3995 7.31402 26.0936 7.05706C25.7877 6.80009 25.3996 6.66156 25.0001 6.6667H15.0001C14.6007 6.66156 14.2126 6.80009 13.9067 7.05706C13.6008 7.31402 13.3974 7.67233 13.3335 8.0667L11.6668 18.0667C11.6287 18.3061 11.6433 18.5509 11.7095 18.784C11.7757 19.0172 11.8919 19.2331 12.0501 19.4167C12.2084 19.6018 12.4054 19.7499 12.6271 19.8507C12.8488 19.9515 13.0899 20.0025 13.3335 20H6.66681C6.26733 19.9949 5.87929 20.1334 5.57337 20.3904C5.26746 20.6474 5.06403 21.0057 5.00014 21.4L3.33348 31.4C3.29537 31.6394 3.30992 31.8842 3.37613 32.1173C3.44233 32.3505 3.55859 32.5664 3.71681 32.75C3.87511 32.9351 4.07204 33.0833 4.29377 33.1841C4.51549 33.2848 4.7566 33.3358 5.00014 33.3334H18.3335C18.5742 33.3334 18.8121 33.2812 19.0308 33.1806C19.2494 33.0799 19.4437 32.933 19.6001 32.75C19.7584 32.5664 19.8746 32.3505 19.9408 32.1173C20.007 31.8842 20.0216 31.6394 19.9835 31.4L18.3168 21.4C18.2533 21.0085 18.0523 20.6525 17.7499 20.3958C17.4475 20.1392 17.0634 19.9989 16.6668 20H23.3335C22.934 19.9949 22.5459 20.1334 22.24 20.3904C21.9341 20.6474 21.7307 21.0057 21.6668 21.4L20.0001 31.4C19.962 31.6394 19.9766 31.8842 20.0428 32.1173C20.109 32.3505 20.2253 32.5664 20.3835 32.75C20.5418 32.9351 20.7387 33.0833 20.9604 33.1841C21.1822 33.2848 21.4233 33.3358 21.6668 33.3334H26.6668C27.1088 33.3334 27.5328 33.1578 27.8453 32.8452C28.1579 32.5327 28.3335 32.1087 28.3335 31.6667C28.3335 31.2247 28.1579 30.8008 27.8453 30.4882C27.5328 30.1756 27.1088 30 26.6668 30H23.6335L24.7501 23.3334H31.9168L33.0335 30H31.6668C31.2248 30 30.8009 30.1756 30.4883 30.4882C30.1757 30.8008 30.0001 31.2247 30.0001 31.6667C30.0001 32.1087 30.1757 32.5327 30.4883 32.8452C30.8009 33.1578 31.2248 33.3334 31.6668 33.3334H35.0001C35.2434 33.3365 35.4843 33.2864 35.7061 33.1865C35.9279 33.0866 36.1252 32.9393 36.284 32.7551C36.4428 32.5708 36.5594 32.3541 36.6255 32.12C36.6917 31.8859 36.7057 31.6402 36.6668 31.4L35.0001 21.4ZM6.96681 30L8.08348 23.3334H15.2501L16.3668 30H6.96681ZM15.3001 16.6667L16.4168 10H23.5835L24.7001 16.6667H15.3001Z"
                                                fill="#EB62D0"/>
                                        </svg>
                                    </div>
                                    <div class="chart-num">
                                        <h2 class="font-w600 mb-0">32k</h2>
                                        <p class="mb-0">
                                            Assets
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card counter">
                                <div class="card-body d-flex align-items-center">
                                    <div class="card-box-icon">
                                        <svg width="22" height="22" viewBox="0 0 30 30" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M22.2833 9.18334C23.091 9.71212 24.0346 9.99576 25 10C25.9889 10 26.9556 9.70676 27.7778 9.15735C28.6001 8.60794 29.2409 7.82705 29.6194 6.91342C29.9978 5.99979 30.0968 4.99446 29.9039 4.02455C29.711 3.05465 29.2348 2.16373 28.5355 1.46447C27.8362 0.765206 26.9453 0.289002 25.9754 0.0960758C25.0055 -0.0968503 24.0002 0.00216643 23.0865 0.380605C22.1729 0.759043 21.392 1.39991 20.8426 2.22215C20.2932 3.0444 20 4.0111 20 5C20.0045 5.50999 20.0888 6.01612 20.25 6.5L17.6666 9.11667C16.7019 8.50671 15.5575 8.2452 14.4236 8.37557C13.2896 8.50594 12.2344 9.02035 11.4333 9.83333L9.89997 9.33334C9.96784 9.00436 10.0014 8.66923 9.99997 8.33334C10.0044 7.20166 9.62475 6.10197 8.92315 5.21402C8.22154 4.32607 7.23946 3.70239 6.13745 3.44495C5.03544 3.1875 3.87869 3.31151 2.8563 3.79671C1.83391 4.28191 1.00636 5.09959 0.508922 6.11609C0.011488 7.13258 -0.126399 8.28776 0.117802 9.39278C0.362002 10.4978 0.973844 11.4873 1.85331 12.1995C2.73277 12.9117 3.82783 13.3045 4.95948 13.3137C6.09112 13.3229 7.19241 12.9479 8.0833 12.25L9.99997 12.8833C9.9918 13.0332 9.9918 13.1834 9.99997 13.3333C9.99997 14.6594 10.5267 15.9312 11.4644 16.8689C12.4021 17.8066 13.6739 18.3333 15 18.3333C16.326 18.3333 17.5978 17.8066 18.5355 16.8689C19.4732 15.9312 20 14.6594 20 13.3333C19.9886 12.8008 19.8987 12.2729 19.7333 11.7667L22.2833 9.18334ZM25 3.33334C25.3296 3.33334 25.6518 3.43108 25.9259 3.61422C26.2 3.79736 26.4136 4.05765 26.5398 4.3622C26.6659 4.66674 26.6989 5.00185 26.6346 5.32515C26.5703 5.64845 26.4116 5.94543 26.1785 6.17851C25.9454 6.4116 25.6484 6.57034 25.3251 6.63464C25.0018 6.69895 24.6667 6.66595 24.3622 6.5398C24.0576 6.41366 23.7973 6.20003 23.6142 5.92595C23.431 5.65187 23.3333 5.32964 23.3333 5C23.3333 4.55797 23.5089 4.13405 23.8215 3.82149C24.134 3.50893 24.5579 3.33334 25 3.33334ZM3.3333 8.33334C3.3333 8.0037 3.43105 7.68147 3.61418 7.40739C3.79732 7.1333 4.05762 6.91968 4.36216 6.79354C4.66671 6.66739 5.00182 6.63438 5.32512 6.69869C5.64842 6.763 5.94539 6.92174 6.17848 7.15482C6.41157 7.38791 6.5703 7.68488 6.63461 8.00819C6.69892 8.33149 6.66591 8.6666 6.53977 8.97114C6.41362 9.27569 6.2 9.53598 5.92592 9.71912C5.65183 9.90225 5.3296 10 4.99997 10C4.55794 10 4.13402 9.82441 3.82146 9.51185C3.5089 9.19929 3.3333 8.77536 3.3333 8.33334ZM15 15C14.6703 15 14.3481 14.9023 14.074 14.7191C13.7999 14.536 13.5863 14.2757 13.4602 13.9711C13.334 13.6666 13.301 13.3315 13.3653 13.0082C13.4296 12.6849 13.5884 12.3879 13.8215 12.1548C14.0545 11.9217 14.3515 11.763 14.6748 11.6987C14.9981 11.6344 15.3332 11.6674 15.6378 11.7935C15.9423 11.9197 16.2026 12.1333 16.3857 12.4074C16.5689 12.6815 16.6666 13.0037 16.6666 13.3333C16.6666 13.7754 16.491 14.1993 16.1785 14.5118C15.8659 14.8244 15.442 15 15 15Z"
                                                fill="#9568FF"/>
                                            <path
                                                d="M22.2833 9.18334C23.091 9.71212 24.0346 9.99576 25 10C25.9889 10 26.9556 9.70676 27.7778 9.15735C28.6001 8.60794 29.2409 7.82705 29.6194 6.91342C29.9978 5.99979 30.0968 4.99446 29.9039 4.02455C29.711 3.05465 29.2348 2.16373 28.5355 1.46447C27.8362 0.765206 26.9453 0.289002 25.9754 0.0960758C25.0055 -0.0968503 24.0002 0.00216643 23.0865 0.380605C22.1729 0.759043 21.392 1.39991 20.8426 2.22215C20.2932 3.0444 20 4.0111 20 5C20.0045 5.50999 20.0888 6.01612 20.25 6.5L17.6666 9.11667C16.7019 8.50671 15.5575 8.2452 14.4236 8.37557C13.2896 8.50594 12.2344 9.02035 11.4333 9.83333L9.89997 9.33334C9.96784 9.00436 10.0014 8.66923 9.99997 8.33334C10.0044 7.20166 9.62475 6.10197 8.92315 5.21402C8.22154 4.32607 7.23946 3.70239 6.13745 3.44495C5.03544 3.1875 3.87869 3.31151 2.8563 3.79671C1.83391 4.28191 1.00636 5.09959 0.508922 6.11609C0.011488 7.13258 -0.126399 8.28776 0.117802 9.39278C0.362002 10.4978 0.973844 11.4873 1.85331 12.1995C2.73277 12.9117 3.82783 13.3045 4.95948 13.3137C6.09112 13.3229 7.19241 12.9479 8.0833 12.25L9.99997 12.8833C9.9918 13.0332 9.9918 13.1834 9.99997 13.3333C9.99997 14.6594 10.5267 15.9312 11.4644 16.8689C12.4021 17.8066 13.6739 18.3333 15 18.3333C16.326 18.3333 17.5978 17.8066 18.5355 16.8689C19.4732 15.9312 20 14.6594 20 13.3333C19.9886 12.8008 19.8987 12.2729 19.7333 11.7667L22.2833 9.18334ZM25 3.33334C25.3296 3.33334 25.6518 3.43108 25.9259 3.61422C26.2 3.79736 26.4136 4.05765 26.5398 4.3622C26.6659 4.66674 26.6989 5.00185 26.6346 5.32515C26.5703 5.64845 26.4116 5.94543 26.1785 6.17851C25.9454 6.4116 25.6484 6.57034 25.3251 6.63464C25.0018 6.69895 24.6667 6.66595 24.3622 6.5398C24.0576 6.41366 23.7973 6.20003 23.6142 5.92595C23.431 5.65187 23.3333 5.32964 23.3333 5C23.3333 4.55797 23.5089 4.13405 23.8215 3.82149C24.134 3.50893 24.5579 3.33334 25 3.33334ZM3.3333 8.33334C3.3333 8.0037 3.43105 7.68147 3.61418 7.40739C3.79732 7.1333 4.05762 6.91968 4.36216 6.79354C4.66671 6.66739 5.00182 6.63438 5.32512 6.69869C5.64842 6.763 5.94539 6.92174 6.17848 7.15482C6.41157 7.38791 6.5703 7.68488 6.63461 8.00819C6.69892 8.33149 6.66591 8.6666 6.53977 8.97114C6.41362 9.27569 6.2 9.53598 5.92592 9.71912C5.65183 9.90225 5.3296 10 4.99997 10C4.55794 10 4.13402 9.82441 3.82146 9.51185C3.5089 9.19929 3.3333 8.77536 3.3333 8.33334ZM15 15C14.6703 15 14.3481 14.9023 14.074 14.7191C13.7999 14.536 13.5863 14.2757 13.4602 13.9711C13.334 13.6666 13.301 13.3315 13.3653 13.0082C13.4296 12.6849 13.5884 12.3879 13.8215 12.1548C14.0545 11.9217 14.3515 11.763 14.6748 11.6987C14.9981 11.6344 15.3332 11.6674 15.6378 11.7935C15.9423 11.9197 16.2026 12.1333 16.3857 12.4074C16.5689 12.6815 16.6666 13.0037 16.6666 13.3333C16.6666 13.7754 16.491 14.1993 16.1785 14.5118C15.8659 14.8244 15.442 15 15 15Z"
                                                stroke="none"/>
                                            <path
                                                d="M8.33329 15H3.33329C2.89127 15 2.46734 15.1756 2.15478 15.4882C1.84222 15.8007 1.66663 16.2246 1.66663 16.6667V28.3333C1.66663 28.7754 1.84222 29.1993 2.15478 29.5118C2.46734 29.8244 2.89127 30 3.33329 30H8.33329C8.77532 30 9.19924 29.8244 9.5118 29.5118C9.82436 29.1993 9.99996 28.7754 9.99996 28.3333V16.6667C9.99996 16.2246 9.82436 15.8007 9.5118 15.4882C9.19924 15.1756 8.77532 15 8.33329 15ZM6.66663 26.6667H4.99996V18.3333H6.66663V26.6667ZM28.3333 11.6667H23.3333C22.8913 11.6667 22.4673 11.8423 22.1548 12.1548C21.8422 12.4674 21.6666 12.8913 21.6666 13.3333V28.3333C21.6666 28.7754 21.8422 29.1993 22.1548 29.5118C22.4673 29.8244 22.8913 30 23.3333 30H28.3333C28.7753 30 29.1992 29.8244 29.5118 29.5118C29.8244 29.1993 30 28.7754 30 28.3333V23.3333C30 22.8913 29.8244 22.4674 29.5118 22.1548C29.1992 21.8423 28.7753 21.6667 28.3333 21.6667C27.8913 21.6667 27.4673 21.8423 27.1548 22.1548C26.8422 22.4674 26.6666 22.8913 26.6666 23.3333V26.6667H25V15H26.6666V18.3333C26.6666 18.7754 26.8422 19.1993 27.1548 19.5118C27.4673 19.8244 27.8913 20 28.3333 20C28.7753 20 29.1992 19.8244 29.5118 19.5118C29.8244 19.1993 30 18.7754 30 18.3333V13.3333C30 12.8913 29.8244 12.4674 29.5118 12.1548C29.1992 11.8423 28.7753 11.6667 28.3333 11.6667ZM18.3333 20H13.3333C12.8913 20 12.4673 20.1756 12.1548 20.4882C11.8422 20.8007 11.6666 21.2246 11.6666 21.6667V28.3333C11.6666 28.7754 11.8422 29.1993 12.1548 29.5118C12.4673 29.8244 12.8913 30 13.3333 30H18.3333C18.7753 30 19.1992 29.8244 19.5118 29.5118C19.8244 29.1993 20 28.7754 20 28.3333V21.6667C20 21.2246 19.8244 20.8007 19.5118 20.4882C19.1992 20.1756 18.7753 20 18.3333 20ZM16.6666 26.6667H15V23.3333H16.6666V26.6667Z"
                                                fill="#9568FF"/>
                                            <path
                                                d="M8.33329 15H3.33329C2.89127 15 2.46734 15.1756 2.15478 15.4882C1.84222 15.8007 1.66663 16.2246 1.66663 16.6667V28.3333C1.66663 28.7754 1.84222 29.1993 2.15478 29.5118C2.46734 29.8244 2.89127 30 3.33329 30H8.33329C8.77532 30 9.19924 29.8244 9.5118 29.5118C9.82436 29.1993 9.99996 28.7754 9.99996 28.3333V16.6667C9.99996 16.2246 9.82436 15.8007 9.5118 15.4882C9.19924 15.1756 8.77532 15 8.33329 15ZM6.66663 26.6667H4.99996V18.3333H6.66663V26.6667ZM28.3333 11.6667H23.3333C22.8913 11.6667 22.4673 11.8423 22.1548 12.1548C21.8422 12.4674 21.6666 12.8913 21.6666 13.3333V28.3333C21.6666 28.7754 21.8422 29.1993 22.1548 29.5118C22.4673 29.8244 22.8913 30 23.3333 30H28.3333C28.7753 30 29.1992 29.8244 29.5118 29.5118C29.8244 29.1993 30 28.7754 30 28.3333V23.3333C30 22.8913 29.8244 22.4674 29.5118 22.1548C29.1992 21.8423 28.7753 21.6667 28.3333 21.6667C27.8913 21.6667 27.4673 21.8423 27.1548 22.1548C26.8422 22.4674 26.6666 22.8913 26.6666 23.3333V26.6667H25V15H26.6666V18.3333C26.6666 18.7754 26.8422 19.1993 27.1548 19.5118C27.4673 19.8244 27.8913 20 28.3333 20C28.7753 20 29.1992 19.8244 29.5118 19.5118C29.8244 19.1993 30 18.7754 30 18.3333V13.3333C30 12.8913 29.8244 12.4674 29.5118 12.1548C29.1992 11.8423 28.7753 11.6667 28.3333 11.6667ZM18.3333 20H13.3333C12.8913 20 12.4673 20.1756 12.1548 20.4882C11.8422 20.8007 11.6666 21.2246 11.6666 21.6667V28.3333C11.6666 28.7754 11.8422 29.1993 12.1548 29.5118C12.4673 29.8244 12.8913 30 13.3333 30H18.3333C18.7753 30 19.1992 29.8244 19.5118 29.5118C19.8244 29.1993 20 28.7754 20 28.3333V21.6667C20 21.2246 19.8244 20.8007 19.5118 20.4882C19.1992 20.1756 18.7753 20 18.3333 20ZM16.6666 26.6667H15V23.3333H16.6666V26.6667Z"
                                                stroke="none"/>
                                        </svg>
                                    </div>
                                    <div class="chart-num">
                                        <h2 class="mb-0">102k</h2>
                                        <p class="mb-0">
                                            Investment
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
                                        <h2 class="card-title">Project Statistic</h2>
                                    </div>
                                    <div class="d-flex align-items-center mb-3 mb-sm-0">
                                        <div class="round weekly" id="dzOldSeries">
                                            <div>
                                                <input type="checkbox" id="checkbox1" name="radio" value="weekly">
                                                <label for="checkbox1" class="checkmark"></label>
                                            </div>
                                            <div>
                                                <p class="mb-0">This Week</p>
                                                <h6 class="mb-0">1.982</h6>
                                            </div>
                                        </div>
                                        <div class="round " id="dzNewSeries">
                                            <div>
                                                <input type="checkbox" id="checkbox" name="radio" value="monthly">
                                                <label for="checkbox" class="checkmark"></label>
                                            </div>
                                            <div>
                                                <p class="mb-0">This Month</p>
                                                <h6 class="mb-0">1.982</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-static">
                                    <div class="d-flex align-items-center mb-3 ">
                                        <select class="image-select default-select dashboard-select"
                                                aria-label="Default">
                                            <option selected>This Month</option>
                                            <option value="1">This Weeks</option>
                                            <option value="2">Today</option>
                                        </select>
                                        <div class="dropdown custom-dropdown">
                                            <div class="btn sharp btn-primary tp-btn " data-bs-toggle="dropdown">
                                                <svg width="5" height="15" viewBox="0 0 6 20" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.19995 10.001C5.19995 9.71197 5.14302 9.42576 5.03241 9.15872C4.9218 8.89169 4.75967 8.64905 4.55529 8.44467C4.35091 8.24029 4.10828 8.07816 3.84124 7.96755C3.5742 7.85694 3.28799 7.80001 2.99895 7.80001C2.70991 7.80001 2.4237 7.85694 2.15667 7.96755C1.88963 8.07816 1.64699 8.24029 1.44261 8.44467C1.23823 8.64905 1.0761 8.89169 0.965493 9.15872C0.854882 9.42576 0.797952 9.71197 0.797952 10.001C0.798085 10.5848 1.0301 11.1445 1.44296 11.5572C1.85582 11.9699 2.41571 12.2016 2.99945 12.2015C3.58319 12.2014 4.14297 11.9694 4.55565 11.5565C4.96832 11.1436 5.20008 10.5838 5.19995 10L5.19995 10.001ZM5.19995 3.00101C5.19995 2.71197 5.14302 2.42576 5.03241 2.15872C4.9218 1.89169 4.75967 1.64905 4.55529 1.44467C4.35091 1.24029 4.10828 1.07816 3.84124 0.967552C3.5742 0.856941 3.28799 0.800011 2.99895 0.800011C2.70991 0.800011 2.4237 0.856941 2.15667 0.967552C1.88963 1.07816 1.64699 1.24029 1.44261 1.44467C1.23823 1.64905 1.0761 1.89169 0.965493 2.15872C0.854883 2.42576 0.797953 2.71197 0.797953 3.00101C0.798085 3.58475 1.0301 4.14453 1.44296 4.55721C1.85582 4.96988 2.41571 5.20164 2.99945 5.20151C3.58319 5.20138 4.14297 4.96936 4.55565 4.5565C4.96832 4.14364 5.20008 3.58375 5.19995 3.00001L5.19995 3.00101ZM5.19995 17.001C5.19995 16.712 5.14302 16.4258 5.03241 16.1587C4.9218 15.8917 4.75967 15.6491 4.55529 15.4447C4.35091 15.2403 4.10828 15.0782 3.84124 14.9676C3.5742 14.8569 3.28799 14.8 2.99895 14.8C2.70991 14.8 2.4237 14.8569 2.15666 14.9676C1.88963 15.0782 1.64699 15.2403 1.44261 15.4447C1.23823 15.6491 1.0761 15.8917 0.965493 16.1587C0.854882 16.4258 0.797952 16.712 0.797952 17.001C0.798084 17.5848 1.0301 18.1445 1.44296 18.5572C1.85582 18.9699 2.41571 19.2016 2.99945 19.2015C3.58319 19.2014 4.14297 18.9694 4.55565 18.5565C4.96832 18.1436 5.20008 17.5838 5.19995 17L5.19995 17.001Z"
                                                        fill="
														"/>
                                                </svg>

                                            </div>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="javascript:void(0);">Option 1</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Option 2</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Option 3</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-content">
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-0">Total</p>
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
                                <h2 class="card-title">Email </h2>
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
                            <div class="card-body text-center pt-0 pb-2">
                                <div id="pieChart" class="d-inline-block"></div>
                                <div class="chart-items">
                                    <!--row-->
                                    <div class="row">
                                        <!--column-->
                                        <div class=" col-xl-12 col-sm-12">
                                            <div class="text-start mt-2">
                                                <h6>Legend</h6>
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
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="1.5s">
                        <!--card-->
                        <div class="card statistic">
                            <div class="row">
                                <div class="col-xl-9">
                                    <div class="card-header border-0 flex-wrap pb-2">
                                        <div class="chart-title mb-2 ">
                                            <h2 class="card-title text-white">Statistic</h2>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 custome-tooltip pe-0 pb-0">
                                        <div id="chartBarRunning"></div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="statistic-content">
                                        <div class="d-flex justify-content-between">
                                            <select
                                                class="image-select default-select dashboard-select primary-light"
                                                aria-label="Default">
                                                <option selected>This Month</option>
                                                <option value="1">This Weeks</option>
                                                <option value="2">This Day</option>
                                            </select>
                                            <div class="dropdown custom-dropdown">
                                                <div class="btn sharp primary-light" data-bs-toggle="dropdown">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="18px"
                                                         height="18px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <circle fill="#000000" cx="12" cy="5" r="2">
                                                            </circle>
                                                            <circle fill="#000000" cx="12" cy="12" r="2">
                                                            </circle>
                                                            <circle fill="#000000" cx="12" cy="19" r="2">
                                                            </circle>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="javascript:void(0);">Option
                                                        1</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Option
                                                        2</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Option
                                                        3</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="statistic-toggle my-3">
                                            <div class="toggle-btn" id="dzExpenseSeries">
                                                <div>
                                                    <input type="checkbox" id="checkbox3" name="toggle-btn"
                                                           value="Income">
                                                    <label for="checkbox3" class="check"></label>
                                                </div>
                                                <div>
                                                    <p class="mb-0 text-white">Income</p>
                                                    <h6 class="mb-0 text-white">1.982</h6>
                                                </div>
                                            </div>
                                            <div class="toggle-btn expense" id="dzIncomeSeries">
                                                <div>
                                                    <input type="checkbox" id="checkbox2" name="toggle-btn"
                                                           value="Expense">
                                                    <label for="checkbox2" class="check"></label>
                                                </div>
                                                <div>
                                                    <p class="mb-0 text-yellow">Expense</p>
                                                    <h6 class="mb-0 text-yellow">1.982</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <!--card-->
                                        <div class="card expense mb-3">
                                            <div class="card-body p-3">
                                                <div
                                                    class="students1 d-flex align-items-center justify-content-between ">
                                                    <div class="content">
                                                        <p class="mb-0 text-white">Income</span>
                                                        <h3 class="text-white">$ 12,890,00</h3>
                                                        <h6 class="text-white mb-0">
                                                            <svg width="24" height="23" viewBox="0 0 24 23"
                                                                 fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M23.25 11.5C23.25 5.275 18.225 0.25 12 0.25C5.775 0.249999 0.75 5.275 0.75 11.5C0.749999 17.725 5.775 22.75 12 22.75C18.225 22.75 23.25 17.725 23.25 11.5ZM11.25 16.075L11.25 9.175L9.3 10.9C8.85 11.275 8.25 11.2 7.875 10.825C7.725 10.6 7.65 10.375 7.65 10.15C7.65 9.85 7.8 9.55 8.025 9.4L11.625 6.25C11.7 6.175 11.775 6.175 11.85 6.1C11.925 6.1 11.925 6.1 12 6.025C12.075 6.025 12.075 6.025 12.15 6.025L12.225 6.025C12.3 6.025 12.3 6.025 12.375 6.025L12.45 6.025C12.525 6.025 12.525 6.025 12.6 6.1C12.6 6.1 12.675 6.1 12.675 6.175L12.75 6.25C12.75 6.25 12.75 6.25 12.825 6.325L15.975 9.55C16.35 9.925 16.35 10.6 15.975 10.975C15.6 11.35 14.925 11.35 14.55 10.975L13.125 9.475L13.125 16.15C13.125 16.675 12.675 17.2 12.075 17.2C11.7 17.05 11.25 16.6 11.25 16.075Z"
                                                                    fill="#fff"/>
                                                            </svg>
                                                            +15%
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/card-->
                                        <!--card-->
                                        <div class="card expense mb-3 ">
                                            <div class="card-body p-3 ">
                                                <div
                                                    class="students1 d-flex align-items-center justify-content-between ">
                                                    <div class="content">
                                                        <p class="mb-0 text-yellow">Expense</span>
                                                        <h3 class="text-yellow">$12,890,00</h3>
                                                        <h6 class="text-yellow mb-0">
                                                            <svg width="24" height="23" viewBox="0 0 24 23"
                                                                 fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0.75 11.5C0.75 17.725 5.775 22.75 12 22.75C18.225 22.75 23.25 17.725 23.25 11.5C23.25 5.275 18.225 0.25 12 0.25C5.775 0.25 0.75 5.275 0.75 11.5ZM12.75 6.925L12.75 13.825L14.7 12.1C15.15 11.725 15.75 11.8 16.125 12.175C16.275 12.4 16.35 12.625 16.35 12.85C16.35 13.15 16.2 13.45 15.975 13.6L12.375 16.75C12.3 16.825 12.225 16.825 12.15 16.9C12.075 16.9 12.075 16.9 12 16.975C11.925 16.975 11.925 16.975 11.85 16.975L11.775 16.975C11.7 16.975 11.7 16.975 11.625 16.975L11.55 16.975C11.475 16.975 11.475 16.975 11.4 16.9C11.4 16.9 11.325 16.9 11.325 16.825L11.25 16.75C11.25 16.75 11.25 16.75 11.175 16.675L8.025 13.45C7.65 13.075 7.65 12.4 8.025 12.025C8.4 11.65 9.075 11.65 9.45 12.025L10.875 13.525L10.875 6.85C10.875 6.325 11.325 5.8 11.925 5.8C12.3 5.95 12.75 6.4 12.75 6.925Z"
                                                                    fill="#ffd125"/>
                                                            </svg>
                                                            +15%
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/card-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/card-->
                    </div>
                    <!--/column-->
                    <!--/column-->
                    <div class="col-xl-6">
                        <div class="card Upgrade">
                            <div class="card-body d-flex align-items-center ps-0">
                                <div class="d-inline-block position-relative donut-chart-sale ">
                                    <div id="redial"></div>
                                </div>
                                <div class="upgread-stroage">
                                    <h4>Upgrade Your Storage</h4>
                                    <p>Lorem ipsum dolor sit amet, onsectetur.</p>
                                    <button type="button" class="btn btn-success btn-sm light">Upgrade</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/column-->
                    <!--column-->
                    <div class="col-xl-6">
                        <div class="card overflow-hidden">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between flex-wrap">
                                    <div>
                                        <h3 class="mb-0">7,642</h3>
                                        <h6 class="text-secondary ">Total emails Subcriber.</h6>
                                    </div>
                                    <div class="compose-btn">
                                        <button class="btn btn-secondary btn-sm light">+ Compose Email</button>
                                    </div>
                                </div>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore</p>
                                <div class="mail-img">
                                    <svg width="120" height="84" viewBox="0 0 156 84" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.1"
                                              d="M164.961 6.14744C165.013 5.67345 165.013 5.1969 164.961 4.72291L164.136 3.36961C164.136 3.36961 164.136 2.87103 163.678 2.65735L163.22 2.30122L161.754 1.37527C161.353 1.05833 160.888 0.79377 160.379 0.591786L158.821 0.164429H156.988H8.52299H6.69009L5.13212 0.663011C4.62116 0.832312 4.15505 1.07382 3.75745 1.37527L2.29113 2.30122C2.29113 2.30122 2.29113 2.30122 2.29113 2.65735C2.29113 3.01348 2.29113 3.15593 1.8329 3.36961L1.00809 4.72291C0.956224 5.1969 0.956224 5.67345 1.00809 6.14744L0 6.93093V92.4025C0 94.2916 0.965543 96.1032 2.68422 97.439C4.4029 98.7747 6.73393 99.5252 9.16451 99.5252H91.6451C94.0756 99.5252 96.4067 98.7747 98.1253 97.439C99.844 96.1032 100.81 94.2916 100.81 92.4025C100.81 90.5135 99.844 88.7018 98.1253 87.3661C96.4067 86.0303 94.0756 85.2799 91.6451 85.2799H18.329V21.1762L76.9818 55.3648C78.5682 56.2895 80.4976 56.7894 82.4805 56.7894C84.4635 56.7894 86.3929 56.2895 87.9792 55.3648L146.632 21.1762V85.2799H128.303C125.872 85.2799 123.541 86.0303 121.823 87.3661C120.104 88.7018 119.139 90.5135 119.139 92.4025C119.139 94.2916 120.104 96.1032 121.823 97.439C123.541 98.7747 125.872 99.5252 128.303 99.5252H155.797C158.227 99.5252 160.558 98.7747 162.277 97.439C163.996 96.1032 164.961 94.2916 164.961 92.4025V6.93093C164.961 6.93093 164.961 6.43234 164.961 6.14744ZM82.4805 40.7634L36.658 14.0536H128.303L82.4805 40.7634Z"
                                              fill="#9568FF"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/column-->
                    <!--column-->
                    <div class="col-xl-12">
                        <div class="user_reviews overflow-hidden">
                            <h4 class="card-title mb-3"> User Reviews</h4>
                            <div class="swiper mySwiper position-relative ">
                                <div class="swiper-wrapper ">
                                    <!-- swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <div class="card-header justify-content-start border-0 pb-0 p-4">
                                                <div class="slide-img me-3">
                                                    <img src="../images/1.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div>
                                                    <h5 class="mb-0">Exca Libur</h5>
                                                    <p class="mb-0 d-flex align-items-center">UI Designer /
                                                        <svg width="17"
                                                             height="15" viewBox="0 0 17 15" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8.5 0.5L10.2961 6.02786H16.1085L11.4062 9.44427L13.2023 14.9721L8.5 11.5557L3.79772 14.9721L5.59383 9.44427L0.891548 6.02786H6.70389L8.5 0.5Z"
                                                                fill="#FFD125"/>
                                                        </svg>
                                                        5.0
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card-body p-4 pt-3">
                                                <p class="mb-0">Sed eligendi facere repellendus. Ipsam ipsam
                                                    incidunt minima harum tenetur. Ab sit asperiores architecto
                                                    repudiandae.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/swiper-slide-->
                                    <!--swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <div class="card-header justify-content-start border-0 pb-0 p-4">
                                                <div class="slide-img me-3">
                                                    <img src="../images/2.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div>
                                                    <h5 class="mb-0">Exca Libur</h5>
                                                    <p class="mb-0 d-flex align-items-center">UI Designer /
                                                        <svg width="17"
                                                             height="15" viewBox="0 0 17 15" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8.5 0.5L10.2961 6.02786H16.1085L11.4062 9.44427L13.2023 14.9721L8.5 11.5557L3.79772 14.9721L5.59383 9.44427L0.891548 6.02786H6.70389L8.5 0.5Z"
                                                                fill="#FFD125"/>
                                                        </svg>
                                                        5.0
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card-body p-4 pt-3">
                                                <p class="mb-0">Sed eligendi facere repellendus. Ipsam ipsam
                                                    incidunt minima harum tenetur. Ab sit asperiores architecto
                                                    repudiandae.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/swiper-slide-->
                                    <!--swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <div class="card-header justify-content-start border-0 pb-0 p-4">
                                                <div class="slide-img me-3">
                                                    <img src="../images/3.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div>
                                                    <h5 class="mb-0">Exca Libur</h5>
                                                    <p class="mb-0 d-flex align-items-center">UI Designer /
                                                        <svg width="17"
                                                             height="15" viewBox="0 0 17 15" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8.5 0.5L10.2961 6.02786H16.1085L11.4062 9.44427L13.2023 14.9721L8.5 11.5557L3.79772 14.9721L5.59383 9.44427L0.891548 6.02786H6.70389L8.5 0.5Z"
                                                                fill="#FFD125"/>
                                                        </svg>
                                                        5.0
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card-body p-4 pt-3">
                                                <p class="mb-0">Sed eligendi facere repellendus. Ipsam ipsam
                                                    incidunt minima harum tenetur. Ab sit asperiores architecto
                                                    repudiandae.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/swiper-slide-->
                                    <!--swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <div class="card-header justify-content-start border-0 pb-0 p-4">
                                                <div class="slide-img me-3">
                                                    <img src="../images/1.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div>
                                                    <h5 class="mb-0">Exca Libur</h5>
                                                    <p class="mb-0 d-flex align-items-center">UI Designer /
                                                        <svg width="17"
                                                             height="15" viewBox="0 0 17 15" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8.5 0.5L10.2961 6.02786H16.1085L11.4062 9.44427L13.2023 14.9721L8.5 11.5557L3.79772 14.9721L5.59383 9.44427L0.891548 6.02786H6.70389L8.5 0.5Z"
                                                                fill="#FFD125"/>
                                                        </svg>
                                                        5.0
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card-body p-4 pt-3">
                                                <p class="mb-0">Sed eligendi facere repellendus. Ipsam ipsam
                                                    incidunt minima harum tenetur. Ab sit asperiores architecto
                                                    repudiandae.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/swiper-slide-->
                                    <!--swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <div class="card-header justify-content-start border-0 pb-0 p-4">
                                                <div class="slide-img me-3">
                                                    <img src="../images/2.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div>
                                                    <h5 class="mb-0">Exca Libur</h5>
                                                    <p class="mb-0 d-flex align-items-center">UI Designer /
                                                        <svg width="17"
                                                             height="15" viewBox="0 0 17 15" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8.5 0.5L10.2961 6.02786H16.1085L11.4062 9.44427L13.2023 14.9721L8.5 11.5557L3.79772 14.9721L5.59383 9.44427L0.891548 6.02786H6.70389L8.5 0.5Z"
                                                                fill="#FFD125"/>
                                                        </svg>
                                                        5.0
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card-body p-4 pt-3">
                                                <p class="mb-0">Sed eligendi facere repellendus. Ipsam ipsam
                                                    incidunt minima harum tenetur. Ab sit asperiores architecto
                                                    repudiandae.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/swiper-slide-->
                                    <!--swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <div class="card-header justify-content-start border-0 pb-0 p-4">
                                                <div class="slide-img me-3">
                                                    <img src="../images/3.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div>
                                                    <h5 class="mb-0">Exca Libur</h5>
                                                    <p class="mb-0 d-flex align-items-center">UI Designer /
                                                        <svg width="17"
                                                             height="15" viewBox="0 0 17 15" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8.5 0.5L10.2961 6.02786H16.1085L11.4062 9.44427L13.2023 14.9721L8.5 11.5557L3.79772 14.9721L5.59383 9.44427L0.891548 6.02786H6.70389L8.5 0.5Z"
                                                                fill="#FFD125"/>
                                                        </svg>
                                                        5.0
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card-body p-4 pt-3">
                                                <p class="mb-0">Sed eligendi facere repellendus. Ipsam ipsam
                                                    incidunt minima harum tenetur. Ab sit asperiores architecto
                                                    repudiandae.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/swiper-slide-->
                                    <!--swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <div class="card-header justify-content-start border-0 pb-0 p-4">
                                                <div class="slide-img me-3">
                                                    <img src="../images/1.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div>
                                                    <h5 class="mb-0">Exca Libur</h5>
                                                    <p class="mb-0 d-flex align-items-center">UI Designer /
                                                        <svg width="17"
                                                             height="15" viewBox="0 0 17 15" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8.5 0.5L10.2961 6.02786H16.1085L11.4062 9.44427L13.2023 14.9721L8.5 11.5557L3.79772 14.9721L5.59383 9.44427L0.891548 6.02786H6.70389L8.5 0.5Z"
                                                                fill="#FFD125"/>
                                                        </svg>
                                                        5.0
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card-body p-4 pt-3">
                                                <p class="mb-0">Sed eligendi facere repellendus. Ipsam ipsam
                                                    incidunt minima harum tenetur. Ab sit asperiores architecto
                                                    repudiandae.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/swiper-slide-->
                                </div>
                                <div class="">
                                    <div class="swiper-button-next">
                                        <svg width="16" height="12" viewBox="0 0 16 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.8163 11.3757L15.3283 6.83173C15.3923 6.76773 15.4243 6.70373 15.4883 6.63973C15.5203 6.60773 15.5203 6.57573 15.5523 6.54373C15.5843 6.51173 15.5843 6.47973 15.6163 6.41573C15.6163 6.38373 15.6483 6.35173 15.6483 6.28773C15.6483 6.25573 15.6803 6.22373 15.6803 6.19173L15.6803 5.99973C15.6803 5.93573 15.6803 5.83973 15.6483 5.77573C15.6483 5.74373 15.6163 5.71173 15.6163 5.67973C15.6163 5.64773 15.5843 5.61573 15.5843 5.58373C15.5843 5.55173 15.5523 5.51973 15.5203 5.48773C15.5203 5.39173 15.4883 5.35973 15.4883 5.35973C15.4563 5.29573 15.3923 5.23173 15.3283 5.16773L10.8163 0.623728C10.5923 0.399728 10.3043 0.271728 9.9843 0.271728C9.6643 0.271728 9.3763 0.399728 9.1523 0.623728C8.9283 0.847728 8.80029 1.13573 8.80029 1.45573C8.80029 1.77573 8.9283 2.06373 9.1523 2.28773L11.6483 4.78373L1.50429 4.78373C0.864291 4.78373 0.320291 5.32773 0.320291 5.96773C0.320291 6.60773 0.864291 7.15173 1.50429 7.15173L11.6483 7.15173L9.15229 9.64773C8.92829 9.87173 8.80029 10.1597 8.80029 10.4797C8.80029 10.7997 8.92829 11.0877 9.15229 11.3117C9.37629 11.5357 9.66429 11.6637 9.98429 11.6637C10.2723 11.6957 10.5923 11.5997 10.8163 11.3757Z"
                                                fill="#FCFCFC"/>
                                        </svg>
                                    </div>
                                    <div class="swiper-button-prev">
                                        <svg width="16" height="12" viewBox="0 0 16 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.1837 0.624268L0.671702 5.16827C0.607702 5.23227 0.575702 5.29627 0.511702 5.36027C0.479702 5.39227 0.479702 5.42427 0.447702 5.45627C0.415702 5.48827 0.415702 5.52027 0.383702 5.58427C0.383702 5.61627 0.351702 5.64827 0.351702 5.71227C0.351702 5.74427 0.319702 5.77627 0.319702 5.80827L0.319702 6.00027C0.319702 6.06427 0.319702 6.16027 0.351702 6.22427C0.351702 6.25627 0.383702 6.28827 0.383702 6.32027C0.383702 6.35227 0.415702 6.38427 0.415702 6.41627C0.415702 6.44827 0.447702 6.48027 0.479702 6.51227C0.479702 6.60827 0.511702 6.64027 0.511702 6.64027C0.543702 6.70427 0.607702 6.76827 0.671702 6.83227L5.1837 11.3763C5.4077 11.6003 5.6957 11.7283 6.0157 11.7283C6.3357 11.7283 6.6237 11.6003 6.8477 11.3763C7.0717 11.1523 7.19971 10.8643 7.19971 10.5443C7.19971 10.2243 7.0717 9.93627 6.8477 9.71227L4.3517 7.21627L14.4957 7.21627C15.1357 7.21627 15.6797 6.67227 15.6797 6.03227C15.6797 5.39227 15.1357 4.84827 14.4957 4.84827L4.3517 4.84827L6.8477 2.35227C7.0717 2.12827 7.1997 1.84027 7.1997 1.52027C7.1997 1.20027 7.0717 0.912268 6.8477 0.688268C6.6237 0.464268 6.3357 0.336267 6.0157 0.336267C5.7277 0.304268 5.4077 0.400268 5.1837 0.624268Z"
                                                fill="#FCFCFC"/>
                                        </svg>
                                    </div>
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
