document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.getElementById("menu-toggle");
    const sidebar = document.getElementById("sidebar");

    menuToggle.addEventListener("click", function () {
        sidebar.classList.toggle("show"); // Muestra u oculta el sidebar
    });

    // Cerrar el menú si se hace clic fuera de él
    document.addEventListener("click", function (event) {
        if (!menuToggle.contains(event.target) && !sidebar.contains(event.target)) {
            sidebar.classList.remove("show");
        }
    });
});
