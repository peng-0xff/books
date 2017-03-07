// JavaScript Document
$(document).ready(function(e) {
    $(".food-img ul li img").mouseover(function(){
		$(this).addClass("imgbdc").parent().siblings().find("img").removeClass("imgbdc");
		var src=$(this).attr("src");
		$(".food-img img.img-big").attr("src",src);
	});
	
	
	
	
	
	
	$(".int-hearder ul li").click(function(){
		var index=$(this).index();
		$(".int-cont").eq(index).show().siblings().hide();
		var i=120*index;
		$(".xiahuaxian").animate({left:i});
		$(this).addClass("liColor").siblings().removeClass("liColor");
		})



//购物车抛物线		
//var carNum=0;
//$('.rightNav a.ada span').html(carNum);
$(".Buybutton input.BuyB").click(function(){
	var addImg=$(".food-img img.img-big")
	var cloneImg=addImg.clone();
	cloneImg.css({
		'width':'250px',
		'height':'250px',
		'position':'absolute',	
		'top':addImg.offset().top,
		'left':addImg.offset().left,
		'z-index':'1000',
		'opacity':'0.5',
	})
	cloneImg.appendTo($('body')).animate({
		'width':50,	
		'height':50,
		'top':$('.rightNav a.ada').offset().top,	
		'left':$('.rightNav a.ada').offset().left,
	},2000,function(){
		cloneImg.animate({
			'width':0,
			'height':0,	
		},function(){
			$('.rightNav a.ada span').html()++;
			$(this).detach();
			})	
	})
})
});
