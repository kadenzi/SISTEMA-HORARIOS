<?php include('../php/connection.php'); 
if($_POST){

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perdeu sua senha? - Estácio</title>
    <link rel="stylesheet" href="../css/redefinir-senha.css">
</head>
<body>
    <div class="container">
        <div class="left">
        </div>
        <div class="right">
            <div class="welcome-message">Perdeu sua senha? Redefina agora mesmo.</div>
            <form>
                <div class="form-group">
                    <label for="codigo">Código de Redefinição</label>
                    <input type="text" id="codigo" name="codigo" required>
                </div>
                <div class="info-message">
                    Mantenha sua senha segura, utilize uma combinação de letras maiúsculas e minúsculas, números e caracteres especiais. 
                    Evite usar informações pessoais facilmente identificáveis.
                </div>
                <div class="form-group">
                    <label for="nova-senha">Nova Senha</label>
                    <input type="password" id="nova-senha" name="nova-senha" required>
                </div>
                <div class="form-group">
                    <label for="confirmar-senha">Confirmar Senha</label>
                    <input type="password" id="confirmar-senha" name="confirmar-senha" required>
                </div>
                <button type="submit" class="btn">Pronto</button>
            </form>
        </div>
    </div>
</body>
</html>
