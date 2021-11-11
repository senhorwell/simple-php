
<?php include 'headerlogin.php';?>
<?php include 'function/cadastro.php';?>

<div id="login" class="container">
    <div class="login-card d-flex py-5 justify-content-center flex-column align-items-center">
        <div class="col-12 pb-4">
            <h3>Cadastrar-se</h3>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <form method="post" action="cadastro.php">
                <div class="col-12 form-group p-0">
                    <label>Nome</label>
                    <input type="text" class="form-control" placeholder="Fulano" name="nome" value="<?php echo $nome;?>">
                </div>
                <div class="col-12 form-group p-0">
                    <label>Telefone</label>
                    <input type="text" class="form-control" placeholder="+55 () XXXX-XXXX" name="telefone" value="<?php echo $telefone;?>">
                </div>
                <div class="col-12 form-group p-0">
                    <label>E-mail</label>
                    <input type="text" class="form-control" placeholder="Endereço de E-mail" name="email" value="<?php echo $email;?>">
                </div>
                <div class="col-12 form-group p-0">
                    <label>Senha</label>
                    <input type="password" class="form-control" placeholder="Senha" name="password" value="<?php echo $password;?>">
                </div>
                <div class="col-12 form-group p-0">
                    <button type="submit" class="form-control btn-colored" name="submit">Cadastrar</button>  
                </div>
                <div class="col-12 pt-4 d-flex justify-content-center">
                    <div class="col-8">
                        <img class="w-100" src="/public/img/svg/logo.svg" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php';?>