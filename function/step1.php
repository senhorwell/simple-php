<?php
    // define variables and set to empty values
    $nomeErr = $cpfErr = $enderecoErr = $numeroErr = $bairroErr = $cepErr = $cidadeErr = $estadoErr = $telefoneErr = $contatoErr = $emailErr = $vencimentoErr = $razaosocialErr = $cnpjErr = $nomefantasiaErr = "";
    $nome = $cpf = $endereco = $numero = $bairro = $cep = $cidade = $estado = $telefone = $contato = $email = $vencimento = $razaosocial = $cnpj = $nomefantasia = "";
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mysqli = new mysqli("localhost","root","root","simple",3306);

        $endereco = $_POST["endereco"];
        $numero = $_POST["numero"];
        $bairro = $_POST["bairro"];
        $cep = $_POST["cep"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $telefone = $_POST["telefone"];
        $contato = $_POST["contato"];
        $email = $_POST["email"];
        $vencimento = $_POST["vencimento"];

        $_SESSION["email_client"] = $email;

        if(isset($_POST["cpf"])){
            $nome = $_POST["nome"];
            $cpf = $_POST["cpf"];
            $sql = "INSERT user (nome,cpf,endereco,numero,bairro,cep,cidade,estado,telefone,contato,email_faturamento,vencimento_fatura) 
            VALUE ('$nome','$cpf','$endereco','$numero','$bairro','$cep','$cidade','$estado','$telefone','$contato','$email','$vencimento')";

        }else{
            $razaosocial = $_POST["razaosocial"];
            $cnpj = $_POST["cnpj"];
            $nomefantasia = $_POST["nomefantasia"];
            $sql = "INSERT user (razaosocial,cnpj,nomefantasia,endereco,numero,bairro,cep,cidade,estado,telefone,contato,email_faturamento,vencimento_fatura) 
            VALUE ('$razaosocial','$cnpj','$nomefantasia','$endereco','$numero','$bairro','$cep','$cidade','$estado','$telefone','$contato','$email','$vencimento')";
        }

        if ($mysqli->query($sql) === TRUE) {
            $_SESSION["id_client"] = $mysqli->insert_id;
            header("location: step2.php");
        } else {
            echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js'></script>";
            echo "<script>$(function () { $('#error').removeClass('d-none') })</script>";
        }
    }
?>