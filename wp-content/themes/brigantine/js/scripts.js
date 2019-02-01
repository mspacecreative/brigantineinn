$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll > 42) {
    		$("#top-header").addClass("shrink");
    } else {
    		$("#top-header").removeClass("shrink");
    }
});

$(document).ready(function(){
	$('#main-content').css('padding-top', $('header').outerHeight());
	$('.home #main-content').css('padding-top', '0');
});

$('p').each(function() {
    var $this = $(this);
    if($this.html().replace(/\s|&nbsp;/g, '').length == 0)
        $this.remove();
});