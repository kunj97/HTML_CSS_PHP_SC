var tag = false;
window.onload = function ()

{
  var button = document.getElementById("button");

  button.onclick = changeBackground;
  }
  function changeBackground()
  {
    var peom = document.getElementById ("poem");
    var allParas = peom.getElementsByTagName("p");
    if (!tag) {
      tag = true;
    for (var i = 0; i < allParas.length; i++) {
     allParas[i].style.backgroundColor = "yellow";
     var x = document.getElementById("button").innerHTML = "Click-To-Unhighlight";
  }
}
    else {
      tag = false;
      for (var i = 0; i < allParas.length; i++) {
        allParas[i].style.backgroundColor = "silver";
        var y = document.getElementById("button").innerHTML = "Click to Highlight"
      }
    }
}
