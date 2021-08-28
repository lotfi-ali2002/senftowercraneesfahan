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
