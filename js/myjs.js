$( document ).ready(function() {
		$("#form").hide();
		$("#form1").hide();
		$("#form2").hide();
		$("#verequipo").hide();

	$("#ra").click(function(){
		$("#imagen").hide();
		$("#form").hide();
		$("#form1").show();
		$("#form2").hide();
	});
	$("#ru").click(function(){
		$("#form").show();
		$("#form1").hide();
		$("#imagen").hide();
		$("#form2").hide();
	});

	$("#h").click(function(){
		$("#form").hide();
		$("#form1").hide();
		$(".imagen").show();
		$("#form2").hide();
		$(".imagen").css({"width":"30em","height":"30em"});
	});
	$("#is").click(function(){
		$("#form").hide();
		$("#form1").hide();
		$("#imagen").hide();
		$("#form2").show();
	});
	$("#RE").click(function(){
		$("#form").show();
		$("#form1").hide();
		$("#verequipo").hide();
		$("#form2").show();
		$(".ocultar").hide();
		$(".imagen").css({"width":"20em","height":"20em"});
	});

	$("#verE").click(function(){
		$("#form").hide();
		$("#verequipo").show();
		$("#form1").hide();
		$("#form2").hide();
		$(".imagen").css({"width":"20em","height":"20em"});
	});

});