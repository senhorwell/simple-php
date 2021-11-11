<?php
    // define variables and set to empty values
    $emailErr = $passwordErr = $nomeErr = $telefoneErr = "";
    $email = $password = $nome = $telefone = "";
    session_start();
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

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $password = $_POST["password"];

        $mysqli = new mysqli("localhost","root","root","simple",3306);

        $sql = "INSERT vendedor (nome,telefone,email,senha) 
        VALUE ('$nome','$telefone','$email',MD5('$password'));";
        $res = $mysqli->query($sql);

        if ($res === TRUE) {
            header("location: login.php");
        } else {
            header("location: cadastro.php");
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