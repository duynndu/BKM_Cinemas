	// 1. This code loads the IFrame Player API code asynchronously.
	var tag = document.createElement('script');

	tag.src = "https://www.youtube.com/iframe_api";
	var firstScriptTag = document.getElementsByTagName('script')[0];
	firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
	// 2. This function creates an <iframe> (and YouTube player)
	//    after the API code downloads.
	var player;

	// 3. The API will call this function when the video player is ready.
	function onPlayerReady(event) {
	    event.target.playVideo();
	}
	function stopVideo() {
	  player.stopVideo();
	}

	// get Parameter
	function getUrlParameter(sParam,sPageURL) {
	    var sURLVariables = sPageURL.split('&'),
	        sParameterName,
	        i;
	    for (i = 0; i < sURLVariables.length; i++) {
	        sParameterName = sURLVariables[i].split('=');
	        if (sParameterName[0] === sParam) {
	            return sParameterName[1] === undefined ? true : sParameterName[1];
	        }
	    }
	};

	$(document).ready(function () {
		$("#btn-datve").click(function(){
			$("#modal-datve").slideToggle();
		})
		$(".show-search").click(function(){
			$("#m-search").slideToggle();
			$("#m-search input").focus();
		})
		$("#chonsuatchieu").on('click','.showtimes div .btn-widget-showtime', function(){
			var current = $(this);
			$(".btn-widget-showtime").removeClass('selected');
			current.addClass('selected');
		})
	$("#menu>ul>li>a").click(function(){
		$(this).parent('li').children('ul.submenu').slideToggle();
	})
	$(".tabmenu").click(function(){
		$("#menu-footer .quickmenu .danhmuc, #menu-item, .modalmenu").removeClass('active');
		$(".tabmenu").parent('.boxitem').removeClass('active');
		$(this).parent('.boxitem').addClass('active');
		var tab = getUrlParameter('tab',$(this).attr('href').split('?')[1]);
		$("#dangchieu").hide();
		$("#sapchieu").hide();			
		$("#khuyenmai").hide();
		$("#"+tab).show();
		window.history.pushState("Touch Cinema", "Touch Cinema", "?tab="+tab);
	});
	$("#menu-item").on('swipeleft', function(){
        $("#menu-footer .quickmenu .danhmuc, #menu-item, .modalmenu").toggleClass('active');
    });
	//Open Modal Trailer
	$(document).on('click', '[data-toggle="trailer"]', function(event) {
        event.preventDefault();
        var embed = $(this).attr('href');
        var embedVideoId = embed.replace("https://www.youtube.com/embed/", "");
        var modaltrailer = '<div id="trailervideo">';
            modaltrailer += '<div class="modal fade modal-trailer" id="modaltrailer">';
            modaltrailer += '<div class="modal-dialog">';
            modaltrailer += '<div class="modal-content">'        
            modaltrailer += '<div class="modal-body">';
            modaltrailer += '<div class="video-container">';
            modaltrailer += '<div id="trailer-player"></div>'
            modaltrailer += '</div>';
            modaltrailer += '</div>';
            modaltrailer += '</div>';
            modaltrailer += '</div>';
            modaltrailer += '</div>';
            modaltrailer += '</div>';
            $('body').append(modaltrailer);
            player = new YT.Player('trailer-player', {
		        width: 600,
		        height: 200,
		        playerVars: {
		                autoplay: 1,
		                loop: 1,
		                vq: 'hd1080'
		        },
		        videoId: embedVideoId,
		        events: {
			        'onReady': onPlayerReady
		    	}
		    });
            $("#modaltrailer").modal('show');
            /*
            var e = document.getElementById("trailer-player");
		    if (e.requestFullscreen) {
		        e.requestFullscreen();
		    } else if (e.webkitRequestFullscreen) {
		        e.webkitRequestFullscreen();
		    } else if (e.mozRequestFullScreen) {
		        e.mozRequestFullScreen();
		    } else if (e.msRequestFullscreen) {
		        e.msRequestFullscreen();
		    }*/
    });
    //Close Modal Trailer
    $(document).on('hidden.bs.modal', '#modaltrailer', function(event) {
        $("#trailervideo").remove();
    });
    // Open/Close Left Menu
	$("#menu-footer .quickmenu .danhmuc").click(function(){
		event.preventDefault();
		$(this).toggleClass('active');
		$(".tabmenu").parent('.boxitem').removeClass('active');
		$("#menu-item, .modalmenu").toggleClass('active');
	});
	$(".modalmenu").click(function(){
		$("#menu-footer .quickmenu .danhmuc, #menu-item, .modalmenu").removeClass('active');
	});

	//Code của Tài Smile :v 
	$("#widget-movie").on('change', function(){
		$(".loading").removeClass('hidden');
		$("#chonsuatchieu").slideUp();
		$("#chonsuatchieu").html('');
		$.ajax({
			url: get_showtime_data,
			type: 'POST',
			data: {movie_id: $("#widget-movie").val()},
			dataType: 'JSON',
			success: function(data){
				var options = '<option>Chọn Ngày</option>'
				for(var i in data){
					options += '<option value="' + data[i].value + '">' + data[i].text + '</option>'
				}
				$("#widget-date").html(options)
				$(".loading").addClass('hidden')
			}
		})
	})
	$("#widget-date").on('change', function(){
		$("#chonsuatchieu").slideUp();
		$("#chonsuatchieu").html('');
		if($(this).val() == 'Chọn Ngày')
			return
		$(".loading").removeClass('hidden');

		$.ajax({
			url: get_showtime_data,
			type: 'POST',
			data: {movie_id: $("#widget-movie").val(), type: 'time', date: $("#widget-date").val()},
			dataType: 'JSON',
			success: function(data){
				var options = '<option>Chọn Suất</option>'
				for(var i in data.options){
					options += '<option value="' + data.options[i].value + '">' + data.options[i].text + '</option>'
				}
				$("#widget-time").html(options);
				$("#widget-time option").hide();
				$("#chonsuatchieu").html(data.html);
				$("#chonsuatchieu").slideToggle();
				$(".loading").addClass('hidden')
			}
		})
	})
	$("#widget-time").click(function(){
		$("#chonsuatchieu").slideToggle();
		return false;
	});

	$("body").on('click', 'a.btn-widget-showtime', function(){
		$("#widget-time").val($(this).data('id'))
	})
	$(".widget-buy").on('click', function(){
		if($("#widget-time").val() != '' && $("#widget-time").val() != 'Chọn Suất' && $("#widget-time").val() != 'Chọn suất chiếu')
			window.location = url_dat_ve + $("#widget-time").val()
	});
	if (typeof orderDistance !== 'undefined'){
		var x = setInterval(function() {
	        --orderDistance
	        if (orderDistance < 0) {
	            clearInterval(x);
	            $.ajax({
		            url: cancel_transaction,
		            data: {
		                transactionID: transactionID
		            },
		            type: 'POST',
		            success: function() {
		                $("#popup-transaction").remove();
		            }
		        })
	        }
	        var minutes = Math.floor((orderDistance % (60 * 60)) / 60)
	        var seconds = Math.floor(orderDistance % 60)
	        if (minutes < 10) minutes = '0' + minutes
	        if (seconds < 10) seconds = '0' + seconds

	        $("#count-time").text(minutes + ":" + seconds)
	          
	    }, 1000);
	}
	
	$("#cancel-transaction").click(function(){
		$("#popup-transaction").remove();
        $.ajax({
            url     :   cancel_transaction,
            data    :   {transactionID:transactionID},
            type    :   'POST',
            success :   function(){
                if (typeof cancel_redirect !== 'undefined') {
                    window.location = cancel_redirect
                }
            },
            errors  :   function(){
                alert('Lỗi hệ thống! Không thể hủy vé! Hãy thử lại sau!')
            }
        })
    })
})