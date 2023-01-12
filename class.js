// var person = {

//     first_name: "bobbylee",
//     last_name: "austin",
//     full_name: this.irst_name +this.last_name;



// }

// console.log(person.full_name)

class Person {      //class is a blue print for object.
   
    constructor(name, year_of_birth, height){
        this.name = name;
        this.year_of_birth = year_of_birth;
        this.height = height;
    }

    age(){
        let currentDate = new Date();
        return currentDate.getFullYear() - this.year_of_birth;
    }

    profile(){
        return{
            name: this.name,
            age: this.age(),
            height: this.height
        }
    }


}


// to use a class

var puomo = new Person("puomo", 1999, 6.8);
 console.log(puomo.profile());

 var bobbylee = new Person("bobbylee", 1989, 6.7)
 console.log(bobbylee.profile());


 class Car{
    constructor(wheels, doors, seats){
        this.wheels = wheels;
        this.doors = doors;
        this.seats = seats;
    }

    numberOfWheels(){
        return this.wheels
    }

    numberOfDoors(){
        return this.doors
    }

    numberOfSeat(){
        return this.seats
    }
 }




class Bus extends Car{
    constructor(){
        super(4,3,18);
    }
}


var benz = new Car(4,4,5);  //instanting a class
console.log(benz.numberOfDoors());

var toyotaBus = new Bus();
console.log(toyotaBus.numberOfDoors());




class Car1{
    constructor(name){
        this.name = name
    }

    get carName(){
        return this.name;
    }

    set carName(newName){
        this.name = newName;
    }
}


var myCar = new Car1('Ford');
console.log(myCar.carName)//getter to get value


myCar.carName = 'IVM'; //setter is use to set new value
console.log(myCar.carName)




