console.log(document);

document.title = "na you know";

document.getElementById('demo').innerHTML = "Hey check ur p.tag, from a javascript file";//.innertext is advice to use to aviod hack

document.getElementsByClassName('p-class').innerHTML = 'emmanuel';//this will group the p inside an array or obj which is accese with [] the expression above will not display


var elements = document.getElementsByClassName('p-class');
console.log(elements)

for (element of elements) {
    element.innerHTML = 'emmanuel';
    element.style.backgroundColor = "rgb(255,212,200)"//the background-color will be camel case so js wont see it as a math expression

}

var imageLink = 'https://www.kindpng.com/picc/m/7-75707_kings-purple-crown-png-download-los-angeles-kings.png';


var images = document.getElementsByTagName('img');
console.log(images);


// images[0].src = imageLink;
// images[0].height = 60
// document.getElementById('kings').style.width = '50px';
// document.getElementById('kings').style.height = '50px';

images[0].setAttribute('src', imageLink)
images[0].setAttribute('height', 100)
images[0].setAttribute('width', 150)

var wrapper = document.getElementById(wrapper);

var ps = wrapper.getElementsByTagName('p')

console.log(ps)

document.querySelector('#demo').innerHTML = "lol"// select css selector
document.querySelector('p');// select only first p.tag
document.querySelectorAll('p');// select all p.tags





