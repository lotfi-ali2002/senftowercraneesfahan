let menu = document.querySelector(".menu");
let icon = document.querySelector(".container-menu-icon");

icon.addEventListener("click",function() {
    if (!this.classList.contains("fa-bars")) {
        this.classList = "fas fa-bars container-menu-icon";
        menu.style.right = "-185px";
    } else {
        this.classList = "fas fa-times container-menu-icon";
        menu.style.right = "0";
    }

})
/*
slider
 */
var slides=document.getElementsByClassName("slide");
var prev=document.querySelector(".prev");
var next=document.querySelector(".next");
var n=0;
function displayNone(){
    for(let i=0;i<slides.length;i++){
        slides[i].getElementsByClassName.display='none';
    }
}
function noactive() {
    for(let i=0;i<slides.length;i++){
        slides[i].classList.remove('active');
    }
}
next.addEventListener("click",function(){
    n++;
    if(n>slides.length-1){
        n=0;
    }
    displayNone();
    noactive();
    slides[n].getElementsByClassName.display='block';
    slides[n].classList.add('active');
});
prev.addEventListener("click",function(){
    n--;
    if(n<0){
        n=slides.length-1;
    }
    displayNone();
    noactive();
    slides[n].getElementsByClassName.display='block';
    slides[n].classList.add('active');
});
setInterval(function(){
    n++;
    if(n>slides.length-1){
        n=0;
    }
    displayNone();
    noactive();
    slides[n].getElementsByClassName.display='block';
    slides[n].classList.add('active');
},4000);
