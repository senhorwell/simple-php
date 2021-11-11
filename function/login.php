<?php

    if(session_status() == PHP_SESSION_ACTIVE){
        session_destroy();
    }
    session_start();
    // define variables and set to empty values
    $emailErr = $passwordErr = "";
    $email = $password = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["password"])) {
            $nameErr = "Digite a senha";
        }
        if (empty($_POST["email"])) {
            $emailErr = "Digite o email";
        } else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Formato de email invalido";
            }
        }
        
        $password = $_POST["password"];
        $email = $_POST["email"];
        
        $_SESSION["email"] = $email;
        
        $mysqli = new mysqli("localhost","root","root","simple",3306);
        $res = $mysqli->query("SELECT * FROM vendedor where `senha` like MD5('$password') and `email` like '$email'");
        $itens = $res->fetch_all(MYSQLI_ASSOC);

        if(empty($itens)){
            header("location: index.php");
        }else{
            $_SESSION["id"] = $itens[0]["id"];
            $_SESSION["email"] = $itens[0]["email"];
            $_SESSION["senha"] = $itens[0]["senha"];
            header("location: step1.php");
        }
        exit();
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>