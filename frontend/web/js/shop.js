// JavaScript Document
$(document).ready(function(e) {
	//图片的切换
	$('.smallImg ul li').mouseover(function(){
		var src=$(this).find('img').attr('src');
		$('.bigImg img').attr("src",src);
		$(this).find('img').addClass("smallImg_bg").siblings().find("img").removeClass("smallImg_bg");
	})
	
	
	//菜谱的下滑动以及内容的展示
	$('.xinxi p').click(function(){
		index=$(this).index();
		$(".p_border").animate({left:index*130},500);
		$(".intro ul li").eq(index).show().siblings().hide();	
	})
	
	//菜谱下的菜单图
	$('.botPic').hover(function(){
		$(this).addClass("borderbg").parent().siblings().find('.botPic').removeClass("borderbg");	
	},function(){
		$(this).removeClass("borderbg");
		})
})



