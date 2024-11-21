// script.js

// Função para adicionar uma nova atualização com destaque temporário
function adicionarAtualizacao(texto) {
    const listaAtualizacoes = document.getElementById("lista-atualizacoes");
    const novaAtualizacao = document.createElement("li");
    novaAtualizacao.textContent = texto;
    novaAtualizacao.classList.add("destaque");

    listaAtualizacoes.insertBefore(novaAtualizacao, listaAtualizacoes.firstChild);

    // Remove o destaque após 2 segundos
    setTimeout(() => {
        novaAtualizacao.classList.remove("destaque");
    }, 2000);
}

// Exemplo de como adicionar uma atualização
adicionarAtualizacao("Novo curso adicionado: Ciência da Computação (02/11/2024)");
