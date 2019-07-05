function textarea(){
var checkbox = document.getElementById("box");
var textarea = document.getElementById("text");

if (checkbox.checked) {

  textarea.disabled = false;

}
else {

  textarea.disabled = true;

}
}
