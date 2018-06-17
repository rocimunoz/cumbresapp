$('.counter-count').each(function () {
   var countValue = $(this).text();
   console.log(countValue);
if (countValue<5){
    //color azul
    $(this).css("background-color","#00b3e7");
   // $(this).css("width","62px");
   // $(this).css("height","62px");
}else if (countValue<10){
    $(this).css("background-color","#FFFF66");
    $(this).css("color","black");
    //$(this).css("width","72px");
    //$(this).css("height","72px");
}else if (countValue<15){
    $(this).css("background-color","orange");
    //$(this).css("width","82px");
    //$(this).css("height","82px");
}else{
    $(this).css("background-color","red");
    //$(this).css("width","92px");
    //$(this).css("height","92px");
}
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 5000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });


 /*
	    Countdown initializer
	*/
	var now = new Date();
	var countTo = 115 * 24 * 60 * 60 * 1000 + now.valueOf();    
	$('.timer').countdown(countTo, function(event) {
		$(this).find('.days').text(event.offset.totalDays);
		$(this).find('.hours').text(event.offset.hours);
		$(this).find('.minutes').text(event.offset.minutes);
		$(this).find('.seconds').text(event.offset.seconds);
	});



