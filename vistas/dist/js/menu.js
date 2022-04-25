/*
var menuItems = document.getElementById("menu-items");
menuItems.style.maxHeight = "0px";


$(document).on("click",".icono-menu", function(){
    if(menuItems.style.maxHeight == "0px"){
        menuItems.style.maxHeight = "295px";
    }else{
        menuItems.style.maxHeight = "0px";
    }
});

*/
window.addEventListener('scroll',function(){

    var header = document.querySelector('.nav');
    header.classList.toggle ('active-color', window.scrollY > 0 );

});

const openNav = document.querySelector('.open-btn');
const closeNav = document.querySelector('.close-btn');
const menu = document.querySelector('.nav-list');

const menuLeft = menu.getBoundingClientRect().left;
openNav.addEventListener("click", () => {
    if(menuLeft < 0){
        menu.classList.add("show");
    }
});

closeNav.addEventListener("click", () => {
    if(menuLeft < 0){
        menu.classList.remove("show");
    }
});
