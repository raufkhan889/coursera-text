function checkValid() {
    var name = document.getElementById('name').innerHTML;

    if (name != null) {
        console.log(name);
    }
    else {
        document.confirm("Enter Your Name please . . .");
    }
}