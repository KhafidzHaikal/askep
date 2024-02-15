$(document).ready(function () {
    $('#myTable').DataTable();
});

$(document).ready(function () {
    $('#kelompok').select2({
        placeholder: '---Pilih Kelompok---',
    });
});

$(document).ready(function () {
    $('#noc').select2();
});

$(document).ready(function () {
    $('#diagnosa').select2();
});

$(document).ready(function () {
    $('#petugas').select2();
});

const togglePassword = document.querySelector("#togglePassword");
const password = document.querySelector("#password");

togglePassword.addEventListener("click", function () {
    // toggle the type attribute
    const type = password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);

    // toggle the icon
    this.classList.toggle("bi-eye");
});


$(document).ready(function () {
    $('.ckeditor').ckeditor();
});



