function calculate(){
	var quantity = $("#quan").val();
	var price = parseFloat($("#price").text().substring(1));
	var total = (quantity*price).toFixed(2);
	console.log(quantity);
	console.log(price);
	$("#tt").css("font-size","20px");
	$("#tt").css("font-family","Courier");
	$("#tt").css("font-weight","bolder");
	$("#tt").text("$"+total);
	if(quantity!=""&&!isNaN(total)){
		$("#rt").css("font-size","20px");
		$("#rt").css("color","red");
		$("#rt").css("font-family","Courier");
		$("#rt").css("font-weight","bolder");
		$("#rt").slideDown(750);
		$("#rt").slideUp(750);
	}
}
