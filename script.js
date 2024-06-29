const header = document.querySelector('header');
var navlinks = document.getElementById("navlinks");

function showMenu() {
    navlinks.style.right = "0";
}

function hideMenu() {
    navlinks.style.right = "-200px";
}

/*up counter*/
let valueDisplays = document.querySelectorAll(".num");
let interval = 4000;

valueDisplays.forEach((valueDisplay) => {
    let startValue = 0;
    let endValue = parseInt(valueDisplay.getAttribute("data-val"));

    let duration = Math.floor(interval / endValue);
    let counter = setInterval(function () {
        startValue = startValue + 1;
        valueDisplay.textContent = startValue;
        if (startValue == endValue) {
            clearInterval(counter);
        }
    }, duration);

});

/*Character Count*/
const textAreaElement = document.querySelector("#ach");
const characterCounterElement = document.querySelector("#count");
const typedCharactersElement = document.querySelector("#current");
const maximumCharacters = 500;
textAreaElement.addEventListener("keyup", (event) => {
    const typedCharacters = textAreaElement.value.length;

    if (typedCharacters > maximumCharacters) {
        return false;
    }
    typedCharactersElement.textContent = typedCharacters;
});


/*dark mode
function dark() {
    var theme;
    var element = document.body;
    element.classList.toggle("dark-mode");

    if (element.classList.contains("dark-mode")) {
        console.log("dark");
        theme = "DARK";
    }
    else {
        console.log("light");
        theme = "LIGHT";
    }

    localStorage.setItem("PageTheme", JSON.stringify(theme));

}
let GetTheme = JSON.parse(localStorage.getItem("PageTheme"));
console.log(GetTheme);

if (GetTheme === "DARK") {
    document.body.classList = "dark-mode";
}*/


/*let mybutton = document.getElementById("myBtn");
window.onscroll = function () {
    scrollFunction();
}

function scrollFunction() {
    if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}*/