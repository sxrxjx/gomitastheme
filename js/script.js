let botonhamburguesa = document.querySelector(".menu-responsive");
let nav = document.querySelector(".menu-principal");

botonhamburguesa.addEventListener("click",()=>{
    nav.classList.toggle("active");
});