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
    <title>Login - Estácio</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="container">
        <div class="left">
        </div>
        <div class="right">
            <div class="welcome-message">Olá! Faça seu login.</div>
            <?php if ($_POST AND mysqli_num_rows($result) == NULL) { ?>
            <div class="info-message"><?php echo "Usuário ou Senha não correspondem" . mysqli_error($conn); ?></div>
            <?php }?>

            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" required>
                </div>
                <div class="checkbox">
                    <input type="checkbox" id="termos" required>
                    <label for="termos">Li e aceito os <a href="../pages/termos.html">termos</a></label>
                </div>

                <button type="submit" class="btn">Entrar</button>                
            </form>
        </div>
    </div>
</body>
</html>
