$(function(){

	$(this).ans1();
	$(this).ans2();
	$(this).ans3();
	$(this).ans4();
	$(".answer1").click(function(){
		$(this).ans1();
	});
	$(".answer2").click(function(){
		$(this).ans2();
	});
	$(".answer3").click(function(){
		$(this).ans3();
	});
	$(".answer4").click(function(){
		$(this).ans4();
	});
	$("#result").click(function(){
		if(confirm("上記内容で登録を行います。よろしいですか？")){
			return true;
		}else{
			return false;
		}
	});
});

$.fn.ans1 = function(){
	var _ans1 = $("#answer1_3:CHECKED").val();
	$("#answer1_holiday").attr("disabled","disabled");
	$("#answer1_reason").attr("disabled","disabled");
	if(_ans1 > 0 ){
		$("#answer1_holiday").removeAttr("disabled");
		$("#answer1_reason").removeAttr("disabled");
	}
}
$.fn.ans2 = function(){
	var _ans1 = $("#answer2_2:CHECKED").val();
	$("#answer2_year").attr("disabled","disabled");
	$("#answer2_month").attr("disabled","disabled");
	$("#answer2_disease").attr("disabled","disabled");
	if(_ans1 > 0 ){
		$("#answer2_year").removeAttr("disabled");
		$("#answer2_month").removeAttr("disabled");
		$("#answer2_disease").removeAttr("disabled");
	}
}

$.fn.ans3 = function(){
	var _ans1 = $("#answer3_2:CHECKED").val();
	$("#answer3_year").attr("disabled","disabled");
	$("#answer3_month").attr("disabled","disabled");
	$("#answer3_disease").attr("disabled","disabled");
	if(_ans1 > 0 ){
		$("#answer3_year").removeAttr("disabled");
		$("#answer3_month").removeAttr("disabled");
		$("#answer3_disease").removeAttr("disabled");
	}
}
$.fn.ans4 = function(){
	var _ans1 = $("#answer4_2:CHECKED").val();
	$("#answer4_disease").attr("disabled","disabled");
	if(_ans1 > 0 ){
		$("#answer4_disease").removeAttr("disabled");
	}
}
