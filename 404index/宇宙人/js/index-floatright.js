$(function(){
var win=$(window),
	scr=$(document),
	backtop = $('.fr-backtop');

win.scroll(isScroll);
isScroll();
function isScroll(){
	if(scr.scrollTop() != 0){
	  	backtop.fadeIn('slow');
	}else{
		backtop.fadeOut('slow');
	}
}
backtop.on('click', function(){
	$("html,body").animate({scrollTop:0}, 100);
})
})