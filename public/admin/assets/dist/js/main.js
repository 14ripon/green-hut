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

	// index threee
	$('.sidebar-toggler').click(function(){
		$('.index3-footer').toggleClass('index3-footer-active');
	})

	$('.sidebar-toggler-btn').click(function(){
		$('.index3-nav-wrapper').toggleClass('index3-sidbar');

	})
	$('.sidebar-toggler-btn').click(function(){
		$('.single-nav-wrapper').toggleClass('single-nav-wrapper-active');
	})
	$('.sidebar-toggler-btn').click(function(){
		$('.content-wrapper').toggleClass('content-wrapper-active');
	})
	$('.sidebar-toggler-btn').click(function(){
		$('.index3-footer').toggleClass('index3-footer-active');
	})


	$('.sidebar-toggler-btn').click(function(){
		$('.logo1').toggleClass('logo1-active');
	})
	$('.sidebar-toggler-btn').click(function(){
		$('.logo2').toggleClass('logo2-active');
	})
	

});


