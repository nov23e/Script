$(function(){
if($('div').hasClass('vps')){
		$('.regi').addClass('bg6');
		$('.hd').addClass('bd');
	}
$('.hd').hover(function(){
	if($('.regi').hasClass('bg6')){
		setTimeout(function(){
			if($('.hd').hasClass('hover')){
				$('.regi').removeClass('bg6');
				$('.hd').removeClass('bd');
			}
		},150)
	}
},function(){
	if($('div').hasClass('vps')){
		setTimeout(function(){
			if(!$('.hd').hasClass('hover')){
				$('.regi').addClass('bg6');
				$('.hd').addClass('bd');
			}
		},350)
	}
})


if(!$('.hd-floor').hasClass('index-page')){
	$('.hd-floor').css({'display':'block','border':'none',height:64});
}

var time;
$('.hd').hover(function(){
	clearTimeout(time);
	// time = setTimeout(function(){
		if(!$('.hd').hasClass('hover')){
			$('.hd').toggleClass('hover');
			if($('.hd-floor').hasClass('index-page')){
				$('.hd-floor').stop(true, true).slideDown(100);
			}

		}
	// },0);
},function(){
	clearTimeout(time);
	time = setTimeout(function(){
		if($('.hd').hasClass('hover')){
			$('.hd').toggleClass('hover');
			if($('.hd-floor').hasClass('index-page')){
				$('.hd-floor').stop(true, true).slideUp(100);
			}
		}
	},100)
});
});

$(function(){
	var time;
	var leng = $('.nav>li').length;

$('.nav>li').hover(function(){
		var hoverNow=$(this);
	clearTimeout(time);
	time = setTimeout(function(){
		if(!hoverNow.hasClass('hover')){
			hoverNow.toggleClass('hover');
			var navlifirst = $('.nav>li:eq(0)');
			if(hoverNow.children().hasClass('nav2')){
				hoverNow.find('.nav2').stop().slideDown(100)
			}else{
				hoverNow.find('.nav-solu').stop().slideDown(80);
			}
		}
	},100);
},function(){
	clearTimeout(time);
	// time = setTimeout(function(){
		for(var i = 0;i<leng;i++){
			(function(n){
				if($('.nav>li').eq(n).hasClass('hover')){
					$('.nav>li').eq(n).toggleClass('hover');
					if($('.nav>li').eq(n).find('.nav2')){
						$('.nav>li').eq(n).find('.nav2').stop().slideUp(100);
					}
					$('.nav>li').eq(n).find('.nav-solu').stop().slideUp(80);
				}
			})(i)
		}

	// },0)
});
})


// 二级菜单显示
$(function(){
var time;
var div = $('.pro>li>div');
for( var i = 0, _i = $('.pro>li>div').length; i < _i; i ++ ){
	div[i].index_ = i
}
var allpro = $('.allpro');
$('.pro>li>div').hover(function(){
		clearTimeout(time);
			var _index = this.index_;
			if(!$(this).hasClass('hover') && !$(this).hasClass('pro-active')){
				$(this).toggleClass('hover').addClass('pro-active').parent('li').siblings('li').children('div').removeClass('pro-active');
				allpro.stop().fadeOut(0);
				$(allpro[_index]).stop().fadeIn(0);
			}
	},function(){
		clearTimeout(time);
			if($(this).hasClass('hover')){
				$(this).toggleClass('hover');
			}
	})

$('.nav-arrow-up').click(function(){
		$('.nav2').stop().slideUp(100);
	})


})



$(function(){
	$(document).ready(function(){
		var father = $('.nav-solus'),
			child = father.eq(0).find('.nav-solu-warp'),
			child_length = child.length;
		var child_width = 220;
		child.css('width', child_width );
		father.css('width', child_width * child_length );

	})
})
