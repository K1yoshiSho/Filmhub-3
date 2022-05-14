// smth what we need
const lightTheme = "css/main.css";
const darkTheme = "css/mainDark.css";
//placing a theme button
let parentDiv = document.getElementById("parent");
var sp1 = document.createElement("button");
let sp2 = document.getElementById("sp2");
//styling the button
sp1.className = "btn btn-outline-danger";
sp1.type = "button";
sp1.id = "toggleThemeBtn";
parentDiv.insertBefore(sp1, sp2.nextSibling);
//the icon of button
sp1.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-brightness-high" viewBox="0 0 16 16">\n' + '                    <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"></path>\n' + '                </svg>';
//event
sp1.addEventListener("click", theme);
//function to change a theme to dark mode
function darkThemeFun() {
  let logo = document.getElementById("logoInNav");
  logo.setAttribute("src", "/img/FilmhubDark.png");
  sp1.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon" viewBox="0 0 16 16">\n' + '  <path  d="M 6 0.278 a 0.768 0.768 0 0 1 0.08 0.858 a 7.208 7.208 0 0 0 -0.878 3.46 c 0 4.021 3.278 7.277 7.318 7.277 c 0.527 0 1.04 -0.055 1.533 -0.16 a 0.787 0.787 0 0 1 0.81 0.316 a 0.733 0.733 0 0 1 -0.031 0.893 A 8.349 8.349 0 0 1 8.344 16 C 3.734 16 0 12.286 0 7.71 C 0 4.266 2.114 1.312 5.124 0.06 A 0.752 0.752 0 0 1 6 0.278 Z M 4.858 1.311 A 7.269 7.269 0 0 0 1.025 7.71 c 0 4.02 3.279 7.276 7.319 7.276 a 7.316 7.316 0 0 0 5.205 -2.162 c -0.337 0.042 -0.68 0.063 -1.029 0.063 c -4.61 0 -8.343 -3.714 -8.343 -8.29 c 0 -1.167 0.242 -2.278 0.681 -3.286 Z"></path>\n' + '</svg>';
  let icontg = document.getElementById("icon1");
  icontg.setAttribute("src", "img/icons/telegramlight.png");
  let icontg1 = document.getElementById("icon2");
  icontg1.setAttribute("src", "img/icons/telegramlight.png");
  let banner = document.getElementById("banner");
  banner.setAttribute("src", "img/f.jpg");
  banner.setAttribute("height", "500px");
  banner.setAttribute("widht", "1150px");
  let nav = document.getElementById("nav");
  nav.setAttribute("class", "navbar navbar-expand-lg navbar-dark bg-dark");
}
//function to change a theme to light mode
function lightThemeFun() {
  let logo = document.getElementById("logoInNav");
  logo.setAttribute("src", "img/Filmhub.jpg");
  sp1.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-brightness-high" viewBox="0 0 16 16">\n' + '                    <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"></path>\n' + '                </svg>';
  let icontg = document.getElementById("icon1");
  icontg.setAttribute("src", "img/icons/Telegram.svg");
  let icontg1 = document.getElementById("icon2");
  icontg1.setAttribute("src", "img/icons/Telegram.svg");
  let banner = document.getElementById("banner");
  banner.setAttribute("src", "img/banner.png");
  let nav = document.getElementById("nav");
  nav.setAttribute("class", "navbar navbar-expand-lg navbar-light");
}
var link = document.getElementById("themeLink");
//check for a stored theme choice
if (!localStorage.theme)
  currTheme = lightTheme;
else if (localStorage.theme === lightTheme)
  currTheme = lightTheme;
else {
  currTheme = localStorage.theme;
  theme();
}
// function on event listener
function theme() {
  var currTheme = link.getAttribute("href");
  var theme;
  if (currTheme === lightTheme) {
    currTheme = darkTheme;
    theme = "dark";
    darkThemeFun();
  }
  else {
    currTheme = lightTheme;
    theme = "light";
    lightThemeFun();
  }
  link.setAttribute("href", currTheme);
  //storing the data of current theme
  localStorage.theme = currTheme;
}

//   Smooth Scroll
var mama = document.querySelector('html');
mama.style.scrollBehavior="smooth";
var papa = document.querySelector('body');
var knopka = document.createElement("button");
knopka.className="btn btn-outline-danger";
knopka.innerHTML ='<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">\n' +
    '  <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>\n' +
    '</svg>';
papa.appendChild(knopka);
knopka.setAttribute("style", "position: fixed; bottom: 150px; right: 70px;")
knopka.style.borderRadius="15%";
knopka.style.opacity="0";

window.onscroll = () =>{
    if(window.scrollY > 900){
        knopka.style.opacity="1";
        knopka.style.transition=".4s";
    }
    if(window.scrollY < 900){
        knopka.style.opacity="0";
        knopka.style.transition=".4s";
    }
};

$(knopka).click(function (){
    $(window).scrollTop(0);
});
//   Smooth scroll
