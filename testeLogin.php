<?php

    //  print_r($_REQUEST);

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password']))
    {
        //Acessa
        include_once('../Cadastro/config.php');
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        // print_r('Email: ' . $email);
        // print_r('Senha: ' . $password);

        $sql = "SELECT * FROM users WHERE email = '$email' and password = '$password'";

        $result = $conexao->query($sql);

        // print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            header('Location: Login.php');
        }
        else
        {
            header('Location: ../Home/index.php');
        }

    }
    else
    {
        //Não acessa
        header('Location: login.php');
    }

?>