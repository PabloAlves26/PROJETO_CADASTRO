<?php
    session_start();
    include_once("conexao.php");

    $nome = filter_input (INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input (INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    //echo "Nome: $nome <br>";
    //echo "E-mail: $email <br>";

    $result_usuario = "INSERT INTO usuarios2 (nome, email, created) VALUES('$nome','$email', NOW())";
    $resultado_usuario = mysqli_query($conn, $result_usuario);

    if(mysqli_insert_id($conn)){
        $_SESSION['msg'] = "<p style='color: green;'>Úsuario Cadastrado com Sucesso!</p>";
        header("Location: index.php");
    }
    else {
        $_SESSION['msg'] = "<p style='color: red;'><bg>Úsuario não foi  Cadastrado com Sucesso!</bg></p>";
        header("Location: index.php");
    }
?>

