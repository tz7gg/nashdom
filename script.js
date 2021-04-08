
jQuery.extend(jQuery.fn, {
	toplinkwidth: function(){
		var totalContentWidth = jQuery('#content').outerWidth(); // ширина блока с контентом, включая padding
		var totalTopLinkWidth = jQuery(this).children('a').outerWidth(true); // ширина самой кнопки наверх, включая padding и margin
		var h = jQuery(window).width()/2-totalContentWidth/2-totalTopLinkWidth;
		if(h<0){
			// если кнопка не умещается, скрываем её
			jQuery(this).hide();
			return false;
		} else {
			if(jQuery(window).scrollTop() >= 1){
				jQuery(this).show();
			}
			jQuery(this).css({'padding-right': h+'px'});
			return true;
		}
	}
});
 
jQuery(function($){
	var topLink = $('#top-link');
	topLink.css({'padding-bottom': $(window).height()});
	// если вам не нужно, чтобы кнопка подстраивалась под ширину экрана - удалите следующие четыре строчки в коде
	topLink.toplinkwidth();
	$(window).resize(function(){
		topLink.toplinkwidth();
	});
	$(window).scroll(function() {
		if($(window).scrollTop() >= 1 && topLink.toplinkwidth()) {
			topLink.fadeIn(300);
		} else {
			topLink.fadeOut(300);
		}
	});
	topLink.click(function(e) {
		$("body,html").animate({scrollTop: 0}, 500);
		return false;
	});
});




if ($('.showcategory_sale_price').text() != "") {
	$('.showcategory_sale_price').css({"font-size": "0.9em"})
	$('.showcategory_sale_price').css({"padding-top": "9px"})
	$('.showcategory_sale_price').css({"text-decoration": "line-through"})
}


if ($('.block-otovare_sale_price p').text() != "") {
	$('.block-otovare_price').css({"font-size": "1.5em"})
}

if ($('.block-otovare_sale_price p').text() != "") {}
$('#submit').submit(function(){
	if ($('#name-main').val() !== "" && $('#phone-main').val() !== "") {
		$("#btn-submit").text("Спасибо заявка принята!")
		$(".btn-submit").attr('disabled',true)
	    $.post(
	        'mail.php', // адрес обработчика 
	        {	        	
	            name: $('#name-main').val(), 
	            phone: $('#phone-main').val(),
	            message: $('#message-main').val()   
	        } 
	    );
	    return false;
	} 
	else {
		$("#btn-submit").text("не все поля заполнены!")
		return false;
	}
});
$('#mail-footer').submit(function(){
	if ($('#name').val() !== "" && $('#phone').val() !== "") {
		$("#btn-submit-footer").text("Спасибо заявка принята!")
		$(".btn-submit-footer").attr('disabled',true)
	    $.post(
	        'mail.php', // адрес обработчика 
	        {	        	
	            name: $('#name').val(), 
	            phone: $('#phone').val(),
	            message: $('#message').val()   
	        } 
	    );
	    return false;
	} 
	else {
		$("#btn-submit-footer").text("не все поля заполнены!")
		return false;
	}
});


      $('.owl-carousel').owlCarousel({
          loop:true,
          margin:30,
          autoplay:true,
          dots: true,
          autoplayTimeout:5000,
          autoplayHoverPause:false,
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:2
              },            
              960:{
                  items:2
              },
              1200:{
                  items:4
              }
          }
});
