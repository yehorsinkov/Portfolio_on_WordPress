$(document).ready(function() {
	
	$("#portfolio_grid").mixItUp();
	$(".s_portfolio li").click(function() {
		$(".s_portfolio li").removeClass("active");
		$(this).addClass("active");
	});
	$(".popup").magnificPopup({type:"image"});
	$(".popup_content").magnificPopup({
		type:"inline",
		midClick: true
	});

	$(".top_text h1").animated("fadeInDown ", "fadeInDown ");
	$(".top_text p, .section_header").animated("fadeInUp ", "fadeInUp ");
	$(".about_center").animated("bounceIn", " bounceIn");
	$(".about_left").animated("fadeInLeftBig", " fadeOutLeftBig");
	$(".about_right").animated("fadeInRightBig", "fadeOutRightBig");
	$(".left_box").animated("slideInLeft", " slideOutLeft");
	$(".right_box").animated("slideInRight", " slideOutRight");

	function heightDetect() {
	 $(".main_head").css("height",$(window).height());
	};
	heightDetect();
	$(window).resize(function() {
		heightDetect();
	});
		openMobileNav = function(e) {
		  $("body").toggleClass("open");
		};
		$(".toggle_menu").click(openMobileNav);
	});
		$(".top_menu ul a").click(function(){
			$(".top_menu").hide();
			openMobileNav();
	});
		$(".toggle_menu").click(function(){
		if ($(".top_menu").is(":visible")) {
			$(".top_menu").fadeOut(400);
			$(".top_menu li a").removeClass("fadeInUp animated");
		}else{
			$(".top_menu").fadeIn(400);
			$(".top_menu li a").addClass("fadeInUp animated");
		};
	});

		$(".portfolio_item").each(function(i) {
		$(this).find("a").attr("href", "#work_" + i);
		$(this).find(".podrt_descr").attr("id", "work_" + i);
	});

		
		$("input, select, textarea").jqBootstrapValidation();

		$(".top_menu ul a").mPageScroll2id();

		$(window).load(function() { 
		$(".loader_inner").fadeOut(); 
		$(".loader").delay(400).fadeOut("slow"); 
	});