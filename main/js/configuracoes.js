// configuracoes.js

// Função para salvar preferências do sistema
document.getElementById("salvar-preferencias").addEventListener("click", () => {
    const tema = document.getElementById("tema").value;
    alert(`Preferências salvas: Tema ${tema}`);
    document.body.className = tema === "escuro" ? "dark-mode" : "";
});

// Função para conectar com o Canva
document.getElementById("conectar-canva").addEventListener("click", () => {
    alert("Conexão com Canva realizada com sucesso!");
    // Aqui você pode adicionar código para integrar com a API do Canva.
});

// Função para salvar URL da API externa
document.getElementById("salvar-integracao").addEventListener("click", () => {
    const apiUrl = document.getElementById("api-externa").value;
    alert(`URL da API salva: ${apiUrl}`);
});

// Função para criar backup
document.getElementById("criar-backup").addEventListener("click", () => {
    document.getElementById("status-backup").textContent = "Backup criado com sucesso!";
});

// Função para restaurar backup
document.getElementById("restaurar-backup").addEventListener("click", () => {
    document.getElementById("status-backup").textContent = "Backup restaurado com sucesso!";
});
