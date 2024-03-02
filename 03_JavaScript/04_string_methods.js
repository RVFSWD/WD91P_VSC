// STR Length 

let sampletext = "I want to go to Australia and USA.";
document.getElementById("length").innerHTML = sampletext.length;

// Slice Method 

let text_slice = "Pizza, Burger, Fries, Milktea";
let extractedstring = text_slice.slice(7,13);
document.getElementById("slice").innerHTML = extractedstring;

// Substring 

let text_sub = "Pizza, Burger, Fries, Milktea";
document.getElementById("sub").innerHTML = text_sub.substring(7,13);

// SubSTR 

let newtext = "Pizza, Burger, Fries, Milktea";
document.getElementById("text").innerHTML = newtext.substr(7,13);

// Replace ()

function myrep() {
    let text = document.getElementById("textrep").innerHTML;
    document.getElementById("textrep").innerHTML = text.replace("GAIN", "GRADUATE");
}

// toLowerCase 

const phrase = "EXPECT THE UNEXPECTED ";
const lowerphrase = phrase.toLowerCase();
document.write(lowerphrase);

// toUpperCase 

const newphrase = "Wala kang baon ng isang linggo!";
const upperphrase = newphrase.toUpperCase();
document.write("<br>", upperphrase);

// Concat Method 

let EmptyVar = "";
let text1 = "MIKE";
let joinedvar = EmptyVar.concat("ASAAN", " KA", " NA ", text1);
document.write("<br>", joinedvar);

