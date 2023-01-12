console.log("if staetment");

if (5 == "5") {
    console.log("if statement: it ran");

} else {
    console.log("pack out");
}

console.log("if...elseif...else staetment");

if (5 === "5") {
    console.log("stay in the house");

} else if (5 === 6) {
    console.log("stay in the house");

} else {
    console.log("pack out");
}


console.log("nested if");

if (5 !== '5') {
    if (5 == '5') {
        console.log('give grace')
    } else {
        console.log('stay')
    }
}

//to avoild much if and nested if we use switchs also do strictly equal to

var parameter = 5;

switch (parameter) {
    case '5':
        console.log('first case');
        break;
    case 5:
        console.log('first case');
        break;
    default:
        console.log('first case');
        break;
}

// condition? true_result: false_result;

var paidRent = true

paidRent ? console.log('stay in the house') : console.log('pack out of my house');


// class work

// write a program in javascript
// to calculate and display if a 
// Number is odd or even.

var num = 10;
if (num % 2 == 0) {
    console.log('even');

} else {
    console.log('odd');
}
// kodez

var num = 5;
var rem = 5 % 2;

if (rem > 0) {
    console.log('odd')

} else {
    console.log('even')

}

switch (rem) {
    case 1:
        console.log('odd')
        break;

    case 1:
        console.log('even')
        break;

    default:
    case 1:
        console.log('na u know')
        break;

}

rem > 0 ? console.log('odd') : console.log('odd');