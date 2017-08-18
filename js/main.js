jQuery(document).ready(function() {


	jQuery("#portfolio_grid").mixItUp();
	jQuery(".s_portfolio li").click(function() {
		jQuery(".s_portfolio li").removeClass("active");
		jQuery(this).addClass("active");
	});


	jQuery(".popup").magnificPopup({type:"image"});
	jQuery(".popup_content").magnificPopup({
		type:"inline",
		midClick: true
	});



	jQuery(".top_text h1").animated("fadeInDown ", "fadeInDown ");
	jQuery(".top_text p, .section_header").animated("fadeInUp ", "fadeInUp ");
	jQuery(".about_center").animated("bounceIn", " bounceIn");
	jQuery(".about_left").animated("fadeInLeftBig", " fadeOutLeftBig");
	jQuery(".about_right").animated("fadeInRightBig", "fadeOutRightBig");
	jQuery(".left_box").animated("slideInLeft", " slideOutLeft");
	jQuery(".right_box").animated("slideInRight", " slideOutRight");



	function heightDetect() {
        jQuery(".main_head").css("height",jQuery(window).height());
	}
	heightDetect();
    jQuery(window).resize(function() {
		heightDetect();
	});
		openMobileNav = function(e) {
            jQuery("body").toggleClass("open");
		};
    jQuery(".toggle_menu").click(openMobileNav);
		});
		jQuery(".top_menu ul li a").click(function(){
        jQuery(".top_menu").hide();
			openMobileNav();
	});
		jQuery(".toggle_menu").click(function(){
		if (jQuery(".top_menu ").is(":visible")) {
			jQuery(".top_menu").fadeOut(400);
			jQuery(".top_menu li a").removeClass("fadeInUp animated");
		}else{
			jQuery(".top_menu").fadeIn(400);
			jQuery(".top_menu li a").addClass("fadeInUp animated");
		}
	});

		jQuery(".portfolio_item").each(function(i) {
		jQuery(this).find("a").attr("href", "#work_" + i);
		jQuery(this).find(".podrt_descr").attr("id", "work_" + i);
	});

		
		jQuery("input, select, textarea").jqBootstrapValidation();

		jQuery(".top_menu ul a").mPageScroll2id();

		jQuery(window).load(function() {
		jQuery(".loader_inner").fadeOut();
		jQuery(".loader").delay(400).fadeOut("slow");
	});
