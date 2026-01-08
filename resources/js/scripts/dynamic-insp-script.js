const div = document.getElementById("reson");
const select = document.getElementsByName("status")[0];

select.addEventListener("change", function() {
    if (select.value === "reject") {
        div.classList.remove("hidden");
    } else {
        div.classList.add("hidden");
    }
});

if(select.value === "reject") {
    div.classList.remove("hidden");
}