function serch(input, tabel) {
    var rows = document.getElementById(tabel).querySelectorAll("tr");
    document.getElementById(input).addEventListener("input", function() {
        const value = this.value.toLowerCase();

        for (let i = 0; i < rows.length; i++) {
            let row = rows[i];
            let match = false;

            for (let t = 0; t < row.cells.length; t++) {
                let cell = row.cells[t];
                if (cell.textContent.toLowerCase().includes(value)) {
                    match = true;
                    break;
                }
            }

            row.style.display = match ? "" : "none";
        }
    });
}

serch("insp_serch", "insp_table");
serch("specal_serch", "specal_table");