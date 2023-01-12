//functions are blocks of codes designed to perform a specific task



/**
 syntax?

 function function_name(){}
 */




//  function writeToConsole(){

//     console.log('this the message to the console')

//  }

//  writeToConsole()

// //  function parameter or argunment
// //  pass a value into ur function

// function add(num1, num2){

//     return num1 + num2;
// }


// // function sub(num1, num2){

// //     console.log(num1 - num2);
// // }
// // add(1, 2);
// // add(5, 15);
// sub(30, 15);


// //returning a function and to be assigned to a value 

// function divide(num1, num2){

//     return num1 / num2;
// }

// console.log(divide(20, 2));

// let ans = divide(10, 5)
// console.log(ans);

// var div1 = divide(10, 2);
// var div2 = divide(20, 2);

// add ( div1, div2);
// add(divide(10, 2), divide(20, 2));

//types of Funtions
// function add(num1, num2){

//     return  parseInt(num1) +  parseInt(num2); //es6 fuction in javastripts
// }
 
// //Function with variable initating

// const adding = function (num1, num2) {
//     return paarseInt(num1) + paarseInt(num2);
// }

// arror function
// const addition = (num1, num2) => {
//     console.log()
//     return paarseInt(num1) + paarseInt(num2);
// }

// const ADD = (num1, num2) => paarseInt(num1) + paarseInt(num2);

// let writTo =(text) => console.log(text)





// var button = document.getElementById('calculate');
// var num1 = document.getElementById('num1');
// var num2 = document.getElementById('num2');
// var result = document.getElementById('result');

// button.addEventListener('click', function(){
//     var res = add(num1.value, num2.value);
//     result.innerText = 'this answer is:' + res;
// })



// Class work
/**
 * write 4 function with different variants to display " my is _______"
 */


var Name = "Bobbylee";

function name(){

        console.log(`My is ${Name}`);
  
}

function name_2(){

    console.log(`My is ${Name}`);

}

const  Name_3 = () => {
    console.log(`My is ${Name}`);
    console.log(`My is ${Name}`);
}


const names = () => console.log(`My is ${Name}`);

const naMe = function(){

    console.log(`My is ${Name}`);

}

const name_4 = _ => console.log(`My is ${Name}`); // understand score means no passing parameter


naMe();
names();
Name_3(); 
name_2();


//annonimous function are funct without functionName