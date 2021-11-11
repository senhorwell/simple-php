<?php include 'headerlogin.php';?>
<?php include 'function/login.php';?>

<div id="login" class="container">
    <div class="login-card d-flex py-5 justify-content-center flex-column align-items-center">
        <div class="col-12 pb-4">
            <h3>Faça o seu login</h3>
        </div>
        <div class="col-12 d-flex px-3 justify-content-center">
            <form method="post" class="w-100" action="">
                <div class="col-12 form-group p-0">
                    <label class="m-0">E-mail</label class="m-0">
                    <input type="text" class="form-control" placeholder="Endereço de E-mail" name="email" value="<?php echo $email;?>">
                </div>
                <div class="col-12 form-group p-0">
                    <label class="m-0">Senha</label class="m-0">
                    <input type="password" class="form-control" placeholder="Senha" name="password" value="<?php echo $password;?>">
                </div>
                <div class="col-12 form-group p-0">
                    <button type="submit" class="form-control btn-colored" name="submit">Entrar</button>  
                </div>
                <div class="col-12 p-0">
                    <a href="cadastro.php">Cadastrar-se</a>
                </div>
                <div class="col-12 p-0">
                    <a href="/">Esqueceu a senha</a>
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