document.getElementById("salvar-preferencias").addEventListener("click", () => {
    const tema = document.getElementById("tema").value;
    alert(`Preferências salvas: Tema ${tema}`);
    document.body.className = tema === "escuro" ? "dark-mode" : "";
});
document.getElementById("conectar-canva").addEventListener("click", () => {
    alert("Conexão com Canva realizada com sucesso!");
});
document.getElementById("salvar-integracao").addEventListener("click", () => {
    const apiUrl = document.getElementById("api-externa").value;
    alert(`URL da API salva: ${apiUrl}`);
});
