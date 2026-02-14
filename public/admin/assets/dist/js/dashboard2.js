$(document).ready(function(){
	
	//preloader
	$(window).on("load", function(){
		$(".preloader").fadeOut();
	});

	//back to top
    $('body').append('<div id="toTop" class="btn back-top"><span class="ti-arrow-up"></span></div>');
    $(window).on("scroll", function () {
        if ($(this).scrollTop() !== 0) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    });
    $('#toTop').on("click", function () {
        $("html, body").animate({scrollTop: 0}, 600);
        return false;
    }); 
    
		 
	// Creat tooltip
	$('[data-toggle="tooltip"]').tooltip();


	/* didebar toggler */
	$('.sidebar-toggler').click(function(){
		$('.sidebar-navbar').toggleClass('sidebar-navbar-active');
	})
	$('.sidebar-toggler').click(function(){
		$('.content-wrapper').toggleClass('content-wrapper-ml');
	})
	$('.sidebar-toggler').click(function(){
		$('.sidebar-wrapper').toggleClass('sidebar-wrapper-active');
	})


	//header left menu control
	$('.i2home').click(function(){
		$('.click-home').toggleClass('d-block');
	})
	$('.i2profile').click(function(){
		$('.profile-d-none').toggleClass('d-none');
	})
	$('.i2messages').click(function(){
		$('.messages-d-none').toggleClass('d-none');
	})
	$('.i2settings').click(function(){
		$('.settings-d-none').toggleClass('d-none');
	})




});


