const rows = document.querySelector('table').querySelectorAll('tr');

document.getElementById("user_serch").addEventListener('input', function() {
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

        row.style.display = match ? '' : 'none';
    }
});