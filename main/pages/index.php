<?php include('../php/connection.php'); 
if($_POST){
    $email=$_POST['email'];
    $senha=$_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' ";
    $result = mysqli_query($conn, $sql);
    if ($result && mysqli_num_rows($result) == 1) {
        $usuario = mysqli_fetch_assoc($result);
        header("Location: index.php");
    } 
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início - Sistema Acadêmico</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <nav class="menu-lateral">
        <ul class="menu-lateral">
            <li><a href="index.php">Início</a></li><br>
            <li><a href="academico.html">Acadêmico</a></li><br>
            <li><a href="salas.html">Salas</a></li><br>
            <li><a href="arte.html">Arte</a></li><br>
            <li><a href="historico.html">Histórico</a></li><br>
            <li><a href="configuracoes.html">Configurações</a></li><br>
        </ul>
        
    </nav>
        
    <div class="inicio-container">
        <section id="inicio" class="dashboard">
            <h2>Dashboard</h2>
            <div class="dashboard-cards">
                <div class="card">Cursos Ativos: <span id="cursos-ativos">12</span></div>
                <div class="card">Aulas Agendadas: <span id="aulas-agendadas">8</span></div>
                <div class="card">Notificações Pendentes: <span id="notificacoes-pendentes">3</span></div>
                <div class="card">Atualizações Recentes: <span id="atualizacoes-recentes">5</span></div>
            </div>
        </section>

        <section class="atualizacoes">
            <h2>Atualizações Recentes</h2>
            <ul id="lista-atualizacoes">
                <li>Alteração de horário - Curso de Matemática (02/11/2024)</li>
                <li>Reserva de sala confirmada para Física (01/11/2024)</li>
                <li>Nova disciplina adicionada: Biologia Avançada (30/10/2024)</li>
            </ul>
        </section>

        <section class="notificacoes">
            <h2>Notificações</h2>
            <ul id="lista-notificacoes">
                <li>Reunião do conselho - 05/11/2024</li>
                <li>Prazo de reserva para eventos em 10/11/2024</li>
                <li>Solicitação de alteração de aula para professor (04/11/2024)</li>
            </ul>
        </section>
        <div class="perfil-container">
            Meu Perfil <br><br><br><br><br><br><br>
            Nome da Pessoa <br><br><br>

            <a href="../pages/login.php" class="log-out">Sair</a>
           
        </div>
    </div>

    <script src="../js/"></script>
</body>
</html>
