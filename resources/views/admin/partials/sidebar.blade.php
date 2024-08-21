<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <i class="material-icons">dashboard</i>
                    <span class="nav-text">Bảng điều khiển</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.dashboard') }}">Bảng điều khiển</a></li>
                </ul>

            </li>
            <li>
                <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <i class="material-icons">settings</i>
                    <span class="nav-text">Quản lý hệ thống</span>
                </a>
                <ul aria-expanded="false">
                    <li>
                        <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Nội dung đầu trang</a>
                        <ul aria-expanded="false">
{{--                            <li><a href="{{ route('admin.systems.index') . '?system_id=1' }}">Danh sách</a></li>--}}
{{--                            <li><a href="{{ route('admin.systems.create') . '?system_id=1' }}">Thêm mới</a></li>--}}
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Nội dung trang chủ</a>
                        <ul aria-expanded="false">
{{--                            <li><a href="{{ route('admin.systems.index') . '?system_id=2' }}">Danh sách</a></li>--}}
{{--                            <li><a href="{{ route('admin.systems.create') . '?system_id=2' }}">Thêm mới</a></li>--}}
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Nội dung cuối trang</a>
                        <ul aria-expanded="false">
{{--                            <li><a href="{{ route('admin.systems.index') . '?system_id=3' }}">Danh sách</a></li>--}}
{{--                            <li><a href="{{ route('admin.systems.create') . '?system_id=3' }}">Thêm mới</a></li>--}}
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <i class="material-icons"> widgets </i>
                    <span class="nav-text">Quản lý sản phẩm</span>
                </a>
                <ul aria-expanded="false">
                    <li>
                        <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Danh mục</a>
                        <ul aria-expanded="false">
{{--                            <li><a href="{{ route('admin.categoryProducts.index') }}">Danh sách</a></li>--}}
{{--                            <li><a href="{{ route('admin.categoryProducts.create') }}">Thêm mới</a></li>--}}
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Sản phẩm</a>
                        <ul aria-expanded="false">
{{--                            <li><a href="{{ route('admin.products.index') }}">Danh sách</a></li>--}}
{{--                            <li><a href="{{ route('admin.products.create') }}">Thêm mới</a></li>--}}
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <i class="material-icons">article</i>
                    <span class="nav-text">Quản lý tin tức</span>
                </a>
                <ul aria-expanded="false">
                    <li>
                        <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Danh mục</a>
                        <ul aria-expanded="false">
{{--                            <li><a href="{{ route('admin.categoryPosts.index') }}">Danh sách</a></li>--}}
{{--                            <li><a href="{{ route('admin.categoryPosts.create') }}">Thêm mới</a></li>--}}
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Tin tức</a>
                        <ul aria-expanded="false">
{{--                            <li><a href="{{ route('admin.posts.index') }}">Danh sách</a></li>--}}
{{--                            <li><a href="{{ route('admin.posts.create') }}">Thêm mới</a></li>--}}
                        </ul>
                    </li>
                </ul>
            </li>
            {{--                <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">--}}
            {{--                    <i class="material-icons">folder</i>--}}
            {{--                    <span class="nav-text">File Manager</span>--}}
            {{--                </a>--}}
            {{--                <ul aria-expanded="false">--}}
            {{--                    <li><a href="file-manager.html">File Manager</a></li>--}}
            {{--                    <li><a href="user.html">User</a></li>--}}
            {{--                    <li><a href="calendar.html">Calendar</a></li>--}}
            {{--                    <li><a href="to-do-list.html">To Do List</a></li>--}}
            {{--                    <li><a href="chat.html">Chat</a></li>--}}
            {{--                    <li><a href="activity.html">Activity</a></li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}
            {{--            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">--}}
            {{--                    <i class="material-icons">book--}}
            {{--                    </i>--}}
            {{--                    <span class="nav-text">Course</span>--}}

            {{--                </a>--}}
            {{--                <ul aria-expanded="false">--}}
            {{--                    <li><a href="course-llisting.html">Course List</a></li>--}}
            {{--                    <li><a href="course-details.html">Course Details</a></li>--}}

            {{--                </ul>--}}
            {{--            </li>--}}
            {{--            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">--}}
            {{--                    <i class="material-icons">--}}
            {{--                        settings--}}
            {{--                    </i>--}}
            {{--                    <span class="nav-text">CMS</span>--}}
            {{--                    <span class="badge badge-xs badge-danger ms-3">New</span>--}}
            {{--                </a>--}}
            {{--                <ul aria-expanded="false">--}}
            {{--                    <li><a href="content.html">Content</a></li>--}}
            {{--                    <li><a href="content-add.html">Add Content</a></li>--}}
            {{--                    <li><a href="menu.html">Menus</a></li>--}}
            {{--                    <li><a href="email-template.html">Email Template</a></li>--}}
            {{--                    <li><a href="add-email.html">Add Email</a></li>--}}
            {{--                    <li><a href="blog.html">Blog</a></li>--}}
            {{--                    <li><a href="add-blog.html">Add Blog</a></li>--}}
            {{--                    <li><a href="blog-category.html">Blog Category</a></li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}
            {{--            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">--}}
            {{--                    <i class="material-icons"> app_registration </i>--}}
            {{--                    <span class="nav-text">Apps</span>--}}
            {{--                </a>--}}
            {{--                <ul aria-expanded="false">--}}
            {{--                    <li><a href="app-profile.html">Profile</a></li>--}}
            {{--                    <li><a href="edit-profile.html">Edit Profile</a></li>--}}
            {{--                    <li><a href="post-details.html">Post Details</a></li>--}}
            {{--                    <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Email</a>--}}
            {{--                        <ul aria-expanded="false">--}}
            {{--                            <li><a href="email-compose.html">Compose</a></li>--}}
            {{--                            <li><a href="email-inbox.html">Inbox</a></li>--}}
            {{--                            <li><a href="email-read.html">Read</a></li>--}}
            {{--                        </ul>--}}
            {{--                    </li>--}}
            {{--                    <li><a href="app-calender.html">Calendar</a></li>--}}
            {{--                    <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Shop</a>--}}
            {{--                        <ul aria-expanded="false">--}}
            {{--                            <li><a href="ecom-product-grid.html">Product Grid</a></li>--}}
            {{--                            <li><a href="ecom-product-list.html">Product List</a></li>--}}
            {{--                            <li><a href="ecom-product-detail.html">Product Details</a></li>--}}
            {{--                            <li><a href="ecom-product-order.html">Order</a></li>--}}
            {{--                            <li><a href="ecom-checkout.html">Checkout</a></li>--}}
            {{--                            <li><a href="ecom-invoice.html">Invoice</a></li>--}}
            {{--                            <li><a href="ecom-customers.html">Customers</a></li>--}}
            {{--                        </ul>--}}
            {{--                    </li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}
            {{--            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">--}}
            {{--                    <i class="material-icons"> assessment </i>--}}
            {{--                    <span class="nav-text">Charts</span>--}}
            {{--                </a>--}}
            {{--                <ul aria-expanded="false">--}}
            {{--                    <li><a href="chart-flot.html">Flot</a></li>--}}
            {{--                    <li><a href="chart-morris.html">Morris</a></li>--}}
            {{--                    <li><a href="chart-chartjs.html">Chartjs</a></li>--}}
            {{--                    <li><a href="chart-chartist.html">Chartist</a></li>--}}
            {{--                    <li><a href="chart-sparkline.html">Sparkline</a></li>--}}
            {{--                    <li><a href="chart-peity.html">Peity</a></li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}
            {{--            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">--}}

            {{--                    <i class="material-icons"> favorite </i>--}}
            {{--                    <span class="nav-text">Bootstrap</span>--}}
            {{--                </a>--}}
            {{--                <ul aria-expanded="false">--}}
            {{--                    <li><a href="ui-accordion.html">Accordion</a></li>--}}
            {{--                    <li><a href="ui-alert.html">Alert</a></li>--}}
            {{--                    <li><a href="ui-badge.html">Badge</a></li>--}}
            {{--                    <li><a href="ui-button.html">Button</a></li>--}}
            {{--                    <li><a href="ui-modal.html">Modal</a></li>--}}
            {{--                    <li><a href="ui-button-group.html">Button Group</a></li>--}}
            {{--                    <li><a href="ui-list-group.html">List Group</a></li>--}}
            {{--                    <li><a href="ui-card.html">Cards</a></li>--}}
            {{--                    <li><a href="ui-carousel.html">Carousel</a></li>--}}
            {{--                    <li><a href="ui-dropdown.html">Dropdown</a></li>--}}
            {{--                    <li><a href="ui-popover.html">Popover</a></li>--}}
            {{--                    <li><a href="ui-progressbar.html">Progressbar</a></li>--}}
            {{--                    <li><a href="ui-tab.html">Tab</a></li>--}}
            {{--                    <li><a href="ui-typography.html">Typography</a></li>--}}
            {{--                    <li><a href="ui-pagination.html">Pagination</a></li>--}}
            {{--                    <li><a href="ui-grid.html">Grid</a></li>--}}

            {{--                </ul>--}}
            {{--            </li>--}}
            {{--            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">--}}
            {{--                    <i class="material-icons"> extension </i>--}}
            {{--                    <span class="nav-text">Plugins</span>--}}
            {{--                </a>--}}
            {{--                <ul aria-expanded="false">--}}
            {{--                    <li><a href="uc-select2.html">Select 2</a></li>--}}
            {{--                    <li><a href="uc-nestable.html">Nestedable</a></li>--}}
            {{--                    <li><a href="uc-noui-slider.html">Noui Slider</a></li>--}}
            {{--                    <li><a href="uc-sweetalert.html">Sweet Alert</a></li>--}}
            {{--                    <li><a href="uc-toastr.html">Toastr</a></li>--}}
            {{--                    <li><a href="map-jqvmap.html">Jqv Map</a></li>--}}
            {{--                    <li><a href="uc-lightgallery.html">Light Gallery</a></li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}
            {{--            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">--}}
            {{--                    <i class="material-icons"> widgets </i>--}}
            {{--                    <span class="nav-text">Widget</span>--}}
            {{--                </a>--}}
            {{--                <ul aria-expanded="false">--}}
            {{--                    <li><a href="widget-chart.html">Chart</a></li>--}}
            {{--                    <li><a href="widget-card.html">Card</a></li>--}}
            {{--                    <li><a href="widget-list.html">List</a></li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}
            {{--            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">--}}
            {{--                    <i class="material-icons"> insert_drive_file </i>--}}
            {{--                    <span class="nav-text">Forms</span>--}}
            {{--                </a>--}}
            {{--                <ul aria-expanded="false">--}}
            {{--                    <li><a href="form-element.html">Form Elements</a></li>--}}
            {{--                    <li><a href="form-wizard.html">Wizard</a></li>--}}
            {{--                    <li><a href="form-ckeditor.html">CkEditor</a></li>--}}
            {{--                    <li><a href="form-pickers.html">Pickers</a></li>--}}
            {{--                    <li><a href="form-validation.html">Form Validate</a></li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}
            {{--            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">--}}
            {{--                    <i class="material-icons"> table_chart </i>--}}
            {{--                    <span class="nav-text">Table</span>--}}
            {{--                </a>--}}
            {{--                <ul aria-expanded="false">--}}
            {{--                    <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>--}}
            {{--                    <li><a href="table-datatable-basic.html">Datatable</a></li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}
            {{--            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">--}}
            {{--                    <i class="material-icons">article</i>--}}
            {{--                    <span class="nav-text">Pages</span>--}}
            {{--                </a>--}}
            {{--                <ul aria-expanded="false">--}}
            {{--                    <li><a href="page-login.html">Login</a>--}}
            {{--                    <li><a href="page-register.html">Register</a>--}}
            {{--                    <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Error</a>--}}
            {{--                        <ul aria-expanded="false">--}}
            {{--                            <li><a href="page-error-400.html">Error 400</a></li>--}}
            {{--                            <li><a href="page-error-403.html">Error 403</a></li>--}}
            {{--                            <li><a href="page-error-404.html">Error 404</a></li>--}}
            {{--                            <li><a href="page-error-500.html">Error 500</a></li>--}}
            {{--                            <li><a href="page-error-503.html">Error 503</a></li>--}}
            {{--                        </ul>--}}
            {{--                    </li>--}}
            {{--                    <li><a href="page-lock-screen.html">Lock Screen</a>--}}
            {{--                    <li><a href="empty-page.html">Empty Page</a>--}}
            {{--                </ul>--}}
            {{--            </li>--}}
        </ul>
        <div class="copyright">
            <p><strong>Bivaco</strong> © 2024 Mọi quyền được bảo lưu</p>
            <p class="fs-12">Được thực hiện <span class="heart"></span> bởi Bivaco</p>
        </div>
    </div>
</div>
