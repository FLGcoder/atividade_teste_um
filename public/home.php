<?php

include("../infra/db/connect.php")

if(!isset($_SESSION["usuario"])){
    header("Location: ../index.php");
    exit();
}


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <h2>Bem Vindo!</h2>
    <p> Usuário logado:
        <?php echo $_SESSION["usuario"];?>
    </p>
    
    <h2>Cadastrar Novo Usuário</h2>

    <label for="usuario">Usuario:</label>
        <input type="text" name="usuario">
        <br>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha">
        <br>
        <br>


<a href="logout.php">Sair</a>
    
</body>
</html>