var s = "i am bobbylee, who are u?"

console.log(s.length)
//slice is taking posion of a strings TAke 2 parameters of datatype number

console.log(s.slice(5, 14))

console.log(s.slice(-5))// with -ve value starts from ends

console.log(s.substring(5, 10))

let example = 'Daniel is web dev';
console.log(example.slice(0, 7))
console.log(example.substr(7, 2))

//string replace
console.log(example.replace('Daniel', 'Bobbylee'))

example1 = example.replace('Daniel', 'Bobbylee')
example2 = example1.replace('web', 'software engineer')

console.log(example2)

console.log(example.toUpperCase('Daniel', 'Bobbylee')) // camel case is eg toUpperCase, naMe

//string convert to Array

let convert = 'anna,bella,cilia,dorcas,esther,felicia';
newArray = convert.split(',');
console.log(newArray[0] + 'and ' + newArray[5])
console.log(`${newArray[0]} and ${newArray[5]}`);

// Number method
let score = 94.12345
console.log(score.toFixed(3));
console.log(`${score.toFixed(3)}`);


let score_1 = '94.12345';
console.log(typeof score_1);

// array method

let people = ['daneil', 'bob', 'rume'];
console.log(people.pop());


console.log('==========================');
let poppedperson = people.pop();
console.log(poppedperson);


console.log('==========================');
//push add new element to an array;
let techbros = ['bobbylee', 'mcfi', 'romeo'];
techbros.push('odogwu')
console.log(techbros);

//array shift() remove the 1st element

console.log('==========================');
techbros.shift()
console.log(techbros);

//unshift
console.log('==========================');
techbros.unshift('ify');
console.log(techbros);

//array merge
let techbros_1 = ['bobbylee', 'mcfi', 'romeo'];
let techbros_2 = ['bobbylee', 'mcfi', 'romeo'];
let techbros_3 = ['bobbylee', 'mcfi', 'romeo'];
console.log('==========================');
let techbros_4 = techbros_3.concat(techbros, techbros_1, techbros_2);
console.log(techbros_4);


console.log('==========================');
//delete method remove and leave a empty space element which is not to good or professional
//dat can cause a problem wen mapping or obj orienting

//splice method help to put and removein more array elements on a specific order that work with iterms not index


//sort u join the array name with sort mth b4 using
techbros_4.sort();
console.log(techbros_4);




console.log('==========================');
//compare function
let techbros_5 = [1, 11, 2, 22, 55, 12, 13, 60, 8];

techbros_5.sort(
    (a, b) => (a - b)
)


console.log('==========================');
//array iteration it sees any array as object

//call back function (value index array),
const result = [1, 11, 2, 22, 55, 12, 13, 60, 8, 35, 75, 23, 9, 0, 1665];
//for each method donot return a new array 

result.forEach(
    (value, index, array) => {
        if (value % 2 == 0) return console.log(`this ${value} is even`)

        return console.log(`this is ${value} is odd`)
    }
);



console.log('==========================================-=====');
//  map method produce a new array, donot execute a null value

let mappedResult = result.map(
    (value, index, array) => {
        return console.log(`this is ${value} is here`)
    }
);

console.log(mappedResult);

console.log('==========================================-=====');
//filter method can be use in a search function it also 



const myFuction=(value, index, array) => {
    return value > 10
}
mappedResult = result.filter(myFuction);
console.log(mappedResult);

//Revision
var fruits_1 = ['banana','orange','pear','mango']
// console.log(fruits_1.toString());
// console.log(fruits_1.join('*'));
// console.log(fruits_1.join(','));
// console.log(fruits_1.shift());

fruits_1[0] = "Paw" //to change value without using unshift
fruits_1[fruits_1.length] = "another value"; //add to the of array length
console.log(fruits_1[fruits_1.length - 1]); //to see the last array of ur array list
//splice remove new index and filling the whole while slice remove donot modify array 