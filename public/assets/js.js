var nav = document.querySelector(".nav ul");
var menu = document.querySelector(".menu");
var items = document.querySelectorAll(".nav ul li a");

menu.addEventListener('click',function(){
    nav.classList.toggle('show');
})


