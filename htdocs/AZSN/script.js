// create a div element and and h1 tag displaying Hello World
var div = document.createElement('div')
div.innerHTML = "<h1>Hello World</h1><input type='text' value='hello world'>"
div.style.position = "absolute"
div.style.top = "50%"
div.style.left = "50%"
div.style.transform = "translate(-50%, -50%)"
div.querySelector("input").addEventListener("input", function (e) {
    var value = e.target.value
    if (value.match(/^#[0-9a-f]{6}$/i)) {
        document.body.style.backgroundColor = value
    }
})