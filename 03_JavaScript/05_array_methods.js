// arrayname.fill(value, start, end)

// fill ########################### 


var seafoods = ['Crabs', 'Tahong', 'Shrimps', 'Salmon', 'Talaba'];

seafoods.fill("Lobster", 1,2);
document.write(seafoods, "<br>");


// filter ########################### 


const studentage = [9, 23, 65, 18, 35, 3, 10];

document.getElementById("studage").innerHTML = studentage.filter(checkage);

function checkage(age) {
    return age <=23;
}


// find ######################### 


let num = [9, 45, 20, 17, 12, 13];

function evenNum (element) {
    return element % 2 == 0;
}

let findNum = num.find(evenNum);
document.write("<br>", + findNum);


// forEach () ###################### 


function printElements (element, index) {
    document.write("<br>" + "Index" + index + " : " + element);
}

const instrument = ["Piano", "Guitar", "Drums", "Violin",];
instrument.forEach(printElements);


// include ###################### 

let check = instrument.includes("Flute");
document.write("<br>" + check);


// isArray() ######################## 


let fruit = "Apple";
document.write("<br>" + Array.isArray(fruit));
document.write("<br>" + Array.isArray(Array));


// push () ########################## 

const animal = [];
document.write("<br>" + animal.push("Snake"));
let addElement = animal.push("Sabertooth");
let addElement2 = animal.push("Aligator");
document.write(animal);


// pop () ###################### 


let deleteElement = animal.pop();
document.write("<br>", animal);











// Pop ############################


// const coffees = [" Spanish Latte", " Americano", " French Vanilla", " Salted Caramel"]; 

// coffees.pop();
// document.write(coffees, "<br><br>");


// const coffees = [" Spanish Latte", " Americano", " French Vanilla", " Salted Caramel"];

// let coffee = coffees.pop();
// document.write(coffees.pop());


// Push  #############################


// const animes = [" Onepiece", " Naruto", " Jujustsu kaisen", " Demon Slayer", " Undead unluck"];

// animes.push(" Blue lock");
// document.write(animes, "<br><br>");


// const animes = [" Onepiece", " Naruto", " Jujustsu kaisen", " Demon Slayer", " Undead unluck"];

// let length = animes.push(" Blue lock");
// document.write(animes.push(), "<br><br>");
// document.write(animes);


// Changing Elements ###################


// const Beers = [" Sanmig", " Corona", " Modelo", " Kirin"];
// Beers[2] = " Asahi";

// document.write(Beers, "<br><br>");


// Concat ############################


// const myTeam1 = [" Curry", " lillard", " Ronaldo", " Messi"];
// const myTeam2 = [" Warriors", " Bucks", " Gilas"];
// const myTeam3 = [" Basketball", " Football"];

// const mySports = myTeam1.concat(myTeam2, myTeam3);
// document.write(mySports, "<br><br>");  


// Splice #############################


// const cars = [" Tesla", " Ford", " Volvo"];
// cars.splice(2, 0, " Lucid", " Rivian");
// document.write(cars, "<br><br>");


// Slice ########################## 


// const coffees = [" Spanish Latte", " Americano", " French Vanilla", " Salted Caramel", " Mochachino"];
// const hot = coffees.slice(2);
// document.write(coffees.slice(2));

