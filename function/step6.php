<?php
    // define variables and set to empty values
    $emailErr = $passwordErr = "";
    $email = $password = "";
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
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>