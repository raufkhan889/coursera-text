// now this will load before any other content load
document.addEventListener("DOMContentLoaded",
    function (event) {
        function sayhello(event) {
            // this will point to the buttom tag
            this.textContent = "Said it!"

            // this is how you get the input value
            var name = document.getElementById("name").value;
            var message = "<h2>Hello " + name + "!<h2>";

            // this is how you insert value in tag
            // document.getElementById("content").textContent = message;

            // this is how you tell js to render it as html
            document.getElementById("content").innerHTML = message;

            // now we want to change the title if student entered
            if (name === "student") {
                var title = document.querySelector("#title").textContent;
                title += " & i Lovin it. :)";
                document.querySelector("#title").textContent = title;
            }
        }
        // event handling
        document.querySelector("button").onclick = sayhello;
    }
);
