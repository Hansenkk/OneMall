//add function to buttom "regist" 
function rn(){
	var username = $("#user").val();
	var pwd = $("#pwd").val();
	var repwd = $("#repwd").val();
	var phone = $("#phone").val();
	console.log(username);
	console.log(pwd);
	console.log(phone);
	if(username.length<4||username.length>20){
		$("#user").css("border","2px solid red");
		return false;
	}
	if(pwd.length<4||pwd.length>20){
		$("#pwd").css("border","2px solid red");
		return false;
	}
	if(pwd!=repwd){
		$("#err-msg").html("Two passwords are not same, please check!");
		$("#pwd").css("border","2px solid red");
		$("#repwd").css("border","2px solid red");
		return false;
	}
	
	$.post("./regist_6002.php",{"username":username,"pwd":pwd,"phone":phone},function(){
		alert("Regist success!");
		window.location.href="./login_6002.html";
	});
	return false;
}

function setCookie(cname,cvalue,exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires=" + d.toGMTString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

window.onload = function(){
	$("#err-msg").html("");
} 