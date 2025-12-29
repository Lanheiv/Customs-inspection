if (localStorage.theme === 'dark' || (!localStorage.theme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dark');
}
if (localStorage.getItem("sidebar-swich") === "full") {
    document.getElementById("collapsed-version").classList.add("hidden");
    document.getElementById("full-version").classList.remove("hidden");
}

window.sidebarSwich = function() {
    const collapsedSvg = document.getElementById("collapsed-version");
    const fullSvg = document.getElementById("full-version");

    let sidebar = localStorage.getItem("sidebar-swich");
    const element = document.getElementById("sidebar-swich-div");

    if (sidebar === "collaps" || sidebar === null) { // -- collaps vai full
        localStorage.setItem("sidebar-swich", "full");

        collapsedSvg.classList.add("hidden");
        fullSvg.classList.remove("hidden");
    } else {
        localStorage.setItem("sidebar-swich", "collaps");

        collapsedSvg.classList.remove("hidden");
        fullSvg.classList.add("hidden");
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