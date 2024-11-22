document.getElementById("atualizar-permissoes").addEventListener("click", () => {
    const nivelAcesso = document.getElementById("nivel-acesso").value;
    alert(`Permissões atualizadas para o nível de acesso: ${nivelAcesso}`);
});
function adicionarAlteracao(data, descricao, usuario) {
    const linhaDoTempo = document.getElementById("linha-do-tempo");
    const alteracao = document.createElement("div");
    alteracao.classList.add("alteracao");
    alteracao.innerHTML = `
        <span class="data">${data}</span>
        <p>${descricao} por <strong>${usuario}</strong></p>
    `;
    linhaDoTempo.insertBefore(alteracao, linhaDoTempo.firstChild);
}
adicionarAlteracao("03/11/2024", "Novo curso adicionado: Ciência da Computação", "Admin");
