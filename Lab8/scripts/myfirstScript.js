//test to see if javascript is working

alert("Javascript is working!");

var p = prompt("do you want to print your name?");
if(p){
  printName();
}



function sayHelloPopup(){
  alert("Hello Everyone!!");
}

function printName(){
  var name = "eric strong";
  var i = 0;
  for(i=0;i<5;i++){
    document.write(i + "eric strong");
  }

}
