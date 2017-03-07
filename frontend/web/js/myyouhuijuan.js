// JavaScript Document
$(document).ready(function(){
	$(".user ul a li").hover(function(){
		$(this).addClass("liuyan_libg");
		},function(){
			$(this).removeClass("liuyan_libg");
			})
	$('.user_list ul li a.a1').click(function(){
		confirm('确定要退出吗');
	})
})