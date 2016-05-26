$( document ).ready(function() {
		$("#form").hide();
		$("#form1").hide();
		$("#form2").hide();
		$("#verequipo").hide();
		$("#form3").hide();

	$("#ra").click(function(){
		$("#imagen").hide();
		$("#form").hide();
		$("#form1").show();
		$("#form2").hide();
		$("#form3").hide();
	});
	$("#ru").click(function(){
		$("#form").show();
		$("#form1").hide();
		$("#imagen").hide();
		$("#form2").hide();
		$("#form3").hide();
	});

	$("#h").click(function(){
		$("#form").hide();
		$("#form1").hide();
		$(".imagen").show();
		$("#form2").hide();
		$("#form3").hide();
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
		$(".imagen").css({"width":"20em","height":"20em","margin-top":"2em"});
	});

	$("#RA").click(function(){
		$("#form").hide();
		$("#form1").show();
		$("#verequipo").hide();
		$("#form2").hide();
		$(".ocultar").hide();
		$(".imagen").css({"width":"20em","height":"20em","margin-top":"2em"});
	});

	$("#verE").click(function(){
		$("#form").hide();
		$("#verequipo").show();
		$("#form1").hide();
		$("#form2").hide();
		$(".imagen").css({"width":"20em","height":"20em","margin-top":"2em"});
	});

	$("#verE").click(function(){
		$("#form").hide();
		$("#verequipo").hide();
		$("#form1").hide();
		$("#form2").hide();
		$("#form3").show();
		$(".imagen").css({"width":"20em","height":"20em","margin-top":"2em"});
	});

});