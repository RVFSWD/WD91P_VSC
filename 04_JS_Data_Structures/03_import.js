import { name, sample } from "./03_export.js";
import info from "./03_export.js";

document.getElementById("print").innerHTML = "My name is " + name + sample;

document.getElementById("display").innerHTML = info();


