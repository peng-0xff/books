// JavaScript Document
$(document).ready(function(e) {
	$('[name=rdColor]:radio').click(function(){
		$(this).parent().addClass('libg').siblings().removeClass('libg');
	})
	$('#tianjiadizhi').click(function(){
		$('.Laye').show();
		$('.adrbox').show();
	})
	$('.Cancel-b').click(function(){
		$('.Laye').hide();
		$('.adrbox').hide();
	})
})