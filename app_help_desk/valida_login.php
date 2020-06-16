<?php

    session_start();

    $usuario_autenticado = false;
    $id_usuario = null;
    $perfil_usuario = null;
    $perfis = [1 => 'Administrativo', 2 => 'Usuário'];

    $usuarios_app = [
        ['id' => 1,'email' => 'admin@admin.com.br', 'senha' => '1234', 'id_perfil' => 1],
        ['id' => 2,'email' => 'usuario@usuario.com.br', 'senha' => '1234', 'id_perfil' => 1],
        ['id' => 3,'email' => 'jose@jose.com.br', 'senha' => '1234', 'id_perfil' => 2],
        ['id' => 4,'email' => 'maria@maria.com.br', 'senha' => '1234', 'id_perfil' => 2],
    ];

    foreach($usuarios_app as $user) {
        if ($user['email'] == $_POST['email'] && $_POST['senha'] == $user['senha']) {
            $usuario_autenticado = true;
            $id_usuario = $user['id'];
            $perfil_usuario = $user['id_perfil'];
        }
    }

    if ($usuario_autenticado) {
        $_SESSION['autenticado'] = $usuario_autenticado;
        $_SESSION['id_usuario'] = $id_usuario;
        $_SESSION['perfil_usuario'] = $perfil_usuario;
        header('Location: home.php');        
    }else {
        $_SESSION['autenticado'] = $usuario_autenticado;
        header("Location: ../htdocs/app_help_desk/index.php?login=erro");
    }

?>