<?php
    // define variables and set to empty values
    $emailErr = $passwordErr = "";
    $email = $password = "";
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mysqli = new mysqli("localhost","root","root","simple",3306);

        $franquia = $_POST["franquia"];
        $taxaativacao = $_POST["taxaativacao"];
        $prazoativacao = $_POST["prazoativacao"];
        $cancelamento = $_POST["cancelamento"];
        $substituicao = $_POST["substituicao"];
        $valorsms = $_POST["valorsms"];

        $sql = "INSERT user_informacoes (franquia,taxa_ativacao,prazo_ativacao,taxa_cancelamento,substituicao_linha,valor_sms,id_user) 
        VALUE ('$franquia','$taxaativacao','$prazoativacao','$cancelamento','$substituicao','$valorsms',1);";

        if ($mysqli->query($sql) === TRUE) {
            header("location: step4.php");
        } else {
            header("location: step3.php");
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