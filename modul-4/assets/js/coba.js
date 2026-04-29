const button = document.getElementById("theme-toggle");

button.addEventListener("click", function() {
    document.body.classList.toggle("red");

    if (document.body.classList.contains("red")) {
        button.innerText = "light";
    } else {
        button.innerText = "red";
    }
})