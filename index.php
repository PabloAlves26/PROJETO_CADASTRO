<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Cadastro</title>
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>
    <script>
        alert ("Preencha cos Campos Com Seus Dados.");
    </script>
    <fieldset class="formulario">
        <legend><h4>Cadastro Usuário</h4></legend>
    <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>

    <form method="POST" action="processa.php">
        <fieldset>
        <label><strong>Nome:</strong></label>
        <input type = "text" name = "nome" placeholdet = "Digite oseu nome" required><br><br>

        <label><strong>E-mail:</strong> </label>
        <input type = "email" name = "email" placeholdet = "Digite oseu email" required><br><br>
        </fieldset>

        <input type ="submit" class = "enviar" value = "Cadastrar">
    </form>
    </fieldiset>
</body>
</html>