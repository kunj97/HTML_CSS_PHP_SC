window.onload = pageLoad;

function pageLoad(){
  var change1 = document.getElementById("makeGreen");
  var change2 = document.getElementById("makeBlue");
  var change3 = document.getElementById("makeMono");
  var change4 = document.getElementById("makeSanSerif");
  var change5 = document.getElementById("makeSerif");
  change1.onclick = makeGreen;
  change2.onclick = makeBlue;
  change3.onclick = makeMono;
  change4.onclick = makeSanSerif;
  change5.onclick = makeSerif;

}

function makeGreen() {
  var paragraph = document.getElementById("paragraph");
  paragraph.style.color = "green";
}

function makeBlue() {
  var paragraph = document.getElementById("paragraph");
  paragraph.style.color = "blue";
}

function makeMono() {
  var paragraph = document.getElementById("paragraph");
  paragraph.style.fontFamily = "monospace";
}

function makeSanSerif() {
  var paragraph = document.getElementById("paragraph");
  paragraph.style.fontFamily = "sans-serif";
}

function makeSerif() {
  var paragraph = document.getElementById("paragraph");
  paragraph.style.fontFamily = "serif";
}
