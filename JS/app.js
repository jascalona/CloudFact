const toggle = document.querySelector(".toggle")
const menuDashboard = document.querySelector(".menu-dashboard")
const iconoMenu = toggle.querySelector("i")
const enlacesMenu = document.querySelectorAll(".enlace")
const main = document.querySelector(".main");

toggle.addEventListener("click", () => {
    menuDashboard.classList.toggle("open");
    main.classList.toggle("min-main");

    if(iconoMenu.classList.contains("bx-menu")){
        iconoMenu.classList.replace("bx-menu", "bx-x")
    }else {
        iconoMenu.classList.replace("bx-x", "bx-menu")
    }
})

enlacesMenu.forEach(enlace => {
    enlace.addEventListener("click", () => {
        main.classList.toggle("min-main");
        menuDashboard.classList.add("open");
        iconoMenu.classList.replace("bx-menu", "bx-x");
    })
})