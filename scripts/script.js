// GET HAMBURGER MENU AND ASSIGN IT TO VARIABLE 
var hamburger_icon = document.querySelector("#hamburger-icon");
var header_menu = document.querySelector("#header__menu");
// ADD EVENT LISTENER FOR BUTTON CLICK 
hamburger_icon.addEventListener('click',toggleMenu);
// RUN THIS FUNCTION WHEN BUTTON IS CLICKED
function toggleMenu(){
    header_menu.classList.toggle("toggleMenu");
}


// window.addEventListener("load",function(){
//     var loader =document.querySelector("#loader");
//     loader.className += " hidden"
// })