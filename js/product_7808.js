// Written by Chen Qian 27867808

//delete button

$(document).on('click', '.delete', function () {
  $(this).closest('tr').remove();
});

//edit button

$(document).on("click", ".edit", function () {
  var tr = $(this).parent().parent();
  $(this)
    .closest("td")
    .siblings("td:not('button')")
    .each(function (i, e) {
      e = $(e);
      var html =
        "<input value='" + e.text() + "'type='text' style='width:70px'>";
      e.html(html);
    });
});

// save buttton
$(document).on("click", ".save", function () {
  var tr = $(this).parent().parent();
  $("input[type='text']", tr).each(function (i, e) {
    e = $(e);
    e.parent().text(e.val());
    e.remove();
  });
});

// save form function
let list = document.getElementById("list");
console.log(list);

window.onload=function(){
 
  console.log(storage.id);
  console.log(storage.name);
  console.log(storage.inventory)
  console.log(storage.price)
  var $td1 = $("<td>"+storage.id+"</td>");
  var $td2 = $("<td>"+storage.name+"</td>");
  var $td3 = $("<td>"+storage.inventory+"</td>");
  var $td4 = $("<td>"+"$"+storage.price+"</td>");
  var $td5 = $('<td class="buttons"><button type="button" class="edit">Edit</button><button type="button" class="save">Save</button><button type="button" class="delete">Delete</button></td>');
  var $tr = $("<tr></tr>");
  $tr.append($td1).append($td2).append($td3).append($td4).append($td5);
  console.log($tr);
  list.appendChild($tr[0]);
  $(".buttons button").css("height","35px").css("width","25%").css("border-radius","12px").css("background-color","#fff").css("transition","0.4s").css("font-size","16px");
  $(".buttons button:hover").css("background","#f59e42");

}

var storage=window.localStorage;
function saveForm() {
   let id = $('#form .row td').find("input[name=id]").val().trim();
   let name = $('#form .row td').find("input[name=name]").val().trim();
   let inventory = $('#form .row td').find("input[name=inventory]").val().trim();
   let price = $('#form .row td').find("input[name=price]").val().trim();
  console.log(id);
  console.log(name);
  console.log(inventory);
  console.log(price);

  //check null data
  if( id == "" || name == "" || inventory == "" || price == ""){
    alert("Please Enter Valid Data!!!");
    return;
  }
  
  storage["id"]=id;
  storage["name"]=name;
  storage["inventory"]=inventory;
  storage["price"]=price;
      
  //check exist product by id

  let flag = true;
		$(".product_table tbody tr .item").each(function(){
			if(id == $(this).find("td:eq(1)").text()){
				alert("id is existed!!!");
				flag = false;
			}
		});
		if(!flag){
			return;
		}
  
}

