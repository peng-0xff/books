$(document).ready(function(){
/*-------------------------------------------index的js--------------------------------------------------*/	
/*ctop 中间部分的图片切换*/	
	function picSlide(){
		var index=0;//初始化序号
		var play=null;
		$(".pic_slide ul li").mouseover(function(){
			clearInterval(play);//清除定时器
			index=$(this).index();//获取序列号
			$(this).addClass("pic_slideBg").siblings().removeClass("pic_slideBg");//siblings()获取同级的，如li的其他三个li
			$(".pic_slide a img").eq(index).show().parent().siblings().find("img").hide();	
		})
		$(".pic_slide ul li").mouseout(function(){
				autoplay();
		})
		function autoplay(){
		//设置定时器
			play=setInterval(function(){
				index++;
				if(index>2){index=-1;}else{
					$(".pic_slide ul li").eq(index).addClass("pic_slideBg").siblings().removeClass("pic_slideBg");
					$(".pic_slide a img").eq(index).show().parent().siblings().find("img").hide();	
				}
			},2000);
		}
		autoplay();
	}
	picSlide();
	
	
/*ctop 右部的订单滚动*/	

/*cbottom内容的点菜和餐厅切换部分*/
	$(".foodTitle ul li").click(function(){
		var index=0;
		index=$(this).index();
		$(this).addClass("foodTitle_bg").siblings().removeClass("foodTitle_bg");
		$(".foodslide div").eq(index).show().siblings().hide();
	})
	
	
})