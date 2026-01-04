const collapsedSvg = document.getElementById("collapsed-version");
const fullSvg = document.getElementById("full-version");
const asideCollapsed = document.getElementById("aside-collapsed");
const asideFull = document.getElementById("aside-full");
const navAndSlot = document.getElementById("big-nav");


if (localStorage.theme === 'dark' || (!localStorage.theme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dark');
}
if (localStorage.getItem("sidebar-swich") === "full") {
    collapsedSvg.classList.add("hidden");
    fullSvg.classList.remove("hidden");

    asideCollapsed.classList.add("hidden");
    asideFull.classList.remove("hidden");

    navAndSlot.classList.add("ml-64");
    navAndSlot.classList.remove("ml-16");
}

window.sidebarSwich = function() {
    let sidebar = localStorage.getItem("sidebar-swich");

    if (sidebar === "collaps" || sidebar === null) { // -- collaps vai full
        localStorage.setItem("sidebar-swich", "full");

        collapsedSvg.classList.add("hidden");
        fullSvg.classList.remove("hidden");

        asideCollapsed.classList.add("hidden");
        asideFull.classList.remove("hidden");

        navAndSlot.classList.add("ml-64");
        navAndSlot.classList.remove("ml-16");
    } else {
        localStorage.setItem("sidebar-swich", "collaps");

        collapsedSvg.classList.remove("hidden");
        fullSvg.classList.add("hidden");

        asideCollapsed.classList.remove("hidden");
        asideFull.classList.add("hidden");

        navAndSlot.classList.add("ml-16");
        navAndSlot.classList.remove("ml-64");
    }
}
window.modeSwich = function() {
    let mode = localStorage.getItem("theme");
    
    if (mode === "light" || mode === null) { // -- light vai dark
        localStorage.setItem("theme", "dark");
        document.documentElement.classList.add("dark");
    } else {
        localStorage.setItem("theme", "light");
        document.documentElement.classList.remove("dark");
    }
}