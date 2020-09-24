var x;
console.log(x)

tellaboutx();

if (x == undefined) {
    x = 5
}

function tellaboutx() {
    if (x != undefined) {
        console.log("x is now defined")
    }
    else {
        console.log("x is still not define")
    }
}

tellaboutx();

var x = 10;
if ((null) || (console.log("Hello")) || x > 5) {
    console.log("Hello");
}