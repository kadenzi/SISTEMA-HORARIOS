function adicionarAtualizacao(texto) {
    const listaAtualizacoes = document.getElementById("lista-atualizacoes");
    const novaAtualizacao = document.createElement("li");
    novaAtualizacao.textContent = texto;
    novaAtualizacao.classList.add("destaque");

    listaAtualizacoes.insertBefore(novaAtualizacao, listaAtualizacoes.firstChild);

    setTimeout(() => {
        novaAtualizacao.classList.remove("destaque");
    }, 2000);
}
adicionarAtualizacao("Novo curso adicionado: Ciência da Computação (02/11/2024)");
