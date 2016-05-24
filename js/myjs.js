$( document ).ready(function() {
		$("#form").hide();
		$("#form1").hide();
		$("#form2").hide();

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
		$("#imagen").show();
		$("#form2").hide();
	});
	$("#is").click(function(){
		$("#form").hide();
		$("#form1").hide();
		$("#imagen").hide();
		$("#form2").show();
	});
});