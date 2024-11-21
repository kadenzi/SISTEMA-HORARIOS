// arte.js

// Função para adicionar imagem ao preview
document.getElementById("adicionar-imagem").addEventListener("click", () => {
    const uploadImagem = document.getElementById("upload-imagem");
    const preview = document.getElementById("preview-imagens");

    if (uploadImagem.files.length > 0) {
        const imagem = document.createElement("img");
        imagem.src = URL.createObjectURL(uploadImagem.files[0]);
        imagem.style.maxWidth = "150px";
        imagem.style.margin = "10px";
        preview.appendChild(imagem);
    } else {
        alert("Por favor, selecione uma imagem para adicionar.");
    }
});

// Função para salvar notícia
document.getElementById("form-noticias").addEventListener("submit", (event) => {
    event.preventDefault();

    const titulo = document.getElementById("titulo-noticia").value;
    const conteudo = document.getElementById("conteudo-noticia").value;
    const listaNoticias = document.getElementById("lista-noticias");

    if (titulo && conteudo) {
        const noticia = document.createElement("div");
        noticia.innerHTML = `<h4>${titulo}</h4><p>${conteudo}</p>`;
        listaNoticias.appendChild(noticia);
        alert("Notícia salva com sucesso!");
    } else {
        alert("Preencha todos os campos para salvar a notícia.");
    }
});

// Função para salvar configurações de layout das TVs
document.getElementById("salvar-configuracoes").addEventListener("click", () => {
    const layout = document.getElementById("layout-tvs").value;
    alert(`Configurações salvas: Layout selecionado - ${layout}`);
});
