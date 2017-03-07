$(document).ready(function(){
/*-------------------------------------------头页的js--------------------------------------------------*/
/*搜索框的背景切换*/
	$("#main_serach a").click(function(){
		$(this).addClass("main_serachbg").siblings().removeClass("main_serachbg");
	})
	
	
/*menu的a字体颜色切换*/	
	$(".menu ul li a").click(function(){
		$(this).addClass("menu_acolor").parent().siblings().find("a").removeClass("menu_acolor");
	})



function login(){
window.onload = function(){
	init(document.getElementById("title"));	//记得初始化
};
	var l=0, t=0, x=0, y=0;
	var isOver=false;
	var zindex=9999;
	function init(titleDom){
		var thisDom=titleDom;//获取当前title对象
		var parentDom=thisDom.parentNode;//获取当前title对应的div
		titleDom.onmousedown=function(event){
			var e=event || window.event;
			x=e.clientX;
			y=e.clientY;
			l=parseInt(parentDom.offsetLeft);
			t=parseInt(parentDom.offsetTop);
			isOver=true;
			zindex++;
			parentDom.style.zIndex=zindex;
			document.onmousemove = function(event){
				if(isOver){
					var e=event || window.event;
					var newLeft=l+e.clientX-x;
					var newTop=t+ e.clientY-y;
					parentDom.style.left=newLeft+"px";
					parentDom.style.top=newTop+"px";
				}
			};//鼠标移动的事件
			document.onmouseup=function(event){
				if(isOver){
					isOver=false;
				}
			};鼠标松开事件
		}
	}
	$(".login").click(function(){//点击登录时显示登录窗
		$("#Login").show();
		$(".Layer").show();	
		var _left=($(window).width()-$("#Login").width())/2;
		var _top=($(window).height()-$("#Login").height())/2;
		$("#Login").css({left:_left,top:_top});
	});
	$(window).resize(function(){//浏览器窗口大小的改变
		var _left=($(window).width()-$("#Login").width())/2;
		var _top=($(window).height()-$("#Login").height())/2;
		$("#Login").css({left:_left,top:_top});	
	})
	$("#Login #title a.close").click(function(){//点击关闭时全部关闭
		$("#Login").hide();
		$(".Layer").hide();	
	});
}
login();
})