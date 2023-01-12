// var first_input = document.getElementById('first_input');
// var second_input = document.getElementById('second_input');



// first_input .addEventListener('input', (event)=>{
    

//     //first_input.value// to get the value inside input
   
//     event.target.value   //it similar to first_input.value
//     document.getElementById('second_input').value = event.target.value //this is called two way bending in js

// });

var first_input = document.getElementById('first_input');
var second_input = document.getElementById('second_input');

first_input.oninput = (event) => second_input.value = event.target.value;


var box = document.getElementById('box');

box.addEventListener('mouseover', box_1());

function box_1(){
    box.innerHTML.style.backgroundColor = "rgb(0,230,9)";
}