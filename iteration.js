//FLOW CONTROL
// given a sequential array of numbers write a program to stop executing the loop when the 
// value is equals to 5

// var numbers = [1,2,3,4,5,6,7,8,9];

// // // for (let i = 0; i < numbers.length; i++) {

//     if (numbers[i] == 5){
//         break;
//     }
    
//     console.log(`the current number is: ${numbers[i]}`);
// }
// for inactive people.... this stop or select active or people

console.log('========================================')

var employees = [
    {
        name: "Godwin",
        salary: 2000,
        active: false,
        additional_salary: function(){
            return this.salary + 250;  
        },
    },

    {
        name: "Choice",
        salary: 1500,
        active: true,
         additional_salary: function(){
            return this.salary + 250;
        },
    },

    {
        name: "Rume",
        salary: 17000,
        active: true,
        additional_salary: function(){
            return this.salary + 250;
        },
    },

    {
        name: "Favour",
        salary: 20000,
        active: true,
        additional_salary: function(){
            return this.salary + 250;
        },
    },

    {
        name: "Adesuwa",
        salary: 2000,
        active: false,
        additional_salary: function(){
            return this.salary + 250;
        },
    },

   
]

for(let index = 0; index < employees.length; index++){

    if (employees[index] ['active'] == true ) {

        console.log(`we have paid the sum of ${employees [index] ['salary']} to ${employees[index] ['name'] }`)
    }



}
// we want to rerun to others by using continue
 for (let i =0; i < employees.length; i++){

    let employee = employees [i];

    if (employee.active == false){
        continue;
    }

    console.log(`we have paid the sum of ${employees[i]['salary']} to ${employees[i] ['name'] }`)

 }

console.log(`${employees[0].additional_salary()}`);
//a method is a funct that can be operate on object

