let menu = document.querySelector("#menu-btn");
let navbar = document.querySelector(".header .navbar");

const eyeicons = document.querySelectorAll(".show-hide")
eyeicons.forEach((eyeIcon) => {
    eyeIcon.addEventListener("click", () => {
        const pInput = eyeIcon.parentElement.querySelector("input");
        if (pInput.type === "password") {
            eyeIcon.classList.replace("bi-eye-slash", "bi-eye");
            return (pInput.type = "text");
        }
        eyeIcon.classList.replace("bi-eye", "bi-eye-slash");
        pInput.type = "password";
    });
});

menu.onclick = () => {
    menu.classList.toggle("fa-times");
    navbar.classList.toggle("active");
};

window.onscroll = () => {
    menu.classList.remove("fa-times");
    navbar.classList.remove("active");
};

const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', () => {
    myInput.focus()
})