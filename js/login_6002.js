/* the pesudo user list */
var admin = ["admin","soen287"];
var users = ["Zhangsan","Lisi","Wangwu","Zhaoliu"];

//add function to buttom "submit" 
function sub(){
	var role = $("select option:selected").text();
	var username = $("#user").val();
	var pwd = $("#pwd").val();
	console.log(role);
	console.log(username);
	var flag = false;
	if(role=="Admin"){
		for(let i=0;i<admin.length;i++){
			if(username==admin[i])
				flag = true;
		}
		if(username==null||flag==false){
			$("#err-msg").css("display","block");
			$("#err-msg").text("No such admin! Check your role...");
			return false;
		}
		if(pwd!="admin123"){
			$("#err-msg").css("display","block");
			$("#err-msg").text("Invalid Password...");
			return false;
		}
		$("#form").attr("action","backStore_7808.html");
		return true;
	}else{
		for(let i=0;i<users.length;i++){
			if(username==users[i])
				flag = true;
		}
		if(username==null||flag==false){
			$("#err-msg").css("display","block");
			return false;
		}
		if(pwd!="123456"){
			$("#err-msg").css("display","block");
			return false;
		}
		setCookie("username", username, 30);
		$("#form").attr("action","Index_5067.html");
		return true;
	}
}

//add function to buttom "forget pwd"
function fp(){
	var resp = prompt("Enter your email address...","");
	alert("An email has sent to: "+resp+"\nPlease check your mailbox!")
}

function setCookie(cname,cvalue,exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires=" + d.toGMTString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

window.onload = function(){
	$("#err-msg").css("display","none");
} 