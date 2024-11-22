
<?php include('../php/connection.php'); 
if($_POST){
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];


    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    if (mysqli_query($conn, $sql)) {
        //echo "Usuário criado com sucesso!";
        header("Location: login.php");
    } else {
        echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta - Estácio</title>
    <link rel="stylesheet" href="../css/criarconta.css">
</head>
<body>
    <div class="container">
        <div class="left">
        </div>
        <div class="right">
            <div class="welcome-message">Bem-vindo! Crie sua conta.</div>
            <form action="criarconta.php" method="post">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" required>
                </div>
                <button type="submit" class="btn">Criar Conta</button>
            </form>
        </div>
    </div>
</body>
</html>