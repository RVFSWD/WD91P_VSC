// for loop

for (let a = 0; a < 10; a++) {
    document.write("Hello World!" + "<br>");
    // document.write(a + "<br>");
}


for (let a = 1; a <= 10; a++) {
    document.write(a + "<br>");
}


// for in loop

const motor = {
    yamaha:'sniper',
    honda:'rebel500',
    suzuki:'raider',
    bmw:'GSX1250',
}

let value = '';

for (let item in motor) {
    value += motor[item] + '<br>';
}

document.write(value);

document.write(motor.suzuki);
document.write(motor.bmw + "<br>");


// while loop

// let i = 1;
// let n = 5;

// while (i <= n) {
//     document.write(i + "<br>");
//     i +=1;
// }


// do while loop

var print = "";
var val = 1;

do {
    print += "Pamela " + val;
    print += "<br>";
    val ++;
} while (val < 5);
document.write(print);

