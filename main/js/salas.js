// salas.js

// Função para lidar com o envio do formulário de reserva
document.getElementById("form-reserva").addEventListener("submit", function(event) {
    event.preventDefault();

    const sala = document.getElementById("sala").value;
    const data = document.getElementById("data").value;
    const horario = document.getElementById("horario").value;

    if (sala && data && horario) {
        alert(`Reserva confirmada para ${sala} em ${data} às ${horario}.`);
        // Aqui você pode adicionar código para salvar a reserva em um backend ou API.
    } else {
        alert("Por favor, preencha todos os campos para fazer a reserva.");
    }
});
