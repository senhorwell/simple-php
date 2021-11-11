
<?php include 'header.php';?>
<?php include 'function/step1.php';?>

<div class="container bb pt-md-5 pt-2 px-0 mb-2 d-flex flex-column">
    <div class="col-12 p-0 d-flex d-md-none justify-content-end">
        <div class="logo d-md-none d-flex col-5 pr-3 py-0 float-right">
            <img class="w-100" src="/public/img/svg/logo.svg" />
        </div>
    </div>
    <div class="col-12 p-md-0">
        <div class="title float-left">
            <h3 class="p-md-0">Dados cadastrais</h3>
        </div>
        <div class="logo d-none d-md-flex col-md-1 p-0 float-right">
            <img class="w-100" src="/public/img/svg/logo.svg" />
        </div>
    </div>
</div>
<div class="container p-0">
    
    <div class="alert alert-danger d-none" id="error" role="alert">
        Algo deu errado!
    </div>
    <div class="col-12 p-0">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="fisica-tab" data-toggle="tab" href="#fisica" role="tab" aria-controls="fisica" aria-selected="true">Pessoa Física</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="juridica-tab" data-toggle="tab" href="#juridica" role="tab" aria-controls="juridica" aria-selected="false">Pessoa Juridica</a>
        </li>
        </ul>
        <div class="tab-content col-12 px-0 py-2" id="formularios">
            <div class="tab-pane fade show active" id="fisica" role="tabpanel" aria-labelledby="fisica-tab">
                <form method="post" action="step1.php">
                    <div class="col-12 px-0 py-2 d-flex flex-wrap">
                        <div class="col-12 col-md-6 pl-md-0">
                            <label>Nome</label>
                            <input type="text" class="form-control" placeholder="Fulano da Silva" name="nome" value="<?php echo $nome;?>">
                        </div>
                        <div class="col-12 col-md-6 pr-md-0">
                            <label>CPF</label>
                            <input type="text" class="form-control" placeholder="XXX.XXX.XXX-XX" name="cpf" value="<?php echo $cpf;?>">
                        </div>
                    </div>
                    <div class="col-12 px-0 py-2 d-flex flex-wrap">
                        <div class="col-12 col-md-4 pl-md-0">
                            <label>Endereço</label>
                            <input type="text" class="form-control" placeholder="R. XXXXXXXXXXX" name="endereco" value="<?php echo $email;?>">
                        </div>
                        <div class="col-12 col-md-2">
                            <label>Número</label>
                            <input type="text" class="form-control" placeholder="0000" name="numero" value="<?php echo $numero;?>">
                        </div>
                        <div class="col-12 col-md-3">
                            <label>Bairro</label>
                            <input type="text" class="form-control" placeholder="Centro" name="bairro" value="<?php echo $bairro;?>">
                        </div>
                        <div class="col-12 col-md-3 pr-md-0">
                            <label>CEP</label>
                            <input type="text" class="form-control" placeholder="XXXXX-XXX" name="cep" value="<?php echo $cep;?>">
                        </div>
                    </div>
                    <div class="col-12 px-0 py-2 d-flex flex-wrap">
                        <div class="col-12 col-md-4 pl-md-0">
                            <label>Cidade</label>
                            <input type="text" class="form-control" placeholder="Londrina" name="cidade" value="<?php echo $cidade;?>">
                        </div>
                        <div class="col-12 col-md-2">
                            <label>Estado</label>
                            <select id="estado" class="form-control" name="estado">
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                                <option value="EX">Estrangeiro</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-3">
                            <label>Telefone</label>
                            <input type="text" class="form-control" placeholder="+55 () XXXX-XXXX" name="telefone" value="<?php echo $telefone;?>">
                        </div>
                        <div class="col-12 col-md-3 pr-md-0">
                            <label>Contato</label>
                            <input type="text" class="form-control" placeholder="Fulano" name="contato" value="<?php echo $contato;?>">
                        </div>
                    </div>
                    <div class="col-12 px-md-0 pt-4 d-flex">
                        <h4 class="font-weight-bold">Informações de faturamento</h4>
                    </div>
                    <div class="col-12 px-0 py-2 d-flex flex-wrap">
                        <div class="col-12 col-md-3 pl-md-0">
                            <label>E-mail do faturamento</label>
                            <input type="text" class="form-control" placeholder="Endereço de e-mail" name="email" value="<?php echo $email;?>">
                        </div>
                        <div class="col-12 col-md-3 pr-md-0">
                            <label>Vencimento da fatura</label>
                            <input type="date" class="form-control" name="vencimento" value="<?php echo $vencimento;?>">
                        </div>
                    </div>
                    <div class="col-12 px-0 pt-2 pb-5 mb-5 d-flex flex-wrap justify-content-center">
                        <div class="col-12 col-md-3 pb-5 px-md-0">
                            <button type="submit" class="form-control btn-colored">Confirmar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="juridica" role="tabpanel" aria-labelledby="juridica-tab">
                <form method="post" action="step1.php">
                    <div class="col-12 px-0 py-2 d-flex flex-wrap">
                        <div class="col-12 col-md-3 pl-md-0">
                            <label>Razão Social</label>
                            <input type="text" class="form-control" placeholder="Exemplo Ficticio Comércio de Bebidas EPP" name="razaosocial" value="<?php echo $razaosocial;?>">
                        </div>
                        <div class="col-12 col-md-3">
                            <label>CNPJ</label>
                            <input type="text" class="form-control" placeholder="XX.XXX.XXX/XXXX-XX" name="cnpj" value="<?php echo $cnpj;?>">
                        </div>
                        <div class="col-12 col-md-6 pr-md-0">
                            <label>Nome Fantasia</label>
                            <input type="text" class="form-control" placeholder="Empresa" name="nomefantasia" value="<?php echo $nomefantasia;?>">
                        </div>
                    </div>
                    <div class="col-12 px-0 py-2 d-flex flex-wrap">
                        <div class="col-12 col-md-4 pl-md-0">
                            <label>Endereço</label>
                            <input type="text" class="form-control" placeholder="R. XXXXXXXXXXX" name="endereco" value="<?php echo $email;?>">
                        </div>
                        <div class="col-12 col-md-2">
                            <label>Número</label>
                            <input type="text" class="form-control" placeholder="0000" name="numero" value="<?php echo $numero;?>">
                        </div>
                        <div class="col-12 col-md-3">
                            <label>Bairro</label>
                            <input type="text" class="form-control" placeholder="Centro" name="bairro" value="<?php echo $bairro;?>">
                        </div>
                        <div class="col-12 col-md-3 pr-md-0">
                            <label>CEP</label>
                            <input type="text" class="form-control" placeholder="XXXXX-XXX" name="cep" value="<?php echo $cep;?>">
                        </div>
                    </div>
                    <div class="col-12 px-0 py-2 d-flex flex-wrap">
                        <div class="col-12 col-md-4 pl-md-0">
                            <label>Cidade</label>
                            <input type="text" class="form-control" placeholder="Londrina" name="cidade" value="<?php echo $cidade;?>">
                        </div>
                        <div class="col-12 col-md-2">
                            <label>Estado</label>
                            <select id="estado" class="form-control" name="estado">
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                                <option value="EX">Estrangeiro</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-3">
                            <label>Telefone</label>
                            <input type="text" class="form-control" placeholder="+55 () XXXX-XXXX" name="telefone" value="<?php echo $telefone;?>">
                        </div>
                        <div class="col-12 col-md-3 pr-md-0">
                            <label>Contato</label>
                            <input type="text" class="form-control" placeholder="Fulano" name="contato" value="<?php echo $contato;?>">
                        </div>
                    </div>
                    <div class="col-12 px-md-0 pt-4 d-flex">
                        <h4 class="font-weight-bold">Informações de faturamento</h4>
                    </div>
                    <div class="col-12 px-0 py-2 d-flex flex-wrap">
                        <div class="col-12 col-md-3 pl-md-0">
                            <label>E-mail do faturamento</label>
                            <input type="text" class="form-control" placeholder="Endereço de e-mail" name="email" value="<?php echo $email;?>">
                        </div>
                        <div class="col-12 col-md-3 pr-md-0">
                            <label>Vencimento da fatura</label>
                            <input type="date" class="form-control" name="vencimento" value="<?php echo $vencimento;?>">
                        </div>
                    </div>
                    <div class="col-12 px-0 pt-2 pb-5 mb-5 d-flex flex-wrap justify-content-center">
                        <div class="col-12 col-md-3 px-0 pb-5">
                            <button type="submit" class="form-control btn-colored">Confirmar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container fixed-bottom">
    <div class="col-12 d-flex justify-content-center pb-5">
        <div class="col-12 col-md-8">
            <img src="/public/img/svg/step1.svg"/>
        </div>
    </div>
</div>
<?php include 'footer.php';?>