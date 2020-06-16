<?php 

    session_start();

    if (!isset($_SESSION['auteticado']) && $_SESSION['autenticado'] == false) {
        header('Location: index.php?login=erro2');
    }

?>