document.getElementById("filtro-status").addEventListener("change", function() {
    const status = this.value;
    const rows = document.querySelectorAll(".gerenciar-cursos tbody tr");

    rows.forEach(row => {
        const alunoStatus = row.cells[3].textContent;
        if (status === "todos" || alunoStatus.toLowerCase() === status.toLowerCase()) {
            row.style.display = "";
        } else {
            row.style.display = "none";
        }
    });
});
document.getElementById("atribuir-prof").addEventListener("click", function() {
    const disciplina = document.getElementById("disciplina").value;
    const professor = document.getElementById("professor").value;
    alert(`Professor ${professor} foi atribuído à disciplina ${disciplina}.`);
});
