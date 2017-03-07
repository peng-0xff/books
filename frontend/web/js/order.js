$(document).ready(function(){
/*-------------------------------------------order页面的js--------------------------------------------------*/
/*fChoice选择区的背景切换*/	
	$(".fChoice ul li dl dd").hover(function(){
		$(this).addClass("fChoice_bgtwo").siblings().removeClass("fChoice_bgtwo");	
	},function(){
		$(this).removeClass("fChoice_bgtwo");	
		})
		
		
	$('#end_choice dd.d_one').css({padding:"0px"});
	$('#end_choice dd.d_two').css({padding:"0px"});
	$('#end_choice dd.d_three').css({padding:"0px"});
	$('#end_choice dd.d_four').css({padding:"0px"});
	
	$(".fChoice ul li.li_one dl dd").click(function(){
		
		$(this).addClass("fChoice_bg").siblings().removeClass("fChoice_bg");
		if($(this).index()==1){
		$("#end_choice dd.d_one").html('');
		$('#end_choice dd.d_one').css({padding:"0px"});	
		}else{
		$("#end_choice dd.d_one").html($(this).text());	
		$('#end_choice dd.d_one').addClass("fChoice_bg");
		$('#end_choice dd.d_one').css({padding:'3px'});
		$('#end_choice dd.d_one').css({color:'#fff'});
		}
	})
		
	$(".fChoice ul li.li_two dl dd").click(function(){
		
		$(this).addClass("fChoice_bg").siblings().removeClass("fChoice_bg");
		if($(this).index()==1){
		$("#end_choice dd.d_two").html('');
		$('#end_choice dd.d_two').css({padding:"0px"});	
		}else{
		$("#end_choice dd.d_two").html($(this).text());	
		$('#end_choice dd.d_two').addClass("fChoice_bg");
		$('#end_choice dd.d_two').css({padding:'3px'});
		$('#end_choice dd.d_two').css({color:'#fff'});
		}
	})
	$(".fChoice ul li.li_three dl dd").click(function(){
		
		$(this).addClass("fChoice_bg").siblings().removeClass("fChoice_bg");
		if($(this).index()==1){
		$("#end_choice dd.d_three").html('');
		$('#end_choice dd.d_three').css({padding:"0px"});	
		}else{
		$("#end_choice dd.d_three").html($(this).text());	
		$('#end_choice dd.d_three').addClass("fChoice_bg");
		$('#end_choice dd.d_three').css({padding:'3px'});
		$('#end_choice dd.d_three').css({color:'#fff'});
		}
	})
	$(".fChoice ul li.li_four dl dd").click(function(){
		
		$(this).addClass("fChoice_bg").siblings().removeClass("fChoice_bg");
		if($(this).index()==1){
		$("#end_choice dd.d_four").html('');
		$('#end_choice dd.d_four').css({padding:"0px"});	
		}else{
		$("#end_choice dd.d_four").html($(this).text());	
		$('#end_choice dd.d_four').addClass("fChoice_bg");
		$('#end_choice dd.d_four').css({padding:'3px'});
		$('#end_choice dd.d_four').css({color:'#fff'});
		}
	})
		
})