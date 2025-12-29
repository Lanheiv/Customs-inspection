const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector("#password");

togglePassword.addEventListener('click', function (e) {
    if(password.getAttribute("type") === "password") {
        password.setAttribute("type", "text");

        document.getElementById("element_1").classList.add("hidden");
        document.getElementById("element_2").classList.remove("hidden");
        document.getElementById("element_3").classList.remove("hidden");
    } else {
        password.setAttribute("type", "password");

        document.getElementById("element_1").classList.remove("hidden");
        document.getElementById("element_2").classList.add("hidden");
        document.getElementById("element_3").classList.add("hidden");
    }
});