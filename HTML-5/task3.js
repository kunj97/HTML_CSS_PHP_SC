window.onload = function() {
  var button = document.getElementById("add");
  var button = document.getElementById("deleta");
  add.onclick = insertItem;
  deleta.onclick = deleteitem
}

function insertItem()
{
  var output = document.getElementById("output");
  var input = document.getElementById("input");

  if (input.value != "")
  {
    var newlist = document.createElement("p");
    newlist.innerHTML = input.value;
    output.appendChild(newlist);
}
}
function deleteitem(){

  var deleteit = document.getElementById("output");
  var pars = deleteit.getElementsByTagName("p");
  if (pars.length >= 1 ) {
    deleteit.removeChild (pars[0]);
  }
  else {
   alert("No Paragraph to Delete");
  }

}
