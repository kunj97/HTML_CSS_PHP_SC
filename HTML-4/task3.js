function compute1(){
  var input1 = document.getElementById("num1");
  var input2 = document.getElementById("num2");
  var answer = document.getElementById("answer");
  var result = parseInt(input1.value) + parseInt(input2.value);
  answer.innerHTML = result;
}
function compute2(){
  var input1 = document.getElementById("num1");
  var input2 = document.getElementById("num2");
  var answer = document.getElementById("answer");
  var result = parseInt(input1.value) - parseInt(input2.value);
  answer.innerHTML = result;
}
function compute3(){
  var input1 = document.getElementById("num1");
  var input2 = document.getElementById("num2");
  var answer = document.getElementById("answer");
  var result = parseInt(input1.value) * parseInt(input2.value);
  answer.innerHTML = result;
}
