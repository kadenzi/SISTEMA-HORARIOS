// script.js

// Função para filtrar alunos pelo status (calouro ou veterano)
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

// Função para atribuir professor a uma disciplina
document.getElementById("atribuir-prof").addEventListener("click", function() {
    const disciplina = document.getElementById("disciplina").value;
    const professor = document.getElementById("professor").value;
    alert(`Professor ${professor} foi atribuído à disciplina ${disciplina}.`);
});
