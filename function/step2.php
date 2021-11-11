<?php

    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mysqli = new mysqli("localhost","root","root","simple",3306);

        $descricao1 = $_POST["descricao1"];
        $qtd1 = $_POST["qtd1"];
        $unitario1 = $_POST["unitario1"];

        $frete = $_POST["frete"];
        $envio = $_POST["envio"];

        $idUser = $_SESSION["id"];

        $sql = "INSERT user_produto (id_user,descricao,qtd,valor_unitario,frete,tipo_envio) 
        VALUE (" . $_SESSION["id_client"] . ",'$descricao1','$qtd1','$unitario1','$frete','$envio');";

        if(isset($_POST["descricao2"]) && $_POST["descricao2"] != ""){
            $descricao2 = $_POST["descricao2"];
            $qtd2 = $_POST["qtd2"];
            $unitario2 = $_POST["unitario2"];
            $sql .= "INSERT user_produto (id_user,descricao,qtd,valor_unitario,frete,tipo_envio) 
            VALUE ( " . $_SESSION["id_client"] . ",'$descricao2','$qtd2','$unitario2','$frete','$envio');";
        }
        if(isset($_POST["descricao3"]) && $_POST["descricao3"] != ""){
            $descricao3 = $_POST["descricao3"];
            $qtd3 = $_POST["qtd3"];
            $unitario3 = $_POST["unitario3"];
            $sql .= "INSERT user_produto (id_user,descricao,qtd,valor_unitario,frete,tipo_envio) 
            VALUE (" . $_SESSION["id_client"] . ",'$descricao3','$qtd3','$unitario3','$frete','$envio');";
        }

        if ($mysqli->multi_query($sql) === TRUE) {
            header("location: step3.php");
        } else {
            echo "<pre>";
            print_r($mysqli);
            exit();
            header("location: step2.php");
        }
        exit();
    }
?>