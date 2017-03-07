// JavaScript Document
$(document).ready(function(e) {
	$("#Checkbox1").click(function(){
		if(this.checked){
			$("[name=newslist]:checkbox").prop("checked",true);	
					var num=0;
					var total=0;

					$("[name=newslist]:checkbox:checked").each(function(){	
						var m=$(this).attr('attr');
						num++;
						total+=parseFloat($(this).val()*m);
					$('#zong1').html(total);
					$('#shuliang').html(num);
		
			});
			
		}else{
			$("[name=newslist]:checkbox").prop("checked",false);
				$('#zong1').html(0);
				$('#shuliang').html(0);
		}	
	})
	
	$("#checkAll").click(function(){
		if(this.checked){
		$("[name=newslist]:checkbox").prop("checked",true);	
					var num=0;
					var total=0;
					$("[name=newslist]:checkbox:checked").each(function(){	
						var m=$(this).attr('attr');
						num++;
						total+=parseFloat($(this).val()*m);
					$('#zong1').html(total);
					$('#shuliang').html(num);
		
					});
		}
	})
	$("#invert").click(function(){
		if(this.checked){	
		$("[name=newslist]:checkbox").each(function(){
			
			this.checked=!this.checked;
					var num=0;
					var total=0;
					$("[name=newslist]:checkbox:checked").each(function(){	
						var m=$(this).attr('attr');
						num++;
						total+=parseFloat($(this).val()*m);
					});
					$('#zong1').html(total);
					$('#shuliang').html(num);

			});	
		}

	});
	$("#cancel").click(function(){
		if(this.checked){
		$("[name=newslist]:checkbox").prop("checked",false);
		$('#zong1').html(0);
		$('#shuliang').html(0);	
		}
	})
	$("[name=newslist]:checkbox").click(function(){
		var num=0;
		var total=0;
		$("[name=newslist]:checkbox:checked").each(function(){	
			var m=$(this).attr('attr');
			num++;
			total+=parseFloat($(this).val()*m);
		});
		$('#zong1').html(total);
		$('#shuliang').html(num);	
	})
	
})