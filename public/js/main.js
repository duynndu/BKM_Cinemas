$(function () {
    $("#datepicker").datepicker({
        autoclose: true,
        todayHighlight: true
    }).datepicker('update', new Date());

});

$(document).ready(function () {
    $(".booking-calender .fa.fa-clock-o").removeClass(this);
    $(".booking-calender .fa.fa-clock-o").addClass('fa-clock');
});
$('.my-select').selectpicker();

jQuery(document).ready(function () {
    setTimeout(function () {
        dlabSettingsOptions.version = 'light';
        new dlabSettings(dlabSettingsOptions);
    }, 1000)
    jQuery(window).on('resize', function () {
        dlabSettingsOptions.version = 'light';
        new dlabSettings(dlabSettingsOptions);
        // jQuery('.dz-theme-mode').addClass('active');
    });
});


const mySwiper = new Swiper('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    speed: 300,
    mousewheel: true,
    slidesPerView: 6, // Hiển thị 5 ảnh cùng lúc
    spaceBetween: 15, // Khoảng cách giữa các ảnh

    coverflowEffect: {
        rotate: 30,
        slideShadows: true
    },

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
});

echo.channel('change_status_order')
    .listen('OrderStatusUpdated', (data) => {
        if (data.order.status === 'waiting_for_cancellation') {
            let element = $('.T_notification');
            let element2 = $('.list_notification');
            let url = element2.attr('data-url');
            element.addClass('nav-item');

            $.ajax({
                url: url,
                type: 'GET',
                data: {
                    type: 'refund',
                },
                success: (response) => {
                    let htmlTemplate = `
                        <li>
                            <div class="timeline-panel">
                                <div class="media-body">
                                    <h6 class="mb-1">{title}</h6>
                                    <small class="d-block">{formattedDate}</small>
                                </div>
                            </div>
                        </li>
                    `;

                    let newHtml = '';

                    response.data.forEach(item => {
                        const date = new Date(item.created_at);

                        const day = date.getDate().toString().padStart(2, '0');
                        const month = date.toLocaleString('vi-VN', { month: 'long' });
                        const year = date.getFullYear();
                        const hours = date.getHours();
                        const minutes = date.getMinutes().toString().padStart(2, '0');

                        const period = hours >= 12 ? 'PM' : 'AM';
                        const formattedHour = hours % 12 || 12;

                        const formattedDate = `Lúc ${formattedHour}:${minutes} ${period} ${day} ${month}, ${year}`;

                        let listItem = htmlTemplate
                            .replace('{title}', item.title)
                            .replace('{formattedDate}', formattedDate);

                        newHtml += listItem;
                    });

                    const timelineList = document.querySelector('ul.timeline.list_notification');
                    if (timelineList) {
                        timelineList.innerHTML = newHtml;
                    }
                },
                error: (xhr) => {
                    console.error('An error occurred:', xhr.responseText);
                }
            });

            toastr.warning(`Người dùng ${data.order.userName} yêu cầu hủy đơn: ${data.order.code}`);
        }
    });

