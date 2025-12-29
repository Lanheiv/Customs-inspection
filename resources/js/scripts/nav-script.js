if (localStorage.theme === 'dark' || (!localStorage.theme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dark');
}

window.sidebarSwich = function() {
    let sidebar = localStorage.getItem("sidebar-swich");
    const element = document.getElementById("sidebar-swich-div");

    if (sidebar === "collaps" || sidebar === null) { // -- collaps vai full
        localStorage.setItem("sidebar-swich", "full");

    } else {
        localStorage.setItem("sidebar-swich", "collaps");

    }
}
window.modeSwich = function() {
    let mode = localStorage.getItem("theme");
    const element = document.getElementById("mode-swich-div");
    
    if (mode === "light" || mode === null) { // -- light vai dark
        localStorage.setItem("theme", "dark");
        document.documentElement.classList.add("dark");
    } else {
        localStorage.setItem("theme", "light");
        document.documentElement.classList.remove("dark");
    }
}