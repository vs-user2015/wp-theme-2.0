// Add Javascript functionality to this file

(function($,document,window){
	
	// Changing contact form to fixed position when it
	// moves off screen.
	$(window).scroll(function() {
		stickMenu();
    });
	
	var containerWidth = $("#content");
	var switch_info = document.querySelector("#switch-info > div");
	var banner_outer = document.querySelector("#banner-outer").clientHeight;
	
	function stickMenu(){
		var $nav = $("#contact-form"),
			nav = document.querySelector("#contact-form");
			wrapper = containerWidth.width(),
			scrollTop = $(document).scrollTop();
    
		if(scrollTop >= $("#banner-outer").offset().top + banner_outer){
			$nav.addClass("nav-fixed");
			switch_info.style.left = -270 + "px";
			nav.style.position = "fixed";
		} else{
			$nav.removeClass('nav-fixed');
			switch_info.style.left = 0 + "px";
			nav.style.position = "relative";
		}
    }
	
	/* 
	 * OFF CANVAS MENU & CONTACT FORM
	 */
	/* Trigger element to slide in the $off_canvas_menu */
	var $click_mobile = $(".click-mobile");
	
	/* Trigger element to close off canvas menu and contact form */
	var $close_off_canvas = $(".close-off-canvas");
	
	/* Off canvas menu and contact form that will slide out */
	var $off_canvas_menu = $(".off-canvas[title='mobile-menu']");
	var $off_canvas_contact = $(".off-canvas[title='mobile-contact']");
	
	$(document).ready(function(){
		/* Close the off canvas menu/contact */
		$close_off_canvas.click(function(){
			var $off_canvas_overlay = $(this).parent();
			if($off_canvas_overlay.css("left") == 0 + "px"){ 
				$off_canvas_overlay.animate({
				left : -100 + "%"
				},"fast");
			}
		});
		
		/* slide out from left off canvas menu/contact form */
		var $action;
		$click_mobile.click(function(){
			var rel = $(this).attr("rel");
			switch(rel){
				case "mobile-menu":
					$action = $off_canvas_menu;
					break;
				case "mobile-contact":
					$action = $off_canvas_contact;
					break;
			}
			$action.animate({
				left : 0
			},"fast");
		});
	});
		
	// Toggle sub-menu on mobile menu
	$(document).ready(function(){
		var $sub_menu = $("#menu-mobile-menu .sub-menu");
		var $mobile_arrow_1 = $(".mobile-arrow-1");
		$sub_menu.hide();
		$mobile_arrow_1.click(function(){
			if($(this).next().is(":hidden")){
				$sub_menu.slideUp();
				$(this).next().slideDown();
			}else{
				$(this).next().slideUp();
			}
		});
	});
		
	/* Expand contact form when there is focus
	 * on the form input.  The form collapses 
	 * when focus is off of the form.
	 */
	$(document).ready(function(){
		$("#form_body .input-fields").eq(1).hide();
		
		$("#form_body .input-fields").eq(0).find("input").focus(function(){
			$("#form_body .input-fields").eq(1).slideDown();
		});
		
		$("body").click(function(event){
			if(event.target !== $("#contact-form").get(0) && $("#contact-form").has(event.target).length < 1){
				if(!$("#form_body .input-fields").eq(1).is(":hidden")){
					$("#form_body .input-fields").eq(1).slideUp();
				}
			}
		});
	});
		
	/* ROTATING BANNERS */
	$(document).ready(function($){
		var w,mHeight,tests = $("#sliding-main-wrapper");
		w = tests.outerWidth();
		mHeight = 0;
		tests.find(".marque").each(function(index){
			$("#banner_indicators").find(".indicator:eq(0)").addClass("active"); // Make the first pager active initially
			if(index == 0){
				$(this).addClass("active"); // Make the first slide active initially
			}
			
			if($(this).height() > mHeight){ // Just finding the max hieght of the slides
				mHeight = $(this).height();
			}
			
			var l = index * w; // Find the left position of each slide
			$(this).css("left",l);
			tests.find("#sliding_banner").height(mHeight);// Make the height of the slider equal to max height of the slides
		});
		
		$(".indicator").on("click",function(e){ // Clicking action for pagination
			e.preventDefault();
			next = $(this).index(".indicator");
			clearInterval(t_int);// Clicking stops the autoplay
			moveIt(next);
		});
		
		function moveIt(next){ // The main sliding function
			var c = parseInt($(".marque.active").removeClass("active").css("left")); // Current position
			var n = parseInt($(".marque").eq(next).addClass("active").css("left")); // New Position
			$(".marque").each(function(){ // shift each slide
				if(n > c){
					$(this).animate({"left" : "-=" + (n - c) + "px"});
				}else{
					$(this).animate({"left" : "+=" + Math.abs(n - c) + "px"});
				}
			});
			$(".indicator.active").removeClass("active");
			$("#banner_indicators").find(".indicator").eq(next).addClass("active");
		}
		
		var t_int = setInterval(function(){ // For autoplay
			var i = $(".marque.active").index(".marque");
			if(i == $(".marque").length - 1){
				next = 0;
			}else{
				next = i + 1;
			}
			
			moveIt(next);
		},6000);
	});
		
	/* ROTATING TESTIMONIALS */
	$(document).ready(function($){
		var w,mHeight,tests = $("#testimonials");
		w = tests.outerWidth();
		mHeight = 130;
		tests.find(".testimonial").each(function(index){
			$("#t_pagers").find(".pagers:eq(0)").addClass("active"); // Make the first pager active initially
			if(index == 0){
				$(this).addClass("active"); // Make the first slide active initially
			}
			
			if($(this).height() > mHeight){ // Just finding the max hieght of the slides
				mHeight = $(this).height();
			}
			
			var l = index * w; // Find the left position of each slide
			$(this).css("left",l);
			tests.find("#test_container").height(mHeight);// Make the height of the slider equal to max height of the slides
		});
		
		$(".pagers").on("click",function(e){ // Clicking action for pagination
			e.preventDefault();
			next = $(this).index(".pagers");
			clearInterval(t_int);// Clicking stops the autoplay
			moveIt(next);
		});
		
		function moveIt(next){ // The main sliding function
			var c = parseInt($(".testimonial.active").removeClass("active").css("left")); // Current position
			var n = parseInt($(".testimonial").eq(next).addClass("active").css("left")); // New Position
			$(".testimonial").each(function(){ // shift each slide
				if(n > c){
					$(this).animate({"left" : "-=" + (n - c) + "px"});
				}else{
					$(this).animate({"left" : "+=" + Math.abs(n - c) + "px"});
				}
			});
			$(".pagers.active").removeClass("active");
			$("#t_pagers").find(".pagers").eq(next).addClass("active");
		}
		
		var t_int = setInterval(function(){ // For autoplay
			var i = $(".testimonial.active").index(".testimonial");
			if(i == $(".testimonial").length - 1){
				next = 0;
			}else{
				next = i + 1;
			}
			
			moveIt(next);
		},3000);
	});
})(jQuery,document,window);

