console.log("Hello!\n\n")

// Function constructor
function Circle(radius) {
    this.radius = radius
}

// Prototype will create this function once
Circle.prototype.getArea = function () {
    return Math.PI * Math.pow(this.radius, 2);
}

var myCircle = new Circle(10);
console.log(myCircle.getArea());

var myOtherCircle = new Circle(20);
console.log(myOtherCircle.getArea());


// Now Object literal
var literalCircle = {
    radius: 10,

    getArea: function () {
        return Math.PI * Math.pow(this.radius, 2);
    }
};

console.log(literalCircle.getArea());


// New Object
var myObject = new Object
myObject = {
    name: "Rauf Khan",
    age: 20,
    university: "University of South Asia"
};

console.log(myObject);