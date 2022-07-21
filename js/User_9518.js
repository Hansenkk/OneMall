// written by Tianfei Qi 40079518


//delete button
function deleteRow(tableID, obj) {
    var rowIndex = obj.parentElement.parentElement.rowIndex;
    
    obj.parentElement.parentElement.parentElement.deleteRow(rowIndex); 
    }
  

