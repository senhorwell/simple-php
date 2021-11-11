<?php
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $_SESSION["email_get"] = $_GET["email"];
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = 0;
        $email = $_SESSION["email_get"];

        $mysqli = new mysqli("localhost","root","root","simple",3306);
        $res = $mysqli->query("SELECT * FROM user where `email_faturamento` like '$email'");
        $itens = $res->fetch_all(MYSQLI_ASSOC);
        if(!empty($itens)){
            $id = $itens[0]["id"];
            $mysqli->query("UPDATE user_produto SET `status` = 'aceito' WHERE `id_user` = " . $id);
        }
        header("location: step6.php");
    }

?>