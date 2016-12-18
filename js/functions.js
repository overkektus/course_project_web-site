$(document).ready(function() {
	/*-----------------------Кнопка вверх------------------------*/
	$('body').append('<div class="button-up" style="display: none;opacity: 0.7;width: 100px;height:100%;position: fixed;left: 0px;top: 0px;cursor: pointer;text-align:center;line-height: 100px;color: #666;padding-top: 50px;z-index:10">^ Наверх</div>');

	$ (window).scroll (function () {
		if ($ (this).scrollTop () > 320) {
			$ ('.button-up').fadeIn();
		} else {
			$ ('.button-up').fadeOut();
		}
	});

	$('.button-up').click(function(){
		$('body,html').animate({
		scrollTop: 0
	}, 600);
	return false;
	});

	$('.button-up').hover(function() {
	$(this).animate({
		'opacity':'0.6',
	}).css({'background-color':'#f0f0f0','color':'#666'});
	}, function(){
	$(this).animate({
		'opacity':'0.6'
		}).css({'background':'none','color':'#666'});;
	});
	/*----------------------------------------------------------*/

	/*------------------------inputmask-------------------------*/
	$("input[type='text']").inputmask({"mask": "+375 (99) 999-99-99"});
	/*----------------------------------------------------------*/

	/*-------------------------таймер---------------------------*/
	$('#countdown_dashboard').countDown({
		targetDate: {
		'day': 		15,
		'month': 	12,
		'year': 	2016,
		'hour': 	0,
		'min': 		0,
		'sec': 		0
		}
	});
			
	$('#email_field').focus(email_focus).blur(email_blur);
	$('#subscribe_form').bind('submit', function() { return false; });
	/*----------------------------------------------------------*/

	/*------------------------модально окно---------------------*/
	$('a.go').click( function(event){ // лoвим клик пo ссылки с id="go"
		event.preventDefault(); // выключaем стaндaртную рoль элементa
		$('#overlay').fadeIn(400, // снaчaлa плaвнo пoкaзывaем темную пoдлoжку
		 	function(){ // пoсле выпoлнения предъидущей aнимaции
				$('#modal_form') 
					.css('display', 'block') // убирaем у мoдaльнoгo oкнa display: none;
					.animate({opacity: 1, top: '50%'}, 200); // плaвнo прибaвляем прoзрaчнoсть oднoвременнo сo съезжaнием вниз
		});
	});
	/* Зaкрытие мoдaльнoгo oкнa, тут делaем тo же сaмoе нo в oбрaтнoм пoрядке */
	$('#modal_close').click( function(){ // лoвим клик пo крестику или пoдлoжке
		$('#modal_form')
			.animate({opacity: 0, top: '45%'}, 200,  // плaвнo меняем прoзрaчнoсть нa 0 и oднoвременнo двигaем oкнo вверх
				function(){ // пoсле aнимaции
					$(this).css('display', 'none'); // делaем ему display: none;
					$('#overlay').fadeOut(400); // скрывaем пoдлoжку
				}
			);
	});
	/*----------------------------------------------------------*/
	
	/*---------------------------fancybox-----------------------*/
	$("#top_nav").css("width", $(window).width() + "px");
	$(".site a").fancybox({minWidth: 900});
});