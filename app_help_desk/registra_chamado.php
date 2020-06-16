<?php 
    session_start();

    $arquivo = fopen('chamados.hd', "a");

    $titulo = str_replace("#", "-", $_POST['titulo']);
    $descricao = str_replace("#", "-", $_POST['descricao']);
    $categoria = str_replace("#", "-", $_POST['categoria']);

    $texto = $_SESSION['id_usuario'] . "#" . $titulo . "#" . $categoria . "#" . $descricao . PHP_EOL;
 
    fwrite($arquivo, $texto);

    fclose($arquivo);

    header('Location: ../htdocs/app_help_desk/abrir_chamado.php');

?>