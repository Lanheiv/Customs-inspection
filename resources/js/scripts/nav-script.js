window.sidebarSwich = function sidebarSwich() {
    let sidebar = localStorage.getItem("sidebar-swich");
    const element = document.getElementById("sidebar-swich-div");

    if (sidebar === "collaps" || sidebar === null) { // -- collaps vai full
        localStorage.setItem("sidebar-swich", "full");

    } else {
        localStorage.setItem("sidebar-swich", "collaps");

    }
}
window.sidebarSwich = function modeSwich() {
    let mode = localStorage.getItem("mode-swich");
    const element = document.getElementById("mode-swich-div");

    if (mode === "light" || mode === null) { // -- light vai dark
        localStorage.setItem("mode-swich", "dark");

    } else {
        localStorage.setItem("mode-swich", "light");
        
    }
}