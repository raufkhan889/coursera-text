console.log("Array's\n\n");

var names = ["Rauf", "Eqra", "Dawood"];

console.log(names)

for (var i = 0; i < names.length; i++) {
    console.log("Hello " + names[i]);
}

console.log("\nAnother way.\n")

for (var name in names) {
    console.log(names[name]);
}